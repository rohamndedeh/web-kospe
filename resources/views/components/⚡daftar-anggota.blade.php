<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Anggota;

new class extends Component {
    use WithFileUploads;

    public $nama;
    public $noktp;
    public $jk;
    public $tempatLhr;
    public $ttl;
    public $alamat;
    public $hp;
    public $email;
    public $ktp_kp;
    public $ktp_desa;
    public $ktp_kec;
    public $ktp_kota;
    public $ktp_prop;
    public $ibu;
    public $ahliWaris;
    public $hubAhliWaris;
    public $hpAhliWaris;
    public $setoran;
    public $ktp;
    public $bukti_transfer;
    public $snk;

    protected $rules = [
        'nama' => 'required',
        'noktp' => 'required',
        'email' => 'required|email|unique:anggota,email',
        'alamat' => 'required',
        'hp' => 'required|unique:anggota,hp',
        'setoran' => 'required',
        'ibu' => 'required',
        'ktp' => 'required|image|max:2048',
        'bukti_transfer' => 'required|image|max:2048',
    ];

    public function submit()
    {
        $this->validate();

        // Upload file
        $ktpName = Str::uuid() . '.' . $this->ktp->getClientOriginalExtension();
        $transferName = Str::uuid() . '.' . $this->bukti_transfer->getClientOriginalExtension();

        $this->ktp->storeAs('anggota/ktp', $ktpName, 'public');
        $this->bukti_transfer->storeAs('anggota/transfer', $transferName, 'public');

        // Simpan anggota
        Anggota::create([
            'nama' => $this->nama,
            'ktp' => $this->noktp,
            'hp' => $this->hp,
            'tempat_lhr' => $this->tempatLhr,
            'ttl' => $this->ttl,
            'email' => $this->email,
            'alamat' => $this->alamat,
            'ibu' => $this->ibu,
            'waris_nama' => $this->ahliWaris,
            'waris_hub' => $this->hubAhliWaris,
            'waris_hp' => $this->hpAhliWaris,
            'setoran' => $this->setoran,
            'ktp_kp' => $this->ktp_kp,
            'ktp_kec' => $this->ktp_kec,
            'ktp_desa' => $this->ktp_desa,
            'ktp_kota' => $this->ktp_kota,
            'ktp_prop' => $this->ktp_prop,
            'sex' => $this->jk,
            'img_ktp' => $ktpName,
            'img_tf' => $transferName,
        ]);

        session()->flash('success', 'Pendaftaran berhasil ✅');
        $this->dispatch('pendaftaranBerhasil');
        $this->reset();
    }
};
?>

