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
        $this->wa_marketing = session('wa_marketing', $agen ? $agen->hp : '0811-8807-177');
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
    <!-- 1. Hero Section -->
    <header class="relative pt-20 pb-32 overflow-hidden bg-gray-900 text-white">
        <div class="absolute inset-0">
            <img src="https://www.megasyariah.co.id/bms-new/edukasi-tips/haji_adalah.png"
                class="w-full h-full object-cover opacity-40 mix-blend-overlay" alt="Kabah Hajj">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/90 to-transparent"></div>

        <div class="container mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center">
            <div class="md:w-2/3 space-y-6 animate-fade-in-up">
                <span
                    class="inline-block py-1 px-4 rounded-full bg-brand-yellow/20 border border-brand-yellow text-brand-yellow font-bold text-xs uppercase tracking-widest mb-2">Program
                    Unggulan</span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Wujudkan Niat Suci<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-yellow to-white">Lebih Cepat
                        &
                        Berkah</span>
                </h1>
                <p class="text-lg text-gray-300 max-w-xl leading-relaxed">
                    Dapatkan porsi Haji Khusus (ONH Plus) Anda hari ini. KOSPE memfasilitasi pembiayaan pengurusan haji
                    khusus dengan angsuran ringan dan tanpa riba.
                </p>
                <div class="flex gap-4 pt-4">
                    <button onclick="document.getElementById('kalkulator').scrollIntoView()"
                        class="px-8 py-3.5 bg-brand-yellow text-gray-900 hover:bg-yellow-500 rounded-xl font-bold transition shadow-lg shadow-yellow-900/50 flex items-center gap-2">
                        <i data-lucide="calculator" class="w-5 h-5"></i> Hitung Angsuran
                    </button>
                    <a href="#brosur"
                        class="px-8 py-3.5 bg-white/10 hover:bg-white/20 border border-white/30 backdrop-blur rounded-xl font-bold transition flex items-center gap-2">
                        <i data-lucide="download" class="w-5 h-5"></i> Unduh Brosur
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Highlight Cards (Overlapping Hero) -->
    <section class="relative z-20 bg-yellow-100">
        <div class="container mx-auto px-4 max-w-5xl py-10 ">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 animate-fade-in-up" style="animation-delay: 0.2s;">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border-b-4 border-brand-orange flex items-start gap-4">
                    <div class="bg-orange-50 text-brand-orange p-3 rounded-xl"><i data-lucide="coins"
                            class="w-8 h-8"></i></div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Uang Muka (DP) Cukup</p>
                        <h4 class="text-xl font-bold text-gray-900">Rp 20 Juta</h4>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border-b-4 border-brand-yellow flex items-start gap-4">
                    <div class="bg-yellow-50 text-brand-yellow p-3 rounded-xl"><i data-lucide="clock"
                            class="w-8 h-8"></i></div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Estimasi Masa Tunggu</p>
                        <h4 class="text-xl font-bold text-gray-900">8 - 10 Tahun</h4>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-xl p-6 border-b-4 border-green-500 flex items-start gap-4">
                    <div class="bg-green-50 text-green-500 p-3 rounded-xl"><i data-lucide="check-circle-2"
                            class="w-8 h-8"></i></div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Kepastian Berangkat</p>
                        <h4 class="text-xl font-bold text-gray-900">Nomor Porsi Resmi</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Pengertian & Detail Layanan -->
    <section class="py-20 bg-gray-50 relative">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern -z-10"></div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-brand-orange font-bold uppercase tracking-wider text-sm">Tentang Program</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Apa itu Pembiayaan Haji Khusus?
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-lg">
                        <strong>Pembiayaan Haji Khusus KOSPE</strong> adalah fasilitas pembiayaan talangan haji yang
                        diberikan kepada anggota untuk memperoleh porsi <strong>Haji Khusus (ONH Plus)</strong> dari
                        Kementerian Agama RI.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Berbeda dengan Haji Reguler yang masa tunggunya bisa puluhan tahun, Haji Khusus memiliki masa
                        tunggu yang jauh lebih singkat (sekitar 8-10 tahun). Melalui program ini, KOSPE membayarkan
                        lunas Biaya Penyelenggaraan Ibadah Haji (BPIH) Khusus ke Kemenag di awal, dan Anda cukup
                        mengangsurnya ke KOSPE dengan akad syariah tanpa denda keterlambatan dan tanpa sita.
                    </p>

                    <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm flex items-start gap-4">
                        <i data-lucide="shield-check" class="w-6 h-6 text-green-600 flex-shrink-0 mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-800">Sinergi Travel Terpercaya</h4>
                            <p class="text-sm text-gray-500 mt-1">KOSPE bekerjasama secara resmi dengan Biro Perjalanan
                                Ibadah Haji (PIHK) yang telah mengantongi izin resmi dari Kementerian Agama Republik
                                Indonesia.</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-brand-yellow/20 rounded-[2rem] transform rotate-3 scale-105"></div>
                    <img src="https://access.amartha.com/uploads/Perbedaan_Haji_dan_Umroh_7ba9259625.jpg"
                        class="relative z-10 w-full h-[400px] object-cover rounded-[2rem] shadow-xl" alt="Haji Plus">

                    <div
                        class="absolute -left-8 top-12 bg-white p-4 rounded-2xl shadow-xl z-20 flex items-center gap-3 border border-gray-100 hidden md:flex">
                        <div
                            class="w-12 h-12 bg-brand-red text-white rounded-full flex items-center justify-center font-bold text-xl">
                            <i data-lucide="check" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Legalitas</p>
                            <p class="font-bold text-gray-900">Izin Kemenag Resmi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Keunggulan Haji Khusus KOSPE</h2>
                <div class="w-20 h-1 bg-brand-yellow mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-red transition duration-300">
                        <i data-lucide="shield-check" class="w-8 h-8 text-brand-red"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Tanpa Riba</h4>
                    <p class="text-sm text-gray-500">Skema Ijarah murni, tanpa denda keterlambatan yang bersifat ribawi,
                        dan
                        ujrah disepakati di awal.</p>
                </div>
                <!-- Card 2 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-orange transition duration-300">
                        <i data-lucide="banknote" class="w-8 h-8 text-brand-orange"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Angsuran Tetap</h4>
                    <p class="text-sm text-gray-500">Jumlah cicilan per bulan bersifat *flat* (tetap) hingga lunas,
                        sehingga
                        mudah mengatur *cashflow*.</p>
                </div>
                <!-- Card 3 -->

                <!-- Card 4 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-green-500 transition duration-300">
                        <i data-lucide="check-square" class="w-8 h-8 text-green-500"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Kuota Resmi</h4>
                    <p class="text-sm text-gray-500">KOSPE telah bekerjasama dengan Travel dengan izin PIHK Resmi
                        Republik Indonesia</p>
                </div>
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-green-500 transition duration-300">
                        <i data-lucide="check-square" class="w-8 h-8 text-green-500"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Ada Simpanan Haji Khusus</h4>
                    <p class="text-sm text-gray-500">Selama waktu tunggu keberangkatan, anggota dapat menabung di
                        Simpanan Haji Khusus untuk keperluan pelunasan Biaya Haji dan keperluan lainnya</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Syarat & Ketentuan Tab -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Persyaratan & Berkas</h2>
                <div class="w-24 h-1.5 bg-brand-red mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
                <div class="flex border-b border-gray-100">
                    <button
                        class="w-1/2 py-5 text-center font-bold text-brand-red border-b-4 border-brand-red bg-red-50/50"
                        id="btn-syarat">Syarat Pengajuan</button>
                    <button
                        class="w-1/2 py-5 text-center font-semibold text-gray-500 hover:text-brand-orange border-b-4 border-transparent hover:bg-gray-50 transition"
                        id="btn-berkas">Berkas Dibutuhkan</button>
                </div>

                <div class="p-8">
                    <!-- Syarat Content -->
                    <div id="content-syarat" class="space-y-4 animate-fade-in-up">
                        <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Anggota KOSPE</h4>
                                <p class="text-sm text-gray-600 mt-1">Pemohon wajib terdaftar sebagai anggota aktif
                                    Koperasi Syariah Pesantren.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Usia & Kesehatan</h4>
                                <p class="text-sm text-gray-600 mt-1">Berusia minimal 21 tahun (atau sudah menikah) saat
                                    mendaftar porsi haji, sehat jasmani dan rohani.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Kemampuan Finansial</h4>
                                <p class="text-sm text-gray-600 mt-1">Memiliki penghasilan tetap yang dinilai cukup
                                    untuk melunasi angsuran per bulan (akan dilakukan survei/verifikasi oleh tim).</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Pembayaran DP</h4>
                                <p class="text-sm text-gray-600 mt-1">Mampu menyetorkan Uang Muka (Down Payment) sebesar
                                    <strong>Rp 20.000.000,-</strong> pada saat akad disetujui.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Berkas Content -->
                    <div id="content-berkas" class="hidden space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                <h5 class="font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Dokumen
                                    Pribadi</h5>
                                <ul class="space-y-3">
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file-text"
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi KTP Pemohon & Pasangan</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file-text"
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi Kartu Keluarga (KK)</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file-text"
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi Buku Nikah (Bila sudah menikah)
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="image"
                                            class="w-4 h-4 text-gray-400"></i> Pas Foto Berwarna 3x4 & 4x6</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                <h5 class="font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Dokumen
                                    Finansial</h5>
                                <ul class="space-y-3">
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="briefcase"
                                            class="w-4 h-4 text-gray-400"></i> Slip Gaji 3 Bulan Terakhir (Pegawai)</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="building"
                                            class="w-4 h-4 text-gray-400"></i> SKU/SIUP & Laporan Keuangan (Wiraswasta)
                                    </li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i
                                            data-lucide="credit-card" class="w-4 h-4 text-gray-400"></i> Mutasi Rekening
                                        Koran 3 Bulan</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file"
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi NPWP Pribadi</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-4 p-4 bg-yellow-50 rounded-lg text-sm text-yellow-800 flex items-start gap-3">
                            <i data-lucide="info" class="w-5 h-5 flex-shrink-0 mt-0.5"></i>
                            <p><strong>Penting:</strong> Dokumen asli wajib diperlihatkan kepada petugas KOSPE saat
                                penandatanganan akad untuk keperluan verifikasi Porsi Haji.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="brosur" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div
                class="grid grid-cols-1 md:grid-cols-2 gap-3  rounded-[2rem] border border-gray-200 max-w-7xl mx-auto shadow-sm">
                <img src="{{ asset('haji-khusus.jpeg') }}" class="w-full" alt="">
                <img src="{{ asset('it-haji-khusus.jpeg') }}" class="w-full" alt="">

            </div>
        </div>
    </section>
    <!-- 5. Kalkulator Simulasi Skema Pembiayaan -->
    <section id="kalkulator" class="py-20 bg-gray-900 text-white relative overflow-hidden">
        <!-- Decoration -->
        <div
            class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-orange rounded-full blur-[150px] opacity-20 -translate-y-1/2 translate-x-1/3">
        </div>

        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-5 space-y-6">
                    <span class="text-brand-yellow font-bold uppercase tracking-widest text-sm">Simulasi Angsuran</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Skema Pembiayaan Syariah</h2>
                    <p class="text-gray-400 text-lg mb-6">Hitung estimasi angsuran per bulan Anda. Kami menggunakan akad
                        <strong>Multi Jasa</strong> yang sesuai
                        dengan fatwa DSN-MUI. Dan lanjutkan dengan <strong>Simpanan Haji Khusus</strong> yang di
                        setorkan setiap bulan
                        untuk memepersiapkan biaya pelunasan Haji dan kebutuhan lainnya yang dibutuhkan saat
                        keberangkatan nanti.
                    </p>

                    <div class="bg-white/10 backdrop-blur border border-white/20 p-5 rounded-2xl">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-gray-300">Biaya Estimasi ONH Plus</span>
                            <span class="font-bold text-white">± USD 10.500</span>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-gray-300">Setoran Awal / DP Porsi</span>
                            <span class="font-bold text-brand-yellow">Rp 20.000.000</span>
                        </div>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-gray-300">Simapanan Haji Khusus / bulan</span>
                            <span class="font-bold text-brand-yellow" id="simpan">Rp 20.000.000</span>
                        </div>
                        <div class="flex justify-between items-center pt-3 border-t border-white/20">
                            <span class="text-gray-300">Masa Tunggu</span>
                            <span class="font-bold text-white">8 - 10 Tahun</span>
                        </div>
                    </div>
                </div>

                <!-- Calculator Form -->
                <div class="lg:col-span-7">
                    <div class="bg-white text-gray-800 rounded-[2rem] p-8 md:p-10 shadow-2xl">
                        <div class="space-y-6">

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Total Harga Porsi Haji Khusus
                                    (Rp)</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="number" id="input-total"
                                        class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-orange focus:border-brand-orange outline-none transition font-bold text-lg"
                                        value="85000000" step="1000000">
                                </div>
                                <p class="text-xs text-gray-400 mt-1">Estimasi konversi dolar. Bisa diubah sesuai harga
                                    paket travel.</p>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-orange-50 border border-orange-200 rounded-xl p-4">
                                    <label class="block text-xs font-semibold text-brand-orange mb-1">Uang Muka
                                        (Fixed)</label>
                                    <span class="font-bold text-lg text-gray-900">Rp 20.000.000</span>
                                </div>
                                <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                                    <label class="block text-xs font-semibold text-gray-500 mb-1">Total
                                        Pembiayaan</label>
                                    <span id="display-pembiayaan" class="font-bold text-lg text-gray-900">Rp
                                        160.000.000</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Pilih Tenor (Masa
                                    Cicilan)</label>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-orange hover:text-brand-orange transition"
                                        data-val="12">1 Tahun</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-orange hover:text-brand-orange transition"
                                        data-val="24">2 Tahun</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-orange hover:text-brand-orange transition active-tenor bg-orange-50 border-brand-orange text-brand-orange"
                                        data-val="36">3 Tahun</button>

                                </div>
                            </div>

                            <div class="bg-brand-red/5 p-6 rounded-2xl border border-brand-red/10 text-center mt-4">
                                <p class="text-sm text-gray-500 mb-1 font-medium">Estimasi Angsuran per Bulan</p>
                                <h3 class="text-4xl font-bold text-brand-red mb-2" id="result-angsuran">Rp 0</h3>
                                <p class="text-xs text-gray-400">Total sudah termasuk margin pembiayaan syariah
                                </p>
                            </div>

                            <a href="https://api.whatsapp.com/send/?phone={{ $wa_marketing ?? $wa_crm }}&text=saya+mau+ajukan+pembiayaan+haji+khusus+di+KOSPE&type=phone_number&app_absent=0"
                                class="block w-full text-center bg-brand-orange text-white font-bold py-4 rounded-xl hover:bg-orange-700 transition shadow-lg shadow-orange-200">
                                Ajukan Pembiayaan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="kontak" class="py-24 bg-gray-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-pattern-orange -z-10"></div>

        <div class="container mx-auto px-4 max-w-4xl">
            <div
                class="bg-white rounded-[2rem] p-10 md:p-14 shadow-2xl relative overflow-hidden text-center border-t-8 border-t-brand-orange">

                <h2 class="text-2xl md:text-4xl font-black text-gray-900 mb-4 tracking-wide">DAFTAR SEKARANG JUGA!</h2>

                <div
                    class="bg-gray-50 border border-gray-200 rounded-2xl p-8 shadow-inner text-gray-900 transform hover:scale-105 transition duration-300">
                    <div
                        class="w-16 h-16 bg-brand-orange text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="headset" class="w-8 h-8"></i>
                    </div>
                    <p class="text-sm font-bold text-gray-500 uppercase tracking-wider mb-2">Info & Pendaftaran</p>
                    <h3 class="text-2xl font-black text-gray-900 mb-1">{{ $marketing ?? $crm }}</h3>
                    <p class="text-3xl font-bold text-brand-orange mb-8 font-mono">
                        {{ '0' . substr($wa_marketing, 2) ?? $wa_crm }}
                    </p>
                    <div class="flex gap-3 md:flex-row flex-col">
                        <a href="https://wa.me/{{ $wa_marketing }}" target="_blank"
                            class="block w-full bg-green-500 text-white font-bold py-4 rounded-xl hover:bg-green-600 transition shadow-lg shadow-green-200 flex items-center justify-center gap-2 text-lg">
                            <i data-lucide="message-circle" class="w-6 h-6"></i> Hubungi via WhatsApp
                        </a>
                        <a href="{{ route('form.haji-khusus') }}"
                            class="block w-full bg-blue-500 text-white font-bold py-4 rounded-xl hover:bg-blue-600 transition shadow-lg shadow-blue-200 flex items-center justify-center gap-2 text-lg">
                            <i data-lucide="file-text" class="w-6 h-6"></i> Isi Form Pendaftaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 6. Brosur & CTA -->

    @push('scripts')
        <script>
            // Tabs Logic
            $('#btn-syarat').click(function () {
                $(this).addClass('text-brand-red border-brand-red bg-red-50/50').removeClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#btn-berkas').removeClass('text-brand-red border-brand-red bg-red-50/50').addClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#content-syarat').show().addClass('animate-fade-in-up');
                $('#content-berkas').hide();
            });

            $('#btn-berkas').click(function () {
                $(this).addClass('text-brand-red border-brand-red bg-red-50/50').removeClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#btn-syarat').removeClass('text-brand-red border-brand-red bg-red-50/50').addClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#content-berkas').show().addClass('animate-fade-in-up');
                $('#content-syarat').hide();
            });

            // Calculator Logic
            let selectedTenor = 36;
            const dp = 20000000;
            let marginRate = 0.02; // Simulasi margin 2% per bulan flat
            let totalSimpanan = 93500000;
            let jkw = 48;

            // Bind Events
            $('#input-total').on('input change', calculateInstallment);

            $('.tenor-btn').click(function () {
                $('.tenor-btn').removeClass('bg-orange-50 border-brand-orange text-brand-orange active-tenor');
                $(this).addClass('bg-orange-50 border-brand-orange text-brand-orange active-tenor');
                selectedTenor = parseInt($(this).data('val'));
                console.log('Selected Tenor:', selectedTenor);
                if (selectedTenor < 24) {
                    marginRate = 0.018; // Margin lebih rendah untuk tenor dibawah 2 tahun
                    jkw = 72
                } else if (selectedTenor < 36) {
                    marginRate = 0.019; // Margin sedikit lebih tinggi untuk tenor 3 tahun
                    jkw = 60
                } else {
                    marginRate = 0.02; // Margin tertinggi untuk tenor 5 tahun
                    jkw = 48
                }

                calculateInstallment();
            });

            function calculateInstallment() {
                let totalCost = parseFloat($('#input-total').val()) || 0;

                // Pastikan total biaya tidak lebih kecil dari DP
                if (totalCost < dp) {
                    totalCost = dp;
                }

                const pembiayaan = totalCost - dp;

                // Format IDR helper
                const formatIDR = (num) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0, maximumFractionDigits: 0 }).format(num);

                $('#display-pembiayaan').text(formatIDR(pembiayaan));

                // Hitung Angsuran: (Pembiayaan + (Pembiayaan * Margin * Tenor)) / Tenor
                const totalMargin = pembiayaan * marginRate * selectedTenor;
                const totalHutang = pembiayaan + totalMargin;
                let angsuran = totalHutang / selectedTenor;

                if (pembiayaan === 0) angsuran = 0;

                $('#result-angsuran').text(formatIDR(angsuran));
                let simpan = totalSimpanan / jkw;

                $('#simpan').text(formatIDR(simpan));
            }

            // Initial calc
            calculateInstallment();
        </script>
    @endpush
</div>