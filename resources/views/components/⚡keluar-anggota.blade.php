<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="bg-gray-900 text-white py-12 relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-brand-red rounded-full mix-blend-screen filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/3">
        </div>
        <div
            class="container mx-auto px-4 max-w-6xl relative z-10 text-center md:text-left flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold mb-2">Permohonan Keluar Keanggotaan</h1>
                <p class="text-gray-300 text-sm md:text-base max-w-xl">Kami sangat menghargai perjalanan Anda bersama
                    KOSPE.
                    Silakan lengkapi formulir di bawah ini untuk memproses pencairan simpanan Anda.</p>
            </div>
            <div
                class="bg-white/10 border border-white/20 p-4 rounded-xl backdrop-blur flex items-center gap-3 text-left w-full md:w-auto">
                <i data-lucide="info" class="w-8 h-8 text-brand-yellow flex-shrink-0"></i>
                <p class="text-xs text-gray-200">Proses pencairan dana akan dilakukan maksimal <strong>14 hari
                        kerja</strong> setelah dokumen disetujui.</p>
            </div>
        </div>
    </div>

    <!-- Main Content Grid -->
    <main class="container mx-auto px-4 mt-8 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- LEFT COLUMN: FORM -->
            <div class="lg:col-span-8">
                <form id="resignForm" class="space-y-6">

                    <!-- 1. Data Anggota -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-gray-100 text-gray-600 rounded-lg"><i data-lucide="user-minus"
                                    class="w-5 h-5"></i></div>
                            Data Anggota (Yang Mengundurkan Diri)
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tgl. Pengajuan <span
                                        class="text-brand-red">*</span></label>
                                <input type="date" required wire:model="tgl_pengajuan"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">ID KoSPE
                                    <span class="text-brand-red">*</span></label>
                                <input type="text" required wire:model="id_kospe"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Contoh: AGT-00123">
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap Anggota <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required wire:model="nama"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Sesuai KTP anggota">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">NIK
                                    <span class="text-brand-red">*</span></label>
                                <input type="text" required wire:model="nik"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Contoh: AGT-00123">
                            </div>
                        </div>
                        <div class="mb-5">
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Alamat Sesuai KTP<span
                                    class="text-brand-red">*</span></label>
                            <textarea required wire:model="alamat"
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                placeholder="Alamat lengkap sesuai KTP"></textarea>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">No HP Terdaftar<span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required wire:model="hp"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Contoh: 081234567890">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email Terdaftar<span
                                        class="text-brand-red">*</span></label>
                                <input type="email" required wire:model="email"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Contoh: john.doe@example.com">
                            </div>

                        </div>

                        <div class="mb-5">
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Alasan Mengundurkan Diri<span
                                    class="text-brand-red">*</span></label>
                            <textarea required wire:model="alasan"
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                placeholder="Tuliskan alasan mengundurkan diri..."></textarea>
                        </div>
                    </div>

                    <!-- 2. Status Pengaju (Dinamis) -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-blue-50 text-blue-600 rounded-lg"><i data-lucide="users"
                                    class="w-5 h-5"></i></div>
                            Status Pengajuan
                        </h2>

                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Siapa yang mengajukan
                                permohonan
                                ini? <span class="text-brand-red">*</span></label>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label
                                    class="relative flex cursor-pointer rounded-xl border border-gray-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-brand-red hover:bg-gray-50 transition"
                                    for="status-pribadi">
                                    <div class="flex h-5 items-center">
                                        <input id="status-pribadi" name="status_pengaju" type="radio" value="pribadi"
                                            class="h-4 w-4 border-gray-300 text-brand-red focus:ring-brand-red cursor-pointer"
                                            checked>
                                    </div>
                                    <div class="ml-3 flex flex-col">
                                        <span class="block text-sm font-bold text-gray-900">Anggota Sendiri</span>
                                        <span class="block text-xs text-gray-500 mt-0.5">Saya adalah anggota yang
                                            bersangkutan.</span>
                                    </div>
                                </label>

                                <label
                                    class="relative flex cursor-pointer rounded-xl border border-gray-200 bg-white p-4 shadow-sm focus-within:ring-2 focus-within:ring-brand-red hover:bg-gray-50 transition"
                                    for="status-ahliwaris">
                                    <div class="flex h-5 items-center">
                                        <input id="status-ahliwaris" name="status_pengaju" type="radio"
                                            value="ahli_waris"
                                            class="h-4 w-4 border-gray-300 text-brand-red focus:ring-brand-red cursor-pointer">
                                    </div>
                                    <div class="ml-3 flex flex-col">
                                        <span class="block text-sm font-bold text-gray-900">Ahli Waris / Kerabat</span>
                                        <span class="block text-xs text-gray-500 mt-0.5">Anggota bersangkutan telah
                                            meninggal dunia.</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Kolom Tambahan Jika Ahli Waris -->
                        <div id="form-ahli-waris"
                            class="reveal-content bg-orange-50 border border-brand-orange/30 p-5 rounded-xl">
                            <h4 class="font-bold text-sm text-gray-900 mb-4 border-b border-orange-200 pb-2">Data Ahli
                                Waris
                                (Pengaju)</h4>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Nama Ahli Waris <span
                                            class="text-brand-red">*</span></label>
                                    <input type="text" id="nama-waris" wire:model="nama_waris"
                                        class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-gray-700 mb-1">Hubungan dengan
                                        Anggota
                                        <span class="text-brand-red">*</span></label>
                                    <select id="hub-waris" wire:model="hubungan_waris"
                                        class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm">
                                        <option value="">Pilih Hubungan...</option>
                                        <option value="suami_istri">Suami / Istri</option>
                                        <option value="anak">Anak Kandung</option>
                                        <option value="orangtua">Orang Tua</option>
                                        <option value="saudara">Saudara Kandung</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-gray-700 mb-1">Nomor WhatsApp Pengaju
                                    <span class="text-brand-red">*</span></label>
                                <input type="tel" id="wa-waris" wire:model="wa_waris"
                                    class="w-full px-3 py-2 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="0812...">
                            </div>
                        </div>
                    </div>

                    <!-- 3. Upload Dokumen -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-brand-yellow/20 text-brand-yellow rounded-lg"><i data-lucide="file-up"
                                    class="w-5 h-5"></i></div>
                            Unggah Dokumen Wajib
                        </h2>

                        <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">
                            <!-- KTP Anggota -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto KTP Anggota <span
                                        class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Jika meninggal, gunakan foto KTP lama/KK.</p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="ktp-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="ktp-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="upload-cloud"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-red transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Klik/Tarik file</span>
                                    </div>
                                    <img id="ktp-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="ktp-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- Buku Anggota -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto Buku Keanggotaan
                                    <span class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Halaman depan yang tertera nama & ID.</p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="buku-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="buku-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="book"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-red transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Klik/Tarik file</span>
                                    </div>
                                    <img id="buku-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="buku-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- Dokumen Ahli Waris (Hidden by Default) -->
                            <div id="upload-waris-1" class="reveal-content  ">
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Surat Kuasa / Ahli Waris
                                    <span class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Surat Keterangan Ahli Waris dari
                                    Desa/Kelurahan.
                                </p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="kuasa-upload"
                                        accept="image/jpeg, image/png, image/jpg, application/pdf"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
                                    <div id="kuasa-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="file-signature"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-orange transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Unggah Surat (Img/PDF)</span>
                                    </div>
                                    <img id="kuasa-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="kuasa-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <div id="upload-waris-2" class="reveal-content ">
                                <label class="block text-sm font-semibold text-gray-700 mb-1">KTP Ahli Waris Pengaju
                                    <span class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Identitas KTP Anda yang mengajukan.</p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="ktp-waris-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
                                    <div id="ktp-waris-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="credit-card"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-orange transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Unggah KTP</span>
                                    </div>
                                    <img id="ktp-waris-preview" class="file-preview absolute inset-0 z-10"
                                        alt="Preview">
                                    <button type="button" id="ktp-waris-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Rekening Tujuan Pencairan -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-green-50 text-green-600 rounded-lg"><i data-lucide="banknote"
                                    class="w-5 h-5"></i></div>
                            Rekening Tujuan Pencairan Dana
                        </h2>
                        <div class="bg-green-50/50 p-4 rounded-xl border border-green-100 mb-5 text-sm text-gray-700">
                            Pencairan simpanan pokok, wajib, dan saldo sukarela akan ditransfer ke rekening di bawah ini
                            setelah dikurangi kewajiban pinjaman/pembiayaan (jika ada).
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Bank <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required wire:model="bank"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Contoh: 1234567890">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Rekening <span
                                        class="text-brand-red">*</span></label>
                                <input type="number" required wire:model="norek"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Contoh: 1234567890">
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Pemilik Rekening
                                    <span class="text-brand-red">*</span></label>
                                <input type="text" required wire:model="nama_rek"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red outline-none transition text-sm"
                                    placeholder="Sesuai buku tabungan">
                                <p class="text-[10px] text-brand-orange mt-1">*Nama pemilik rekening diutamakan atas
                                    nama
                                    anggota sendiri atau ahli waris sah pengaju.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Persetujuan -->
                    <div class="bg-gray-100 p-5 rounded-xl border border-gray-200">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" required
                                class="mt-1 w-5 h-5 text-brand-red rounded border-gray-400 focus:ring-brand-red">
                            <span class="text-sm text-gray-700 leading-relaxed">
                                Saya menyatakan bahwa seluruh data yang diberikan adalah benar dan sah. Saya bersedia
                                melepaskan status keanggotaan KOSPE dan memahami bahwa pencairan dana dilakukan setelah
                                seluruh kewajiban piutang/pembiayaan saya (jika ada) dilunasi secara otomatis dari saldo
                                simpanan saya.
                            </span>
                        </label>
                    </div>

                    <div class="flex justify-end pt-4 pb-8">
                        <button type="submit"
                            class="px-8 py-3.5 bg-brand-red text-white font-bold rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-200 flex items-center gap-2 transform hover:-translate-y-0.5">
                            <i data-lucide="check-circle" class="w-5 h-5"></i> Kirim Permohonan Keluar
                        </button>
                    </div>
                </form>
            </div>

            <!-- RIGHT COLUMN: SYARAT & KETENTUAN (Sticky) -->
            <div class="lg:col-span-4">
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 sticky top-24">
                    <h3
                        class="font-bold text-lg text-gray-800 border-b border-gray-200 pb-3 mb-4 flex items-center gap-2">
                        <i data-lucide="file-warning" class="w-5 h-5 text-brand-orange"></i> Syarat & Ketentuan
                    </h3>

                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <div class="bg-red-50 text-brand-red p-1 rounded-full flex-shrink-0 mt-0.5"><i
                                    data-lucide="info" class="w-4 h-4"></i></div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                <strong class="text-gray-800">Sisa Pembiayaan:</strong> Apabila anggota masih memiliki
                                sisa
                                angsuran pembiayaan (hutang), maka saldo simpanan wajib dan sukarela akan digunakan
                                terlebih
                                dahulu untuk melunasi sisa hutang tersebut.
                            </p>
                        </li>

                        <li class="flex items-start gap-3">
                            <div class="bg-red-50 text-brand-red p-1 rounded-full flex-shrink-0 mt-0.5"><i
                                    data-lucide="info" class="w-4 h-4"></i></div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                <strong class="text-gray-800">Ahli Waris:</strong> Jika anggota meninggal dunia, hak
                                simpanan diserahkan kepada ahli waris yang sah dengan menyertakan Surat Keterangan Ahli
                                Waris
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="bg-red-50 text-brand-red p-1 rounded-full flex-shrink-0 mt-0.5"><i
                                    data-lucide="info" class="w-4 h-4"></i></div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                <strong class="text-gray-800">Status SHU:</strong> Anggota yang keluar sebelum
                                pelaksanaan
                                RAT (Rapat Anggota Tahunan) tidak berhak mendapatkan pembagian SHU pada tahun buku
                                berjalan.
                            </p>
                        </li>
                    </ul>

                    <div class="mt-6 pt-5 border-t border-gray-100">
                        <p class="text-xs text-gray-500 mb-2">Butuh bantuan mengisi form?</p>
                        <a href="https://api.whatsapp.com/send/?phone=628118807177&text=saya+mau+daftar+jadi+anggota"
                            class="flex items-center justify-center gap-2 w-full py-2 bg-green-50 text-green-600 font-bold rounded-lg border border-green-200 hover:bg-green-100 transition text-sm">
                            <i data-lucide="phone-call" class="w-4 h-4"></i> Hubungi Customer Service
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Success Modal -->
    <div id="successModal"
        class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center transform scale-0 transition-transform duration-300"
            id="modalContent">
            <div
                class="w-20 h-20 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="check-circle" class="w-10 h-10"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Permohonan Diterima</h3>
            <p class="text-gray-600 mb-6 leading-relaxed text-sm">Permohonan berhenti keanggotaan Anda telah kami terima
                dan
                akan segera diverifikasi oleh tim administrasi. KOSPE mengucapkan terima kasih atas partisipasi Anda
                selama
                ini.</p>
            <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 mb-6">
                <p class="text-xs text-gray-500 mb-1">Nomor Tiket Pengajuan:</p>
                <p class="font-mono font-bold text-gray-800 tracking-wider">REQ-OUT-88902</p>
            </div>
            <a href="index.html"
                class="block w-full bg-brand-red text-white font-bold py-3 rounded-xl hover:bg-red-700 transition">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@push('script')
    <script>

        $('#form-ahli-waris').css('display', 'none');
        $('#upload-waris-1').css('display', 'none');
        $('#upload-waris-2').css('display', 'none');
        $('input[name="status_pengaju"]').change(function () {
            if ($(this).val() === 'ahli_waris') {
                $('#form-ahli-waris').css('display', 'block');

                // Add Required attrs dynamically
                $('#nama-waris, #hub-waris, #wa-waris, #kuasa-upload, #ktp-waris-upload').prop('required', true);
            } else {
                $('#form-ahli-waris').css('display', 'none');
                $('#upload-waris-1').css('display', 'none');
                $('#upload-waris-2').css('display', 'none');

                // Remove Required attrs dynamically
                $('#nama-waris, #hub-waris, #wa-waris, #kuasa-upload, #ktp-waris-upload').prop('required', false);
            }
        });

        // Image Upload Preview Logic Reusable Function
        function setupImagePreview(inputId, previewId, placeholderId, removeBtnId) {
            const input = $('#' + inputId);
            const preview = $('#' + previewId);
            const placeholder = $('#' + placeholderId);
            const removeBtn = $('#' + removeBtnId);
            const dropArea = input.closest('.file-drop-area');

            input.on('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    // Accept image or pdf (if pdf, show a generic pdf icon instead of image preview)
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            preview.attr('src', e.target.result).show();
                            placeholder.hide();
                            removeBtn.show();
                            dropArea.addClass('border-brand-red bg-white').removeClass('border-gray-300 bg-gray-50');
                        }
                        reader.readAsDataURL(file);
                    } else if (file.type === 'application/pdf') {
                        // Dummy PDF preview
                        preview.attr('src', 'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg').css('object-fit', 'contain').css('padding', '20px').show();
                        placeholder.hide();
                        removeBtn.show();
                        dropArea.addClass('border-brand-red bg-white').removeClass('border-gray-300 bg-gray-50');
                    } else {
                        alert('Harap unggah file berupa gambar (JPG/PNG) atau PDF.');
                        input.val(''); // Reset
                    }
                }
            });

            removeBtn.click(function (e) {
                e.preventDefault();
                input.val(''); // Reset input
                preview.attr('src', '').hide().css('object-fit', 'cover').css('padding', '0');
                placeholder.show();
                $(this).hide();
                dropArea.removeClass('border-brand-red bg-white').addClass('border-gray-300 bg-gray-50');
            });

            // Drag and drop effects
            dropArea.on('dragover', function (e) {
                e.preventDefault();
                e.stopPropagation();
                $(this).addClass('drag-over');
            });

            dropArea.on('dragleave drop', function (e) {
                e.preventDefault();
                e.stopPropagation();
                $(this).removeClass('drag-over');
            });
        }

        // Init File Uploads
        setupImagePreview('ktp-upload', 'ktp-preview', 'ktp-placeholder', 'ktp-remove');
        setupImagePreview('buku-upload', 'buku-preview', 'buku-placeholder', 'buku-remove');
        setupImagePreview('kuasa-upload', 'kuasa-preview', 'kuasa-placeholder', 'kuasa-remove');
        setupImagePreview('ktp-waris-upload', 'ktp-waris-preview', 'ktp-waris-placeholder', 'ktp-waris-remove');

        // Form Submit Simulation
        $('#resignForm').on('submit', function (e) {
            e.preventDefault();

            const btn = $(this).find('button[type="submit"]');
            const originalHtml = btn.html();

            // Set loading state
            btn.html('<i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i> Memproses Data...').prop('disabled', true);
            if (typeof lucide !== 'undefined') lucide.createIcons();

            // Simulate API Call delay
            setTimeout(function () {
                btn.html(originalHtml).prop('disabled', false);
                if (typeof lucide !== 'undefined') lucide.createIcons();

                // Show Success Modal
                $('#successModal').removeClass('hidden').addClass('flex');
                setTimeout(() => {
                    $('#modalContent').removeClass('scale-0').addClass('scale-100');
                }, 50);

            }, 2000);
        });
    </script>
@endpush