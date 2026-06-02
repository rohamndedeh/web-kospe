<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    @push('styles')
        <style>
            /* Slider Styling */
            input[type=range]::-webkit-slider-thumb {
                -webkit-appearance: none;
                height: 20px;
                width: 20px;
                border-radius: 50%;
                background: #DD2127;
                cursor: pointer;
                margin-top: -8px;
            }

            input[type=range]::-webkit-slider-runnable-track {
                width: 100%;
                height: 4px;
                cursor: pointer;
                background: #ddd;
                border-radius: 2px;
            }
        </style>
    @endpush
    <header class="relative pt-20 pb-32 overflow-hidden bg-gray-900 text-white">
        <div class="absolute inset-0">
            <img src="https://www.iniriau.com/gambar/belajar-di-sma.jpg"
                class="w-full h-full object-cover opacity-40 mix-blend-overlay" alt="Kabah Hajj">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/90 to-transparent"></div>

        <div class="container mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center">
            <div class="md:w-2/3 space-y-6 animate-fade-in-up">
                <span
                    class="inline-flex items-center gap-2 py-1 px-4 rounded-full bg-brand-yellow/20 border border-brand-yellow text-brand-yellow font-bold text-xs uppercase tracking-widest mb-2">
                    <i data-lucide="heart-handshake" class="w-4 h-4"></i> Solusi Kebutuhan Jasa
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Wujudkan Rencana <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-brand-yellow to-brand-orange">Keluarga
                        Tercinta</span>
                </h1>
                <p class="text-lg text-gray-300 max-w-xl leading-relaxed">
                    Pembiayaan Multijasa KOSPE siap menalangi biaya pendidikan, kesehatan, hingga pernikahan dengan
                    skema Syariah
                    yang menenangkan hati.
                </p>
                <div class="flex gap-4 pt-4">
                    <button onclick="document.getElementById('kalkulator').scrollIntoView()"
                        class="px-8 py-3.5 bg-brand-red text-white hover:bg-red-700 rounded-xl font-bold transition shadow-lg flex items-center gap-2">
                        <i data-lucide="check" class="w-5 h-5"></i> Ajukan Sekarang
                    </button>
                    <a href="#rab-section"
                        class="px-8 py-3.5 bg-white/10 hover:bg-white/20 border border-white/30 backdrop-blur rounded-xl font-bold transition flex items-center gap-2">
                        <i data-lucide="calculator" class="w-5 h-5"></i> Hitung Simulasi
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Pengertian & Jenis Jasa -->
    <section class="py-20 bg-gray-50 relative">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern -z-10"></div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">

                <!-- Kiri: Pengertian -->
                <div class=" top-24">
                    <span class="text-brand-red font-bold uppercase tracking-wider text-sm">Tentang Produk</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Apa itu Pembiayaan Multijasa?
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-lg">
                        <strong>Pembiayaan Multijasa</strong> adalah fasilitas pembiayaan dari KOSPE yang ditujukan
                        untuk memenuhi kebutuhan anggota dalam memperoleh <strong>manfaat atas suatu jasa</strong>.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                        Program ini menggunakan akad <strong>Ijarah</strong> (Sewa Jasa) atau <strong>Wakalah bil
                            Ujrah</strong> (Perwakilan dengan upah). Melalui akad ini, KOSPE akan membayarkan tagihan
                        jasa kepada pihak institusi/penyedia jasa, dan anggota mengangsur biayanya kepada KOSPE ditambah
                        margin ujrah (upah) yang disepakati di awal.
                    </p>

                    <div class="bg-red-50 p-5 rounded-xl border border-red-100 flex items-start gap-4">
                        <i data-lucide="info" class="w-6 h-6 text-brand-red flex-shrink-0 mt-1"></i>
                        <div>
                            <h4 class="font-bold text-gray-800">Catatan Penting Syariah</h4>
                            <p class="text-sm text-gray-600 mt-1">Dalam pembiayaan multijasa, KOSPE <strong>tidak
                                    memberikan uang tunai</strong> kepada anggota, melainkan membayarkan langsung ke
                                rekening institusi (Sekolah, Rumah Sakit, dsb) untuk memastikan dana digunakan sesuai
                                akad.</p>
                        </div>
                    </div>
                </div>

                <!-- Kanan: Grid Jenis Jasa -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Layanan Jasa yang Dicover:</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-2 gap-6">

                        <!-- Pendidikan -->
                        <div
                            class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:border-brand-red hover:shadow-lg transition group">
                            <div
                                class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="graduation-cap" class="w-7 h-7"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900 mb-2">Pendidikan</h4>
                            <p class="text-sm text-gray-500">Pembiayaan Uang Pangkal, SPP Sekolah/Pesantren, Biaya
                                Semester Kuliah, hingga Kursus/Sertifikasi.</p>
                        </div>

                        <!-- Kesehatan -->
                        <div
                            class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:border-brand-red hover:shadow-lg transition group">
                            <div
                                class="w-14 h-14 bg-green-50 text-green-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="activity" class="w-7 h-7"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900 mb-2">Kesehatan</h4>
                            <p class="text-sm text-gray-500">Pembiayaan biaya Rumah Sakit, Persalinan, Operasi
                                (non-estetika), dan rawat inap keluarga.</p>
                        </div>

                        <!-- Pernikahan -->
                        <div
                            class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:border-brand-red hover:shadow-lg transition group">
                            <div
                                class="w-14 h-14 bg-pink-50 text-pink-500 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="heart" class="w-7 h-7"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900 mb-2">Pernikahan</h4>
                            <p class="text-sm text-gray-500">Pembiayaan jasa Wedding Organizer (WO), sewa gedung/tenda,
                                hingga jasa katering resepsi pernikahan.</p>
                        </div>

                        <!-- Renovasi Rumah -->
                        <div
                            class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:border-brand-red hover:shadow-lg transition group">
                            <div
                                class="w-14 h-14 bg-orange-50 text-brand-orange rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="hammer" class="w-7 h-7"></i>
                            </div>
                            <h4 class="font-bold text-lg text-gray-900 mb-2">Jasa Renovasi</h4>
                            <p class="text-sm text-gray-500">Pembiayaan upah/jasa tukang bangunan atau pemborong untuk
                                merenovasi rumah hunian anggota.</p>
                        </div>

                        <!-- Pariwisata / Travel -->
                        <div
                            class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 hover:border-brand-red hover:shadow-lg transition group sm:col-span-2 flex items-center gap-6 col-span-2">
                            <div
                                class="w-14 h-14 bg-yellow-50 text-brand-yellow rounded-xl flex flex-shrink-0 items-center justify-center group-hover:scale-110 transition">
                                <i data-lucide="plane" class="w-7 h-7"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-lg text-gray-900 mb-1">Pariwisata / Tiket Perjalanan</h4>
                                <p class="text-sm text-gray-500">Pembiayaan paket wisata halal keluarga, tour, atau
                                    pembelian tiket pesawat.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Keunggulan / Benefit -->
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Keunggulan Multijasa KOSPE</h2>
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
                        dan ujrah disepakati di awal.</p>
                </div>
                <!-- Card 2 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-orange transition duration-300">
                        <i data-lucide="banknote" class="w-8 h-8 text-brand-orange"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Angsuran Tetap</h4>
                    <p class="text-sm text-gray-500">Jumlah cicilan per bulan bersifat *flat* (tetap) hingga lunas,
                        sehingga mudah mengatur *cashflow*.</p>
                </div>
                <!-- Card 3 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-yellow transition duration-300">
                        <i data-lucide="clock" class="w-8 h-8 text-brand-yellow"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Proses Cepat</h4>
                    <p class="text-sm text-gray-500">Persetujuan pembiayaan maksimal 3 hari kerja setelah dokumen
                        tagihan (invoice) divalidasi.</p>
                </div>
                <!-- Card 4 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-green-500 transition duration-300">
                        <i data-lucide="check-square" class="w-8 h-8 text-green-500"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Bayar Langsung</h4>
                    <p class="text-sm text-gray-500">KOSPE yang akan membayarkan tagihan langsung ke pihak sekolah atau
                        instansi tujuan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Syarat & Ketentuan Tab -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Persyaratan Pengajuan</h2>
                <div class="w-24 h-1.5 bg-brand-red mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden">
                <div class="flex border-b border-gray-100">
                    <button
                        class="w-1/2 py-5 text-center font-bold text-brand-red border-b-4 border-brand-red bg-red-50/50"
                        id="btn-syarat">Syarat Umum</button>
                    <button
                        class="w-1/2 py-5 text-center font-semibold text-gray-500 hover:text-brand-orange border-b-4 border-transparent hover:bg-gray-50 transition"
                        id="btn-berkas">Dokumen Tagihan</button>
                </div>

                <div class="p-8">
                    <!-- Syarat Content -->
                    <div id="content-syarat" class="space-y-4 animate-fade-in-up">
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Keanggotaan Aktif</h4>
                                <p class="text-sm text-gray-600 mt-1">Telah menjadi anggota aktif KOSPE minimal selama 3
                                    bulan.</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Kemampuan Mengangsur</h4>
                                <p class="text-sm text-gray-600 mt-1">Total kewajiban angsuran bulanan (termasuk yang
                                    baru diajukan) tidak melebihi 30% dari total penghasilan.</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Uang Muka (DP) - Opsional</h4>
                                <p class="text-sm text-gray-600 mt-1">Anggota dapat menyetorkan uang muka untuk
                                    memperkecil nilai pembiayaan (Tidak wajib, tergantung analisis persetujuan).</p>
                            </div>
                        </div>
                    </div>

                    <!-- Berkas Content -->
                    <div id="content-berkas" class="hidden space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                <h5 class="font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Dokumen
                                    Pemohon</h5>
                                <ul class="space-y-3">
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file-text"
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi KTP & KK Pemohon</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="briefcase"
                                            class="w-4 h-4 text-gray-400"></i> Slip Gaji 3 Bulan Terakhir</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i
                                            data-lucide="credit-card" class="w-4 h-4 text-gray-400"></i> Mutasi Rekening
                                        3 Bulan Terakhir</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                <h5 class="font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Dokumen Bukti
                                    Jasa</h5>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2 text-sm text-gray-700">
                                        <i data-lucide="receipt" class="w-4 h-4 text-gray-400 flex-shrink-0 mt-0.5"></i>
                                        <span><strong>Invoice/Surat Tagihan Resmi</strong> dari instansi (Sekolah, RS,
                                            WO) yang mencantumkan rincian biaya.</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-sm text-gray-700">
                                        <i data-lucide="building"
                                            class="w-4 h-4 text-gray-400 flex-shrink-0 mt-0.5"></i>
                                        <span>Nomor Rekening resmi milik instansi/lembaga yang dituju (bukan rekening
                                            pribadi, kecuali untuk tukang/pekerja informal dengan surat
                                            perjanjian).</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Kalkulator Simulasi (Ijarah/Wakalah bil Ujrah) -->
    <section id="kalkulator" class="py-20 bg-gray-900 text-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-red rounded-full blur-[150px] opacity-20 -translate-y-1/2 -translate-x-1/4">
        </div>

        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-5 space-y-6">
                    <span class="text-brand-orange font-bold uppercase tracking-widest text-sm">Kalkulator</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Simulasi Angsuran Multijasa</h2>
                    <p class="text-gray-400 text-lg mb-6">Hitung estimasi cicilan Anda. Skema ini menggunakan
                        <strong>Ujrah (Upah Jasa)</strong> yang bersifat tetap selama masa tenor berjalan.
                    </p>

                    <div class="bg-white/10 backdrop-blur border border-white/20 p-5 rounded-2xl">
                        <p class="text-sm text-gray-300 flex items-start gap-2 mb-2">
                            <i data-lucide="info" class="w-5 h-5 flex-shrink-0 text-brand-yellow"></i>
                            Plafon pembiayaan multijasa KOSPE berkisar antara <strong>Rp 1 Juta hingga Rp 50
                                Juta</strong>. Hubungi admin untuk plafon lebih besar.
                        </p>
                    </div>
                </div>

                <!-- Calculator Form -->
                <div class="lg:col-span-7">
                    <div class="bg-white text-gray-800 rounded-[2rem] p-8 md:p-10 shadow-2xl">
                        <div class="space-y-6">

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Total Biaya Jasa / Tagihan
                                    (Rp)</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="number" id="input-biaya"
                                        class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition font-bold text-lg"
                                        value="5000000" step="1000000">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Uang Muka / DP (Rp) - <span
                                        class="text-gray-400 font-normal">Opsional</span></label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="number" id="input-dp"
                                        class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition font-bold text-lg"
                                        value="0" step="100000">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                                    <label class="block text-xs font-semibold text-gray-500 mb-1">Nilai
                                        Pembiayaan</label>
                                    <span id="display-pembiayaan" class="font-bold text-lg text-gray-900">Rp
                                        15.000.000</span>
                                </div>
                                <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                                    <label class="block text-xs font-semibold text-gray-500 mb-1">Estimasi
                                        Ujrah/Bulan</label>
                                    <span class="font-bold text-lg text-brand-orange">1.2%</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Pilih Tenor (Masa
                                    Cicilan)</label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="6">6 Bulan</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition active-tenor bg-red-50 border-brand-red text-brand-red"
                                        data-val="12">12 Bulan</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="24">24 Bulan</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="36">36 Bulan</button>
                                </div>
                            </div>

                            <div class="bg-brand-red/5 p-6 rounded-2xl border border-brand-red/10 text-center mt-4">
                                <p class="text-sm text-gray-500 mb-1 font-medium">Estimasi Angsuran per Bulan</p>
                                <h3 class="text-4xl font-bold text-brand-red mb-2" id="result-angsuran">Rp 0</h3>
                                <p class="text-xs text-gray-400">Total hutang sudah termasuk upah jasa/ujrah pembiayaan
                                    syariah</p>
                            </div>

                            <a href="https://api.whatsapp.com/send/?phone=628118807177&text=saya+mau+daftar+jadi+anggota+dan+mau+ajukan+pembiayaan+multijasa+di+KOSPE&type=phone_number&app_absent=0"
                                class="block w-full text-center bg-brand-red text-white font-bold py-4 rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-200">
                                Ajukan Multijasa Sekarang
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. Foto Penerima Benefit (Testimonials) -->
    <section class="py-20 bg-white overflow-hidden border-b border-gray-200">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-end mb-12 gap-4">
                <div>
                    <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Testimoni Anggota</span>
                    <h2 class="text-2xl font-bold text-gray-900 mt-2">Kisah Penerima Manfaat</h2>
                </div>
                <div class="flex gap-2">
                    <button
                        class="swiper-btn-prev w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center hover:bg-brand-red hover:text-white hover:border-brand-red transition"><i
                            data-lucide="chevron-left" class="w-6 h-6"></i></button>
                    <button
                        class="swiper-btn-next w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center hover:bg-brand-red hover:text-white hover:border-brand-red transition"><i
                            data-lucide="chevron-right" class="w-6 h-6"></i></button>
                </div>
            </div>

            <!-- Swiper Beneficiaries -->
            <div class="swiper benefitSwiper !overflow-visible">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 group">
                            <div class="h-56 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Pendidikan">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-blue-600">
                                    Jasa Pendidikan</div>
                            </div>
                            <div class="p-6 relative">
                                <img src="https://i.pravatar.cc/150?img=32"
                                    class="w-16 h-16 rounded-full border-4 border-white absolute -top-8 right-6 shadow-sm"
                                    alt="Owner">
                                <h4 class="font-bold text-lg text-gray-900">Pembayaran SPP Kuliah Anak</h4>
                                <p class="text-xs text-gray-500 mb-4">Ibu Fatimah • PNS</p>
                                <p class="text-gray-600 text-sm italic">"Alhamdulillah, KOSPE membantu melunasi tagihan
                                    biaya semester anak saya langsung ke pihak Universitas. Saya cukup menyicil ke
                                    koperasi setiap gajian."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 group">
                            <div class="h-56 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1519225421980-715cb0215aed?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Pernikahan">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-pink-500">
                                    Jasa Pernikahan</div>
                            </div>
                            <div class="p-6 relative">
                                <img src="https://i.pravatar.cc/150?img=11"
                                    class="w-16 h-16 rounded-full border-4 border-white absolute -top-8 right-6 shadow-sm"
                                    alt="Owner">
                                <h4 class="font-bold text-lg text-gray-900">Biaya WO & Gedung</h4>
                                <p class="text-xs text-gray-500 mb-4">Bpk. Rizky Firmansyah • Wiraswasta</p>
                                <p class="text-gray-600 text-sm italic">"Pembiayaan pernikahan bebas riba benar-benar
                                    menenangkan hati. KOSPE membayarkan langsung ke pihak vendor Katering dan Gedung.
                                    Prosesnya transparan."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 group">
                            <div class="h-56 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Renovasi">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-orange-500">
                                    Jasa Renovasi</div>
                            </div>
                            <div class="p-6 relative">
                                <img src="https://i.pravatar.cc/150?img=59"
                                    class="w-16 h-16 rounded-full border-4 border-white absolute -top-8 right-6 shadow-sm"
                                    alt="Owner">
                                <h4 class="font-bold text-lg text-gray-900">Perbaikan Atap Rumah</h4>
                                <p class="text-xs text-gray-500 mb-4">Mas Hendra • Pegawai Swasta</p>
                                <p class="text-gray-600 text-sm italic">"Saya butuh jasa tukang borongan untuk
                                    membetulkan atap rumah yang bocor sebelum musim hujan. KOSPE mencairkan dana upah
                                    tukang dengan akad Ijarah."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>

            // Tabs Logic (Syarat & Berkas)
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

            // Swiper Testimonials (Beneficiaries)
            new Swiper(".benefitSwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: ".swiper-btn-next",
                    prevEl: ".swiper-btn-prev",
                },
                breakpoints: {
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 2.5 },
                },
            });

            // Calculator Logic (Multijasa Ijarah/Ujrah)
            let selectedTenor = 12;
            let ujrahRate = 0.018; // 1.8% margin/fee ujrah per bulan (simulasi)

            function calculateInstallment() {
                let totalBiaya = parseFloat($('#input-biaya').val()) || 0;
                let dp = parseFloat($('#input-dp').val()) || 0;

                // Pastikan DP tidak lebih besar dari total
                if (dp > totalBiaya) {
                    dp = totalBiaya;
                    $('#input-dp').val(dp);
                }

                let plafond = totalBiaya - dp;
                if (plafond < 0) plafond = 0;

                const formatIDR = (num) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(num);

                // Hitung Angsuran: (Plafond + (Plafond * UjrahRate * Tenor)) / Tenor
                const totalUjrah = plafond * ujrahRate * selectedTenor;
                const totalHutang = plafond + totalUjrah;
                let angsuran = totalHutang / selectedTenor;

                if (plafond === 0) angsuran = 0;

                $('#display-pembiayaan').text(formatIDR(plafond));
                $('#result-angsuran').text(formatIDR(angsuran));
            }

            // Bind Events Calculator
            $('#input-biaya, #input-dp').on('input change', calculateInstallment);

            $('.tenor-btn').click(function () {
                $('.tenor-btn').removeClass('bg-red-50 border-brand-red text-brand-red active-tenor');
                $(this).addClass('bg-red-50 border-brand-red text-brand-red active-tenor');
                selectedTenor = parseInt($(this).data('val'));
                console.log('Selected Tenor:', selectedTenor);
                if (selectedTenor < 24) {
                    marginRate = 0.018; // Margin lebih rendah untuk tenor dibawah 2 tahun
                } else if (selectedTenor < 36) {
                    marginRate = 0.019; // Margin sedikit lebih tinggi untuk tenor 3 tahun
                } else {
                    marginRate = 0.02; // Margin tertinggi untuk tenor 5 tahun
                }
                calculateInstallment();
            });

            // Initial calc
            calculateInstallment();
        </script>
    @endpush
</div>