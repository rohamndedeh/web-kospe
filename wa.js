const {
    default: makeWASocket,
    useMultiFileAuthState,
    DisconnectReason
} = require('@whiskeysockets/baileys');
const pino = require('pino');
const express = require('express');
const http = require('http');
const socketIO = require('socket.io');
const qrcode = require('qrcode');
const basicAuth = require('express-basic-auth');
const fs = require('fs');
const path = require('path');
const app = express();
const server = http.createServer(app);
const io = socketIO(server, {
    cors: {
        origin: '*'
    }
});
app.use(basicAuth({
    users: {
        admin: 'password-anda'
    },
    challenge: true
}));
app.set('view engine', 'ejs');
app.use(express.json()); /* |-------------------------------------------------------------------------- | Global Variables |-------------------------------------------------------------------------- */
const sessions = {};
const sessionLogs = {};
const sessionPhones = {};
const sessionStatus = {}; /* |-------------------------------------------------------------------------- | Session Directory |-------------------------------------------------------------------------- */
const SESSION_DIR = path.join(__dirname, 'sessions');
if (!fs.existsSync(SESSION_DIR)) {
    fs.mkdirSync(SESSION_DIR, {
        recursive: true
    });
} /* |-------------------------------------------------------------------------- | Helper Log |-------------------------------------------------------------------------- */
function addLog(sessionId, msg) {
    if (!sessionLogs[sessionId]) {
        sessionLogs[sessionId] = [];
    }
    const log = `[${new Date().toLocaleTimeString()}] ${msg}`;
    sessionLogs[sessionId].push(log);
    if (sessionLogs[sessionId].length > 50) {
        sessionLogs[sessionId].shift();
    }
    console.log(`[${sessionId}] ${msg}`);
    io.emit('log_update', {
        sessionId,
        log
    });
} /* |-------------------------------------------------------------------------- | Init Session |-------------------------------------------------------------------------- */
async function initSession(sessionId) {
    try {
        if (sessions[sessionId]) {
            console.log(`Session ${sessionId} already running`);
            return;
        }
        const sessionPath = path.join(SESSION_DIR, sessionId);
        if (!fs.existsSync(sessionPath)) {
            fs.mkdirSync(sessionPath, {
                recursive: true
            });
        }
        const {
            state,
            saveCreds
        } = await useMultiFileAuthState(sessionPath);
        addLog(sessionId, 'Initializing session...');
        const sock = makeWASocket({
            auth: state,
            printQRInTerminal: true,
            logger: pino({
                level: 'silent'
            }),
            browser: ['Ubuntu', 'Chrome', '20.0.04']
        });
        sessions[sessionId] = sock;
        sock.ev.on('creds.update', saveCreds);
        sock.ev.on('connection.update', async (update) => {
            try {
                const {
                    connection,
                    lastDisconnect,
                    qr
                } = update; /* |-------------------------------------------------------------------------- | QR CODE |-------------------------------------------------------------------------- */
                if (qr) {
                    const qrBase64 = await qrcode.toDataURL(qr);
                    io.emit('qr_update', {
                        sessionId,
                        qr: qrBase64
                    });
                    addLog(sessionId, 'QR Code updated, please scan.');
                } /* |-------------------------------------------------------------------------- | CONNECTED |-------------------------------------------------------------------------- */
                if (connection === 'open') {
                    const rawNumber = sock.user.id.split(':')[0];
                    sessionPhones[sessionId] = rawNumber;
                    sessionStatus[sessionId] = 'Connected';
                    io.emit('status_update', {
                        sessionId,
                        status: 'Connected',
                        phoneNumber: rawNumber
                    });
                    io.emit('qr_update', {
                        sessionId,
                        qr: null
                    });
                    addLog(sessionId, `Connected as ${rawNumber}`);
                } /* |-------------------------------------------------------------------------- | DISCONNECTED |-------------------------------------------------------------------------- */
                if (connection === 'close') {
                    const reason = lastDisconnect ? .error ? .output ? .statusCode;
                    const shouldReconnect = reason !== DisconnectReason.loggedOut;
                    addLog(sessionId, `Disconnected. Reason: ${reason}`);
                    delete sessions[sessionId];
                    if (shouldReconnect) {
                        addLog(sessionId, 'Reconnecting...');
                        setTimeout(() => {
                            initSession(sessionId);
                        }, 5000);
                    } else {
                        addLog(sessionId, 'Logged out.');
                        sessionStatus[sessionId] = 'Logged Out';
                        io.emit('status_update', {
                            sessionId,
                            status: 'Logged Out'
                        });
                    }
                }
            } catch (err) {
                console.error(err);
                addLog(sessionId, err.message);
            }
        });
    } catch (err) {
        console.error(err);
        addLog(sessionId, err.message);
    }
} /* |-------------------------------------------------------------------------- | Auto Load Existing Sessions |-------------------------------------------------------------------------- */
async function loadSessions() {
    const folders = fs.readdirSync(SESSION_DIR);
    for (const folder of folders) {
        const fullPath = path.join(SESSION_DIR, folder);
        if (fs.lstatSync(fullPath).isDirectory()) {
            console.log(`Loading session: ${folder}`);
            await initSession(folder);
        }
    }
} /* |-------------------------------------------------------------------------- | Routes |-------------------------------------------------------------------------- */
app.get('/', (req, res) => {
    const sessionList = Object.keys(sessions);
    res.render('index', {
        sessionList,
        sessionPhones,
        sessionStatus
    });
});
app.post('/add-session', async (req, res) => {
    try {
        const {
            sessionId
        } = req.body;
        if (!sessionId) {
            return res.json({
                success: false,
                message: 'Session ID required'
            });
        }
        await initSession(sessionId);
        return res.json({
            success: true
        });
    } catch (err) {
        return res.json({
            success: false,
            error: err.message
        });
    }
});
app.post('/delete-session', async (req, res) => {
    try {
        const {
            sessionId
        } = req.body;
        if (sessions[sessionId]) {
            try {
                await sessions[sessionId].logout();
            } catch (e) {}
            delete sessions[sessionId];
        }
        const sessionPath = path.join(SESSION_DIR, sessionId);
        fs.rmSync(sessionPath, {
            recursive: true,
            force: true
        });
        addLog(sessionId, 'Session deleted');
        return res.json({
            success: true
        });
    } catch (err) {
        return res.json({
            success: false,
            error: err.message
        });
    }
}); /* |-------------------------------------------------------------------------- | Start Server |-------------------------------------------------------------------------- */
server.listen(3000, '127.0.0.1', async () => {
    console.log('Server running on port 3000');
    await loadSessions();
});
