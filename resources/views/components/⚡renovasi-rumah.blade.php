<?php

use Livewire\Component;

new class extends Component {

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

            .step-line {
                position: absolute;
                top: 24px;
                left: 50%;
                width: 100%;
                height: 2px;
                background: #e5e7eb;
                z-index: 0;
            }

            @media (max-width: 768px) {
                .step-line {
                    display: none;
                }
            }
        </style>
    @endpush

    <header class="relative pt-20 pb-32 overflow-hidden bg-gray-900 text-white">
        <div class="absolute inset-0">
            <img src="https://asset.morefurniture.id/NEWS/Inspirasi-Gambar-Rumah-Mewah-Kaya-Melintir-Fasilitas-Maksimal.webp"
                class="w-full h-full object-cover opacity-40 mix-blend-overlay" alt="Kabah Hajj">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/90 to-transparent"></div>

        <div class="container mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center">
            <div class="md:w-2/3 space-y-6 animate-fade-in-up">
                <span
                    class="inline-flex items-center gap-2 py-1 px-4 rounded-full bg-brand-red/20 border border-brand-red text-red-400 font-bold text-xs uppercase tracking-widest mb-2">
                    <i data-lucide="home" class="w-4 h-4"></i> Hunian Nyaman
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Wujudkan Rumah <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-brand-orange">Impian
                        Keluarga</span>
                </h1>
                <p class="text-lg text-gray-300 max-w-xl leading-relaxed">
                    Fasilitas pembiayaan syariah untuk perbaikan, perluasan, atau peremajaan rumah Anda. Angsuran
                    ringan, tanpa
                    denda, dan sesuai prinsip Islam.
                </p>
                <div class="flex gap-4 pt-4">
                    <button onclick="document.getElementById('kalkulator').scrollIntoView()"
                        class="px-8 py-3.5 bg-brand-red text-white hover:bg-red-700 rounded-xl font-bold transition shadow-lg flex items-center gap-2">
                        <i data-lucide="calculator" class="w-5 h-5"></i> Hitung Simulasi
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section class="py-20 bg-gray-50 relative">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern -z-10"></div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="relative">
                    <div class="absolute inset-0 bg-brand-orange/20 rounded-[2rem] transform -rotate-3 scale-105"></div>
                    <img src="https://office.mitrarenov.com/assets/main/images/news/rumah-modern-mewah-elegan.jpg"
                        class="relative z-10 w-full h-[450px] object-cover rounded-[2rem] shadow-xl"
                        alt="Architect Planning">

                    <div
                        class="absolute -left-8 bottom-12 bg-white p-5 rounded-2xl shadow-xl z-20 border border-gray-100 hidden md:block">
                        <div class="flex items-center gap-4 mb-2">
                            <div
                                class="w-12 h-12 bg-brand-red/10 text-brand-red rounded-full flex items-center justify-center font-bold text-xl">
                                <i data-lucide="hammer" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Plafon Fleksibel</p>
                                <p class="font-bold text-gray-900 text-lg">Sesuai Kebutuhan RAB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <span class="text-brand-red font-bold uppercase tracking-wider text-sm">Tentang Program</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Membangun Tanpa Beban Riba</h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-lg">
                        <strong>Pembiayaan Renovasi Rumah</strong> dari KOSPE ditujukan bagi anggota yang ingin
                        memperbaiki atap bocor, menambah ruangan, mengecat ulang, atau membangun pagar rumah dengan
                        sistem cicilan syariah.
                    </p>

                    <div class="space-y-4 mt-8">
                        <h4 class="font-bold text-gray-800 text-lg border-b border-gray-200 pb-2">Dua Skema Akad Utama:
                        </h4>

                        <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm flex items-start gap-4">
                            <i data-lucide="shopping-bag" class="w-6 h-6 text-brand-orange flex-shrink-0 mt-1"></i>
                            <div>
                                <h5 class="font-bold text-gray-800">Murabahah (Jual Beli Material)</h5>
                                <p class="text-sm text-gray-500 mt-1">KOSPE akan membeli material bangunan yang Anda
                                    butuhkan (semen, keramik, cat, dll) dari supplier/toko bangunan rekanan, lalu
                                    menjualnya kepada Anda dengan margin keuntungan yang disepakati.</p>
                            </div>
                        </div>

                        <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm flex items-start gap-4">
                            <i data-lucide="users" class="w-6 h-6 text-brand-red flex-shrink-0 mt-1"></i>
                            <div>
                                <h5 class="font-bold text-gray-800">Ijarah (Sewa Jasa Tukang)</h5>
                                <p class="text-sm text-gray-500 mt-1">KOSPE membiayai upah pekerja bangunan/pemborong
                                    (jasa). Dana upah akan ditransfer langsung kepada kepala tukang atau vendor sesuai
                                    tahapan pengerjaan (termin).</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Keunggulan -->
    <section class="py-16 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Keunggulan Pembiayaan KOSPE</h2>
                <div class="w-20 h-1 bg-brand-yellow mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-red transition duration-300">
                        <i data-lucide="shield" class="w-8 h-8 text-brand-red"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Bebas Riba</h4>
                    <p class="text-sm text-gray-500">Bukan pinjaman uang berbunga. Transaksi murni jual beli barang atau
                        sewa jasa yang halal.</p>
                </div>
                <!-- Card 2 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-orange transition duration-300">
                        <i data-lucide="calculator" class="w-8 h-8 text-brand-orange"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Angsuran Flat</h4>
                    <p class="text-sm text-gray-500">Jumlah cicilan bersifat tetap dari awal hingga lunas. Tidak
                        terpengaruh fluktuasi suku bunga acuan.</p>
                </div>
                <!-- Card 3 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-yellow transition duration-300">
                        <i data-lucide="file-check-2" class="w-8 h-8 text-brand-yellow"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Tanpa Denda Telat</h4>
                    <p class="text-sm text-gray-500">Sesuai fatwa syariah, kami tidak menerapkan denda denda
                        keterlambatan yang bersifat memberatkan.</p>
                </div>
                <!-- Card 4 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-green-500 transition duration-300">
                        <i data-lucide="truck" class="w-8 h-8 text-green-500"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Pengiriman Material</h4>
                    <p class="text-sm text-gray-500">Material akan dikirim langsung ke alamat rumah Anda oleh toko
                        bangunan/vendor yang ditunjuk.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Alur Pengajuan (Step by Step) -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-16">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Langkah Mudah</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Alur Pengajuan Renovasi</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 relative">
                <!-- Desktop connecting line -->
                {{-- <div class="step-line"></div> --}}

                <!-- Step 1 -->
                <div class="relative z-10 text-center">
                    <div
                        class="w-12 h-12 bg-white border-4 border-brand-red rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-brand-red shadow-md">
                        1</div>
                    <h4 class="font-bold text-lg mb-2">Pengajuan & RAB</h4>
                    <p class="text-sm text-gray-500">Anggota menyerahkan form pengajuan beserta Rencana Anggaran Belanja
                        (material & jasa) ke kantor KOSPE.</p>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 text-center">
                    <div
                        class="w-12 h-12 bg-white border-4 border-brand-orange rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-brand-orange shadow-md">
                        2</div>
                    <h4 class="font-bold text-lg mb-2">Survei Lokasi</h4>
                    <p class="text-sm text-gray-500">Tim KOSPE melakukan survei ke rumah yang akan direnovasi untuk
                        memvalidasi kelayakan RAB.</p>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 text-center">
                    <div
                        class="w-12 h-12 bg-white border-4 border-brand-yellow rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-brand-yellow shadow-md">
                        3</div>
                    <h4 class="font-bold text-lg mb-2">Akad Syariah</h4>
                    <p class="text-sm text-gray-500">Penandatanganan akad (Murabahah/Ijarah) setelah disetujui.
                        Penetapan nilai angsuran dan margin.</p>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 text-center">
                    <div
                        class="w-12 h-12 bg-brand-red text-white border-4 border-red-200 rounded-full flex items-center justify-center mx-auto mb-4 font-bold shadow-md">
                        <i data-lucide="check" class="w-6 h-6"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Pencairan & Pengerjaan</h4>
                    <p class="text-sm text-gray-500">KOSPE memesan material ke toko & mentransfer upah tukang. Proses
                        renovasi rumah dapat dimulai!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Syarat & Ketentuan Tab -->
    <section class="py-20 bg-white">
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
                        id="btn-berkas">Dokumen</button>
                </div>

                <div class="p-8">
                    <!-- Syarat Content -->
                    <div id="content-syarat" class="space-y-4 animate-fade-in-up">
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Status Keanggotaan</h4>
                                <p class="text-sm text-gray-600 mt-1">Telah menjadi anggota aktif KOSPE minimal selama 6
                                    bulan dan rutin membayar simpanan wajib.</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Kepemilikan Rumah</h4>
                                <p class="text-sm text-gray-600 mt-1">Rumah yang akan direnovasi adalah milik sendiri
                                    atau pasangan (dibuktikan dengan Sertifikat/AJB).</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Kemampuan Mengangsur (DSR)</h4>
                                <p class="text-sm text-gray-600 mt-1">Debt Service Ratio (Total kewajiban cicilan per
                                    bulan) maksimal 35% dari *take home pay* gabungan suami-istri.</p>
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
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi KTP, KK, & Surat Nikah</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="briefcase"
                                            class="w-4 h-4 text-gray-400"></i> Slip Gaji 3 Bulan / Laporan Usaha</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i
                                            data-lucide="credit-card" class="w-4 h-4 text-gray-400"></i> Mutasi Rekening
                                        3 Bulan Terakhir</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                <h5 class="font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Dokumen
                                    Agunan & Proyek</h5>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2 text-sm text-gray-700">
                                        <i data-lucide="file" class="w-4 h-4 text-gray-400 flex-shrink-0 mt-0.5"></i>
                                        <span>Fotokopi SHM/SHGB rumah yang akan direnovasi.</span>
                                    </li>
                                    <li class="flex items-start gap-2 text-sm text-gray-700">
                                        <i data-lucide="calculator"
                                            class="w-4 h-4 text-gray-400 flex-shrink-0 mt-0.5"></i>
                                        <span>Rencana Anggaran Belanja (RAB) perbaikan.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Kalkulator Simulasi -->
    <section id="kalkulator" class="py-20 bg-gray-900 text-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-red rounded-full blur-[150px] opacity-20 -translate-y-1/2 -translate-x-1/4">
        </div>

        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-5 space-y-6">
                    <span class="text-brand-orange font-bold uppercase tracking-widest text-sm">Kalkulator</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Simulasi Angsuran Renovasi</h2>
                    <p class="text-gray-400 text-lg mb-6">Hitung estimasi cicilan per bulan Anda untuk pembelian
                        material (Murabahah). Jangka waktu pembiayaan tersedia hingga 60 bulan (5 tahun).</p>

                    <div class="bg-white/10 backdrop-blur border border-white/20 p-5 rounded-2xl">
                        <p class="text-sm text-gray-300 flex items-start gap-2 mb-2">
                            <i data-lucide="info" class="w-5 h-5 flex-shrink-0 text-brand-yellow"></i>
                            Plafon pembiayaan renovasi KOSPE berkisar antara <strong>Rp 5 Juta hingga Rp 200
                                Juta</strong>. Nilai disesuaikan dengan kapasitas angsur dan nilai jaminan.
                        </p>
                    </div>
                </div>

                <!-- Calculator Form -->
                <div class="lg:col-span-7">
                    <div class="bg-white text-gray-800 rounded-[2rem] p-8 md:p-10 shadow-2xl">
                        <div class="space-y-6">

                            <div>
                                <label class="flex justify-between items-end text-sm font-bold text-gray-700 mb-2">
                                    <span>Plafon (Sesuai RAB Material)</span>
                                    <span id="display-plafond-top" class="text-xl text-brand-red">Rp 50.000.000</span>
                                </label>
                                <input type="range" id="input-range-plafond" min="5000000" max="200000000"
                                    step="1000000" value="10000000"
                                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer mt-2">
                                <div class="flex justify-between text-xs text-gray-400 mt-2">
                                    <span>5 Juta</span>
                                    <span>200 Juta</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                                    <label class="block text-xs font-semibold text-gray-500 mb-1">Nilai
                                        Pembiayaan</label>
                                    <span id="display-pembiayaan" class="font-bold text-lg text-gray-900">Rp
                                        50.000.000</span>
                                </div>

                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Pilih Tenor (Masa
                                    Cicilan)</label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="12">1 Tahun</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition active-tenor bg-red-50 border-brand-red text-brand-red"
                                        data-val="24">2 Tahun</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="36">3 Tahun</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="60">5 Tahun</button>
                                </div>
                            </div>

                            <div class="bg-brand-red/5 p-6 rounded-2xl border border-brand-red/10 text-center mt-4">
                                <p class="text-sm text-gray-500 mb-1 font-medium">Estimasi Angsuran per Bulan</p>
                                <h3 class="text-4xl font-bold text-brand-red mb-2" id="result-angsuran">Rp 0</h3>
                                <p class="text-xs text-gray-400">Total hutang sudah termasuk margin murabahah syariah
                                    flat.</p>
                            </div>

                            <a href="https://api.whatsapp.com/send/?phone=628118807177&text=saya+mau+daftar+jadi+anggota+dan+mau+ajukan+pembiayaan+renovasi+rumah+di+KOSPE&type=phone_number&app_absent=0"
                                class="block w-full text-center bg-brand-red text-white font-bold py-4 rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-200">
                                Ajukan Pembiayaan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. Testimoni (Foto Penerima Benefit) -->
    <section class="py-20 bg-gray-50 border-t border-gray-200 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Cerita Anggota</span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-2">Keluarga Bahagia KOSPE</h2>
                </div>
                <div class="flex gap-2">
                    <button
                        class="swiper-btn-prev w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center hover:bg-brand-red hover:text-white hover:border-brand-red transition bg-white"><i
                            data-lucide="chevron-left" class="w-6 h-6"></i></button>
                    <button
                        class="swiper-btn-next w-12 h-12 rounded-full border border-gray-300 flex items-center justify-center hover:bg-brand-red hover:text-white hover:border-brand-red transition bg-white"><i
                            data-lucide="chevron-right" class="w-6 h-6"></i></button>
                </div>
            </div>

            <!-- Swiper Beneficiaries -->
            <div class="swiper benefitSwiper !overflow-visible">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition group">
                            <div class="h-64 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Renovasi Atap">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4">
                                    <h4 class="font-bold text-white text-lg">Perbaikan Atap & Plafon</h4>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-3 mb-4">
                                    <img src="https://i.pravatar.cc/150?img=11" class="w-12 h-12 rounded-full"
                                        alt="Bpk Haryanto">
                                    <div>
                                        <p class="font-bold text-sm text-gray-900">Bpk. Haryanto</p>
                                        <p class="text-xs text-gray-500">Karyawan Swasta</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm italic leading-relaxed">"Sangat terbantu oleh KOSPE saat
                                    musim hujan kemarin. Pengajuan cepat, material langsung dikirim ke rumah. Cicilannya
                                    ringan dan bebas denda."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition group">
                            <div class="h-64 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1556912167-f556f1f39fdf?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Renovasi Dapur">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4">
                                    <h4 class="font-bold text-white text-lg">Renovasi Dapur (Kitchen Set)</h4>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-3 mb-4">
                                    <img src="https://i.pravatar.cc/150?img=32" class="w-12 h-12 rounded-full"
                                        alt="Ibu Fatma">
                                    <div>
                                        <p class="font-bold text-sm text-gray-900">Ibu Fatmawati</p>
                                        <p class="text-xs text-gray-500">Ibu Rumah Tangga / Wirausaha</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm italic leading-relaxed">"Alhamdulillah impian punya
                                    dapur bersih terwujud. Koperasi membelikan keramik dan material lainnya di toko
                                    langganan saya dengan akad murabahah yang jelas."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white rounded-2xl overflow-hidden border border-gray-200 shadow-sm hover:shadow-lg transition group">
                            <div class="h-64 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1605276374104-aa237f7c2a56?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Kamar Anak">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent p-4">
                                    <h4 class="font-bold text-white text-lg">Penambahan Kamar Anak</h4>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center gap-3 mb-4">
                                    <img src="https://i.pravatar.cc/150?img=59" class="w-12 h-12 rounded-full"
                                        alt="Keluarga Riza">
                                    <div>
                                        <p class="font-bold text-sm text-gray-900">Keluarga Riza</p>
                                        <p class="text-xs text-gray-500">Anggota KOSPE sejak 2020</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 text-sm italic leading-relaxed">"Anak-anak sudah besar dan butuh
                                    kamar sendiri. Pembiayaan KOSPE cover material dan sewa jasa tukang (Ijarah).
                                    Syukur, prosesnya syar'i dan tanpa sita menyita."</p>
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

            // Calculator Logic (Murabahah Renovasi)
            let selectedTenor = 24;
            let marginRate = 0.013; // 1.3% margin murabahah per bulan (simulasi)

            function formatIDR(num) {
                return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(num);
            }

            function calculateInstallment() {
                let plafond = parseFloat($('#input-range-plafond').val()) || 0;

                // Update UI text for slider
                $('#display-plafond-top').text(formatIDR(plafond));
                $('#display-pembiayaan').text(formatIDR(plafond));

                // Hitung Angsuran: (Plafond + (Plafond * MarginRate * Tenor)) / Tenor
                const totalMargin = plafond * marginRate * selectedTenor;
                const totalHutang = plafond + totalMargin;
                let angsuran = totalHutang / selectedTenor;

                if (plafond === 0) angsuran = 0;

                $('#result-angsuran').text(formatIDR(angsuran));
            }

            // Bind Events Calculator Range Slider
            $('#input-range-plafond').on('input change', calculateInstallment);

            // Bind Events Tenor Buttons
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