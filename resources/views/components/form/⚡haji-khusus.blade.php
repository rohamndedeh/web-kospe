<?php

use Livewire\Component;
use App\Models\Agen;

new class extends Component {
    public $marketing;
    public $wa_marketing;

    public function mount($nama = null)
    {
        $agen = Agen::where('kode', $nama)->first();
        $this->marketing = session('marketing', $agen ? $agen->nama : 'CRM KOSPE');
        $this->wa_marketing = session('wa_marketing', $agen ? $agen->hp : '628118807177');
    }

    public function render()
    {
        return $this->view([
            'marketing' => $this->marketing,
            'wa_marketing' => $this->wa_marketing,
            'crm' => 'CRM KOSPE',
            'wa_crm' => '0811-8807-177',
        ]);
    }
};
?>

<div>
    <div class="bg-gray-900 text-white py-14 relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1591815302813-f6671ec44e39?q=80&w=1200&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay" alt="Kaaba">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/90 to-transparent"></div>
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-brand-gold rounded-full mix-blend-screen filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/3">
        </div>

        <div
            class="container mx-auto px-4 max-w-6xl relative z-10 flex flex-col md:flex-row justify-between items-center gap-6 animate-fade-in-up">
            <div>
                <span
                    class="inline-block py-1 px-3 rounded-full bg-brand-gold/20 border border-brand-gold text-brand-gold text-xs font-bold uppercase tracking-widest mb-3">Pendaftaran
                    Program</span>
                <h1 class="text-3xl md:text-5xl font-bold mb-2 text-white">Haji Khusus (ONH Plus)</h1>
                <p class="text-gray-300 text-sm md:text-base max-w-xl leading-relaxed">Lengkapi formulir di bawah ini
                    untuk
                    memulai langkah suci Anda menuju Baitullah bersama KOSPE dan travel rekanan resmi Kemenag.</p>
            </div>
        </div>
    </div>
    <main class="container mx-auto px-4 mt-8 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <!-- LEFT COLUMN: FORM -->
            <div class="lg:col-span-8">
                <form id="hajjForm" class="space-y-6">

                    <!-- 1. Data Pemohon -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-gray-100 text-gray-600 rounded-lg"><i data-lucide="user"
                                    class="w-5 h-5"></i></div>
                            Data Calon Jamaah
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm"
                                    placeholder="Sesuai KTP / Paspor">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">NIK (Nomor KTP) <span
                                        class="text-brand-red">*</span></label>
                                <input type="number" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm"
                                    placeholder="16 Digit NIK">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tempat Lahir <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm"
                                    placeholder="Kota kelahiran">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Lahir <span
                                        class="text-brand-red">*</span></label>
                                <input type="date" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm text-gray-600">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Pekerjaan <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm"
                                    placeholder="Contoh: Wiraswasta / PNS">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Status Pernikahan <span
                                        class="text-brand-red">*</span></label>
                                <select required id="status-pernikahan"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm text-gray-700">
                                    <option value="belum_menikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                    <option value="cerai">Cerai Hidup / Mati</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor HP / WA <span
                                        class="text-brand-red">*</span></label>
                                <input type="tel" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm"
                                    placeholder="0812...">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email <span
                                        class="text-brand-red">*</span></label>
                                <input type="email" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm"
                                    placeholder="email@anda.com">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Alamat Lengkap <span
                                    class="text-brand-red">*</span></label>
                            <textarea required rows="3"
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-gold/50 focus:border-brand-gold outline-none transition text-sm resize-none"
                                placeholder="Alamat sesuai KTP (Nama jalan, RT/RW, Kec, Kota/Kab)"></textarea>
                        </div>
                    </div>

                    <!-- 2. Informasi Pembiayaan -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-yellow-50 text-brand-gold rounded-lg"><i data-lucide="calculator"
                                    class="w-5 h-5"></i></div>
                            Skema Pembiayaan & Tenor
                        </h2>

                        <div class="bg-gray-50 p-5 rounded-xl border border-gray-200 mb-6">
                            <p class="text-sm text-gray-600 mb-3">Estimasi sisa pembiayaan yang harus diangsur setelah
                                pembayaran Uang Muka (DP) Rp 20.000.000,-. Pilih jangka waktu pelunasan yang Anda
                                inginkan.
                            </p>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Pilih Tenor (Masa Cicilan)
                                    <span class="text-brand-red">*</span></label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <button type="button"
                                        class="tenor-btn py-3 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-gold hover:text-brand-gold transition text-sm"
                                        data-val="12">1 Tahun</button>
                                    <button type="button"
                                        class="tenor-btn py-3 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-gold hover:text-brand-gold transition text-sm"
                                        data-val="24">2 Tahun</button>
                                    <button type="button"
                                        class="tenor-btn py-3 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-gold hover:text-brand-gold transition text-sm active-tenor bg-yellow-50 border-brand-gold text-brand-gold"
                                        data-val="36">3 Tahun</button>
                                    <button type="button"
                                        class="tenor-btn py-3 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-gold hover:text-brand-gold transition text-sm"
                                        data-val="60">5 Tahun</button>
                                </div>
                                <input type="hidden" id="selected-tenor" value="36" required>
                            </div>
                        </div>

                    </div>

                    <!-- 3. Upload Dokumen Wajib -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-blue-50 text-blue-600 rounded-lg"><i data-lucide="folder-open"
                                    class="w-5 h-5"></i></div>
                            Unggah Dokumen Pemberkasan
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- KTP -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto KTP Calon Jamaah
                                    <span class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Pastikan terlihat jelas dan tidak terpotong.
                                </p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="ktp-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="ktp-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="upload-cloud"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-gold transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Klik/Tarik file KTP</span>
                                    </div>
                                    <img id="ktp-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="ktp-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- Kartu Keluarga -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto Kartu Keluarga (KK)
                                    <span class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Wajib untuk pendaftaran porsi Kemenag.</p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="kk-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="kk-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="users"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-gold transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Klik/Tarik file KK</span>
                                    </div>
                                    <img id="kk-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="kk-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- KTP Pasangan (Conditional) -->
                            <div id="upload-pasangan" class="hidden">
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto KTP Pasangan <span
                                        class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Syarat untuk persetujuan pembiayaan.</p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="ktp-pasangan-upload"
                                        accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
                                    <div id="ktp-pasangan-placeholder"
                                        class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="credit-card"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-gold transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Unggah KTP Suami/Istri</span>
                                    </div>
                                    <img id="ktp-pasangan-preview" class="file-preview absolute inset-0 z-10"
                                        alt="Preview">
                                    <button type="button" id="ktp-pasangan-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- Pas Foto -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Pas Foto 3x4 / 4x6 <span
                                        class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-2">Foto formal background warna cerah/putih.</p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="pasfoto-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="pasfoto-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="image"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-gold transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Unggah Pas Foto</span>
                                    </div>
                                    <img id="pasfoto-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="pasfoto-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Bukti Transfer DP -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-green-50 text-green-600 rounded-lg"><i data-lucide="receipt"
                                    class="w-5 h-5"></i></div>
                            Upload Bukti Transfer DP
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Bukti Pembayaran Uang Muka
                                    <span class="text-brand-red">*</span></label>
                                <p class="text-xs text-gray-500 mb-3">Unggah screenshot m-banking atau foto struk ATM
                                    bukti
                                    transfer sejumlah Rp 20.000.000,-.</p>

                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-40 cursor-pointer overflow-hidden group">
                                    <input type="file" id="transfer-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="transfer-placeholder" class="flex flex-col items-center text-center p-4">
                                        <i data-lucide="upload"
                                            class="w-8 h-8 text-green-500 mb-2 group-hover:scale-110 transition"></i>
                                        <span class="text-sm font-medium text-gray-700">Unggah Bukti Transfer</span>
                                    </div>
                                    <img id="transfer-preview" class="file-preview absolute inset-0 z-10"
                                        alt="Preview Bukti Transfer">
                                    <button type="button" id="transfer-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1.5 shadow hover:bg-red-700 transition"><i
                                            data-lucide="x" class="w-4 h-4"></i></button>
                                </div>
                            </div>

                            <div
                                class="bg-yellow-50 p-5 rounded-xl border border-yellow-200 h-full flex flex-col justify-center">
                                <p class="text-xs font-bold text-yellow-800 uppercase tracking-wider mb-2">Transfer DP
                                    ke
                                    Rekening:</p>
                                <div
                                    class="flex items-center gap-3 bg-white p-3 rounded-lg border border-yellow-100 shadow-sm mb-3">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Bank_Syariah_Indonesia.svg/512px-Bank_Syariah_Indonesia.svg.png"
                                        class="h-5" alt="BSI">
                                    <div>
                                        <p class="font-mono font-bold text-gray-800">7123 4567 89</p>
                                        <p class="text-[10px] text-gray-500">a.n KSP KOSPE Pusat (Haji Khusus)</p>
                                    </div>
                                </div>
                                <p class="text-xs text-yellow-700 leading-relaxed italic">*Pastikan nominal transfer
                                    sesuai
                                    agar mempercepat proses validasi porsi Haji Anda.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Persetujuan -->
                    <div class="bg-gray-100 p-5 rounded-xl border border-gray-200">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" required
                                class="mt-1 w-5 h-5 text-brand-gold rounded border-gray-400 focus:ring-brand-gold">
                            <span class="text-sm text-gray-700 leading-relaxed">
                                Saya menyatakan bahwa seluruh data yang diberikan adalah benar dan saya bersedia
                                mematuhi
                                Syarat & Ketentuan Pembiayaan Haji Khusus (ONH Plus) di KOSPE.
                            </span>
                        </label>
                    </div>

                    <div class="flex justify-end pt-2 pb-8">
                        <button type="submit"
                            class="w-full md:w-auto px-10 py-4 bg-brand-dark text-white font-bold rounded-xl hover:bg-black transition shadow-lg shadow-gray-400 flex items-center justify-center gap-2 transform hover:-translate-y-0.5 text-lg">
                            <i data-lucide="send" class="w-5 h-5"></i> Kirim Pendaftaran Haji
                        </button>
                    </div>
                </form>
            </div>

            <!-- RIGHT COLUMN: RINGKASAN PROGRAM (Sticky) -->
            <div class="lg:col-span-4">
                <div class="sticky top-24 space-y-6">

                    <div
                        class="bg-gradient-to-b from-gray-900 to-gray-800 rounded-2xl shadow-xl border border-gray-700 p-6 text-white relative overflow-hidden">
                        <div class="absolute inset-0 bg-pattern-gold -z-10"></div>
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-brand-gold rounded-full filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/2">
                        </div>

                        <h3
                            class="font-bold text-xl border-b border-gray-700 pb-4 mb-5 flex items-center gap-2 text-brand-gold">
                            <i data-lucide="file-check-2" class="w-5 h-5"></i> Ringkasan Program
                        </h3>

                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-400">Produk</span>
                                <span class="font-semibold text-sm">Haji Khusus (ONH Plus)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-400">Estimasi Total Biaya</span>
                                <span class="font-semibold text-sm">± USD 12.000</span>
                            </div>
                            <div class="flex justify-between items-center pb-4 border-b border-gray-700">
                                <span class="text-sm text-gray-400">Estimasi Masa Tunggu</span>
                                <span class="font-bold text-brand-gold">8 - 10 Tahun</span>
                            </div>
                        </div>

                        <div class="bg-black/30 p-4 rounded-xl border border-gray-700 mb-6">
                            <p class="text-xs text-gray-400 mb-1">Uang Muka (DP) Porsi Haji</p>
                            <h4 class="text-2xl font-black text-brand-gold tracking-wide">Rp 20.000.000</h4>
                        </div>

                        <div id="summary-angsuran-box"
                            class="bg-brand-red/10 border border-brand-red/20 p-4 rounded-xl">
                            <p class="text-xs text-gray-300 mb-1">Estimasi Angsuran (<span id="summary-tenor">36</span>
                                Bulan)</p>
                            <h4 class="text-xl font-bold text-white" id="summary-angsuran">Rp 5.333.333 <span
                                    class="text-xs font-normal text-gray-400">/bln</span></h4>
                            <p class="text-[10px] text-gray-400 mt-2">*Nilai angsuran adalah simulasi kotor (gross) dan
                                dapat disesuaikan kembali saat akad disetujui.</p>
                        </div>
                    </div>

                    <!-- Bantuan -->
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6 flex items-start gap-4">
                        <div class="bg-green-50 text-green-600 p-3 rounded-full flex-shrink-0">
                            <i data-lucide="headset" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900 text-sm">Butuh Panduan?</h4>
                            <p class="text-xs text-gray-500 mb-3 mt-1">Tim Haji & Umroh kami siap memandu proses
                                pendaftaran
                                Anda.</p>
                            <a href="#"
                                class="inline-block text-xs font-bold text-green-600 hover:text-green-700 hover:underline">Chat
                                CS Haji via WhatsApp &rarr;</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- Success Modal -->
    <div id="successModal"
        class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-3xl shadow-2xl max-w-md w-full p-8 text-center transform scale-0 transition-transform duration-300 border-t-8 border-t-brand-gold"
            id="modalContent">
            <div
                class="w-20 h-20 bg-yellow-50 text-brand-gold rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="check-circle-2" class="w-10 h-10"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Alhamdulillah!</h3>
            <h4 class="text-lg font-semibold text-brand-red mb-4">Pendaftaran Diterima</h4>
            <p class="text-gray-600 mb-6 leading-relaxed text-sm">Formulir pendaftaran Haji Khusus Anda beserta bukti
                transfer DP telah kami terima. Tim KOSPE akan segera menghubungi Anda untuk tahap verifikasi berkas dan
                penerbitan nomor Porsi Haji (SPPH).</p>
            <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 mb-6">
                <p class="text-xs text-gray-500 mb-1">Nomor Registrasi Haji:</p>
                <p class="font-mono font-bold text-gray-800 tracking-wider text-lg">REG-HAJ-26051</p>
            </div>
            <a href="index.html"
                class="block w-full bg-gray-900 text-brand-gold font-bold py-3.5 rounded-xl hover:bg-black transition shadow-md">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        function setupImagePreview(inputId, previewId, placeholderId, removeBtnId) {
            const input = $('#' + inputId);
            const preview = $('#' + previewId);
            const placeholder = $('#' + placeholderId);
            const removeBtn = $('#' + removeBtnId);
            const dropArea = input.closest('.file-drop-area');

            input.on('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    if (file.type.match('image.*')) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            preview.attr('src', e.target.result).show();
                            placeholder.hide();
                            removeBtn.show();
                            dropArea.addClass('border-brand-gold bg-white').removeClass('border-gray-300 bg-gray-50');
                        }
                        reader.readAsDataURL(file);
                    } else {
                        alert('Harap unggah file berupa gambar (JPG/PNG).');
                        input.val(''); // Reset
                    }
                }
            });

            removeBtn.click(function (e) {
                e.preventDefault();
                input.val(''); // Reset input
                preview.attr('src', '').hide();
                placeholder.show();
                $(this).hide();
                dropArea.removeClass('border-brand-gold bg-white').addClass('border-gray-300 bg-gray-50');
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
        setupImagePreview('kk-upload', 'kk-preview', 'kk-placeholder', 'kk-remove');
        setupImagePreview('ktp-pasangan-upload', 'ktp-pasangan-preview', 'ktp-pasangan-placeholder', 'ktp-pasangan-remove');
        setupImagePreview('pasfoto-upload', 'pasfoto-preview', 'pasfoto-placeholder', 'pasfoto-remove');
        setupImagePreview('transfer-upload', 'transfer-preview', 'transfer-placeholder', 'transfer-remove');


        // --- Simulasi Tenor & Angsuran di Sticky Sidebar ---
        const baseHargaEstimasi = 180000000; // Misal 180 Juta (estimasi usd 12rb)
        const dp = 20000000;
        let marginRate = 0.01; // 1% per bulan flat untuk pembiayaan haji

        function calculateInstallment(months) {
            const pembiayaan = baseHargaEstimasi - dp;
            const totalMargin = pembiayaan * marginRate * months;
            const totalHutang = pembiayaan + totalMargin;
            const angsuran = totalHutang / months;

            const formatter = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 });

            $('#summary-angsuran').html(`${formatter.format(angsuran)} <span class="text-xs font-normal text-gray-400">/bln</span>`);
        }

        // Tenor Button Logic
        $('.tenor-btn').click(function () {
            $('.tenor-btn').removeClass('active-tenor bg-yellow-50 border-brand-gold text-brand-gold');
            $(this).addClass('active-tenor bg-yellow-50 border-brand-gold text-brand-gold');
            const val = $(this).data('val');
            if (val < 24) {
                marginRate = 0.018; // Margin lebih rendah untuk tenor dibawah 2 tahun
            } else if (val < 36) {
                marginRate = 0.019; // Margin sedikit lebih tinggi untuk tenor 3 tahun
            } else {
                marginRate = 0.02; // Margin tertinggi untuk tenor 5 tahun
            }
            $('#selected-tenor').val(val);
            $('#summary-tenor').text(val);

            calculateInstallment(parseInt(val));
        });

        // Initial calc for 36 months
        calculateInstallment(36);


        // Form Submit Simulation
        $('#hajjForm').on('submit', function (e) {
            e.preventDefault();

            const btn = $(this).find('button[type="submit"]');
            const originalHtml = btn.html();

            // Set loading state
            btn.html('<i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i> Memproses Pengajuan...').prop('disabled', true);
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