<div>
    <!-- Main Form Container -->
    <main class="container mx-auto px-4 mt-8 max-w-4xl mb-12">

        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Formulir Pendaftaran Anggota</h1>
            <p class="text-gray-600">Lengkapi data diri Anda di bawah ini untuk bergabung menjadi keluarga besar
                Koperasi
                Syariah Pesantren.</p>
        </div>

        @if (session()->has('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form id="registrationForm" class="space-y-8" wire:submit="submit">

            <!-- SECTION 1: Data Pribadi -->
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                    <div class="p-1.5 bg-brand-red/10 text-brand-red rounded-lg"><i data-lucide="user"
                            class="w-5 h-5"></i>
                    </div>
                    Data Pribadi
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap (Sesuai KTP) <span
                                class="text-red-500">*</span></label>
                        <input type="text" required wire:model="nama"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition"
                            placeholder="Masukkan nama lengkap">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Induk Kependudukan (NIK)
                            <span class="text-red-500">*</span></label>
                        <input type="number" required wire:model="noktp"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition"
                            placeholder="16 Digit NIK">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Tempat Lahir <span
                                class="text-red-500">*</span></label>
                        <input type="text" required wire:model="tempatLhr"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition"
                            placeholder="Kota kelahiran">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Lahir <span
                                class="text-red-500">*</span></label>
                        <input type="date" required wire:model="ttl"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Jenis Kelamin <span
                                class="text-red-500">*</span></label>
                        <select required wire:model="jk"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                    <div class="p-1.5 bg-brand-red/10 text-brand-red rounded-lg"><i data-lucide="user"
                            class="w-5 h-5"></i>
                    </div>
                    Data Keluarga
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Ibu Kandung <span
                                class="text-red-500">*</span></label>
                        <input type="text" required wire:model="ibu"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Ahli Waris
                            <span class="text-red-500">*</span></label>
                        <input type="text" required wire:model="ahliWaris"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Hubungan Ahli Waris
                            <span class="text-red-500">*</span></label>
                        <input type="text" required wire:model="hubAhliWaris"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">No. HP Ahli Waris
                            <span class="text-red-500">*</span></label>
                        <input type="text" required wire:model="hpAhliWaris"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition">
                    </div>
                </div>
            </div>

            <!-- SECTION 2: Kontak & Alamat -->
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                    <div class="p-1.5 bg-blue-100 text-blue-600 rounded-lg"><i data-lucide="map-pin"
                            class="w-5 h-5"></i>
                    </div>
                    Alamat dan Kontak
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor WhatsApp Aktif <span
                                class="text-red-500">*</span></label>
                        <input type="tel" required wire:model="hp"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition"
                            placeholder="0812xxxxxxx">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Email <span
                                class="text-red-500">*</span></label>
                        <input type="email" required wire:model="email"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition"
                            placeholder="email@anda.com">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700">Alamat Lengkap (Sesuai KTP) <span
                            class="text-red-500">*</span></label>
                    <textarea required rows="3" wire:model="alamat"
                        class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"
                        placeholder="Nama jalan, RT/RW, Kelurahan, Kecamatan..."></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 mt-3">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Kampung <span
                                class="text-red-500">*</span></label>
                        <input required rows="3" wire:model="ktp_kp"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"></input>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Desa/Keluaran <span
                                class="text-red-500">*</span></label>
                        <input required rows="3" wire:model="ktp_desa"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"></input>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Kecamatan <span
                                class="text-red-500">*</span></label>
                        <input required rows="3" wire:model="ktp_kec"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"></input>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Kota/Kabupaten <span
                                class="text-red-500">*</span></label>
                        <input required rows="3" wire:model="ktp_kota"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"></input>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Propinsi <span
                                class="text-red-500">*</span></label>
                        <input required rows="3" wire:model="ktp_prop"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"></input>
                    </div>
                </div>
            </div>

            <!-- SECTION 3: Upload Dokumen -->
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                    <div class="p-1.5 bg-brand-yellow/20 text-brand-yellow rounded-lg"><i data-lucide="camera"
                            class="w-5 h-5"></i></div>
                    Unggah Dokumen
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Upload KTP -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Foto KTP Asli <span
                                class="text-red-500">*</span></label>
                        <p class="text-xs text-gray-500 mb-3">Pastikan foto terlihat jelas, tidak terpotong, dan tulisan
                            terbaca.</p>

                        <div
                            class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-48 cursor-pointer overflow-hidden group">
                            <input type="file" id="ktp-upload" accept="image/jpeg, image/png, image/jpg"
                                wire:model="ktp" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20"
                                required>

                            <!-- Placeholder UI -->
                            <div id="ktp-placeholder" class="flex flex-col items-center text-center p-4">
                                <div
                                    class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-400 mb-2 shadow-sm group-hover:text-brand-orange group-hover:scale-110 transition">
                                    <i data-lucide="upload-cloud" class="w-6 h-6"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Klik atau Tarik foto ke sini</span>
                                <span class="text-[10px] text-gray-400 mt-1">Format: JPG/PNG (Maks 2MB)</span>
                            </div>
                            <div wire:loading wire:target="ktp" class="text-blue-600 mt-2">
                                Uploading...
                            </div>
                            @if ($ktp)
                                <!-- Image Preview -->
                                <img id="ktp-preview" src="{{ $ktp->temporaryUrl() }}"
                                    class="file-preview absolute inset-0 z-10" alt="Preview KTP">
                            @endif

                            <!-- Remove Button -->
                            <button type="button" id="ktp-remove"
                                class="hidden absolute top-2 right-2 z-30 bg-red-500 text-white rounded-full p-1.5 shadow hover:bg-red-600 transition">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>


                </div>
            </div>

            <!-- SECTION 4: Pembayaran Setoran Awal -->
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                <h2 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                    <div class="p-1.5 bg-green-100 text-green-600 rounded-lg"><i data-lucide="wallet"
                            class="w-5 h-5"></i>
                    </div>
                    Pembayaran Setoran Awal
                </h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Info Pembayaran -->
                    <div>
                        <p class="text-sm text-gray-600 mb-4">Untuk mengaktifkan keanggotaan, Anda diwajibkan menyetor
                            Simpanan Pokok dan Simpanan Wajib (Bulan ke-1).</p>

                        <div class="bg-gray-50 rounded-xl p-5 border border-gray-200 mb-6">
                            <div class="flex justify-between items-center mb-2 text-sm">
                                <span class="text-gray-600">Simpanan Pokok (1x)</span>
                                <span class="font-semibold text-gray-800">Rp 80.000</span>
                            </div>
                            <div class="flex justify-between items-center mb-4 text-sm pb-4 border-b border-gray-200">
                                <span class="text-gray-600">Simpanan Wajib (Bulan 1)</span>
                                <span class="font-semibold text-gray-800">Rp 50.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-gray-800">Total Tagihan</span>
                                <span class="text-xl font-bold text-brand-red">Rp 130.000</span>
                            </div>
                        </div>

                        <div class="bg-orange-50 border-l-4 border-brand-orange p-4 rounded-r-xl">
                            <p class="text-xs font-bold text-brand-orange uppercase mb-1">Transfer ke Rekening:</p>
                            <div class="flex items-center gap-3">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Bank_Syariah_Indonesia.svg/512px-Bank_Syariah_Indonesia.svg.png"
                                    class="h-6" alt="BSI">
                                <div>
                                    <p class="font-mono font-bold text-gray-800 text-lg">77777 000 43</p>
                                    <p class="text-xs text-gray-600">a.n KOSPE</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 bg-orange-50 border-l-4 border-brand-orange p-4 rounded-r-xl">
                            <p class="text-xs font-bold text-brand-orange uppercase mb-1">Transfer ke HNI Cash:</p>
                            <div class="flex items-center gap-3">
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhuFeD6RaYmjby2wJn5L6G0x-YDbfUd7PB03ysB9pDAZ01Yr030E1Tfw0f9gQoiKOHr7gzk3MPYHQlrYN8L5PjNATdvRPHXzuZsmHa-yEi53Yp_u4ooWWQtPSud3HSPb8NuAWLyuHnsIas/s640/apa+itu+hni+cash.jpg"
                                    class="h-6" alt="BSI">
                                <div>
                                    <p class="font-mono font-bold text-gray-800 text-lg">ID 01541219</p>
                                    <p class="text-xs text-gray-600">a.n Koperasi Syariah Pesantren Entrepreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Upload Bukti Transfer -->
                    <div>
                        <div class="mb-3">
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Nilai Setoran <span
                                    class="text-red-500">*</span></label>
                            <input required rows="3" wire:model="setoran"
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"></input>
                        </div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Unggah Bukti Transfer <span
                                class="text-red-500">*</span></label>
                        <p class="text-xs text-gray-500 mb-3">Foto struk ATM atau screenshot m-Banking yang sah.</p>

                        <div
                            class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-48 cursor-pointer overflow-hidden group">
                            <input type="file" id="transfer-upload" accept="image/jpeg, image/png, image/jpg"
                                wire:model="bukti_transfer"
                                class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>

                            <!-- Placeholder UI -->
                            <div id="transfer-placeholder" class="flex flex-col items-center text-center p-4">
                                <div
                                    class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-gray-400 mb-2 shadow-sm group-hover:text-green-500 group-hover:scale-110 transition">
                                    <i data-lucide="receipt" class="w-6 h-6"></i>
                                </div>
                                <span class="text-sm font-medium text-gray-700">Unggah Bukti Pembayaran</span>
                            </div>
                            <div wire:loading wire:target="bukti_transfer" class="text-blue-600 mt-2">
                                Uploading...
                            </div>
                            @if ($bukti_transfer)
                                <!-- Image Preview -->
                                <img id="transfer-preview" src="{{ $bukti_transfer->temporaryUrl() }}"
                                    class="file-preview absolute inset-0 z-10" alt="Preview Bukti Transfer">
                            @endif

                            <!-- Remove Button -->
                            <button type="button" id="transfer-remove"
                                class="hidden absolute top-2 right-2 z-30 bg-red-500 text-white rounded-full p-1.5 shadow hover:bg-red-600 transition">
                                <i data-lucide="x" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Persetujuan & Submit -->
            <div class="bg-transparent pt-4">
                <div class="flex items-start gap-3 mb-6 bg-white p-4 rounded-xl border border-gray-200">
                    <input type="checkbox" id="terms-agree" required wire:model="snk" required
                        class="mt-1 w-5 h-5 text-brand-red rounded border-gray-300 focus:ring-brand-red cursor-pointer">
                    <label for="terms-agree" class="text-sm text-gray-600 leading-relaxed cursor-pointer">
                        Dengan ini saya menyatakan bahwa data dan dokumen yang saya berikan adalah benar. Saya bersedia
                        mematuhi Anggaran Dasar (AD), Anggaran Rumah Tangga (ART), dan prinsip Syariah yang berlaku di
                        KOSPE.
                    </label>
                </div>

                <div class="flex flex-col sm:flex-row justify-end gap-4">
                    <button type="button" onclick="history.back()"
                        class="px-8 py-3.5 bg-white border border-gray-300 text-gray-700 font-bold rounded-xl hover:bg-gray-50 transition text-center">
                        Batal
                    </button>
                    <button type="submit"
                        class="px-10 py-3.5 bg-brand-red text-white font-bold rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-200 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                        <i data-lucide="send" class="w-5 h-5"></i> Kirim Pendaftaran
                    </button>
                </div>
            </div>

        </form>
    </main>

    <!-- Success Modal (Hidden by default) -->
    <div id="successModal"
        class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center transform scale-0 transition-transform duration-300"
            id="modalContent">
            <div
                class="w-20 h-20 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="check-circle" class="w-10 h-10"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Pendaftaran Berhasil!</h3>
            <p class="text-gray-600 mb-8 leading-relaxed">Data Anda sedang diproses oleh admin kami. Konfirmasi
                keanggotaan
                dan Nomor ID akan dikirimkan melalui WhatsApp atau Email maksimal 1x24 jam.</p>
            <a href="{{ route('home') }}"
                class="block w-full bg-brand-red text-white font-bold py-3 rounded-xl hover:bg-red-700 transition">
                Kembali ke Beranda
            </a>
        </div>
    </div>
    @script
    <script>

        const btn = $(this).find('button[type="submit"]');
        const originalHtml = btn.html();
        $wire.on('pendaftaranBerhasil', () => {
            btn.html(originalHtml).prop('disabled', false);
            // Show Modal
            $('#successModal').removeClass('hidden').addClass('flex');
            setTimeout(() => {
                $('#modalContent').removeClass('scale-0').addClass('scale-100');
            }, 50);
        });
        $('#registrationForm').on('submit', function (e) {
            e.preventDefault();

            // Show loading state on button
            btn.html('<i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i> Memproses...').prop('disabled', true);
            lucide.createIcons();
        });
    </script>
    @endscript
</div>