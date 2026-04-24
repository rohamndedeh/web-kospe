<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <!-- 1. Page Header / Hero -->
    <header class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?q=80&w=1200&auto=format&fit=crop"
                class="w-full h-full object-cover" alt="Office Team">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-red/90 to-brand-orange/80 mix-blend-multiply">
            </div>
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <!-- Content -->
        <div class="container mx-auto px-4 relative z-10 text-center text-white">
            <span
                class="inline-block py-1 px-3 rounded-full bg-white/20 backdrop-blur-sm text-sm font-semibold mb-4 border border-white/30">Profil
                Lembaga</span>
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Mengenal KOSPE Lebih Dekat</h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">Sinergi Ekonomi Umat, Membangun Peradaban dengan Prinsip
                Syariah.</p>

            <!-- Breadcrumb -->
            <div class="mt-8 flex justify-center items-center gap-2 text-sm text-white/80">
                <a href="index.html" class="hover:text-white">Beranda</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white font-bold">Profil KoSPE</span>
            </div>
        </div>
    </header>
    <!-- 2. Accordion Program Simpanan -->
    <section class="py-20 bg-gray-50 relative z-10">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern -z-10"></div>
        <div class="container mx-auto px-4 max-w-5xl">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Pilih Program Simpanan Anda</h2>
                <div class="w-24 h-1.5 bg-brand-orange mx-auto rounded-full mt-4"></div>
            </div>

            <!-- Accordion Container -->
            <div class="space-y-6">

                <!-- ITEM 1: Pendidikan -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden group">
                    <!-- Accordion Header -->
                    <button
                        class="accordion-header w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="graduation-cap" class="w-7 h-7"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-brand-orange transition">
                                    Simpanan Pendidikan</h3>
                                <p class="text-sm text-gray-500">Persiapkan biaya sekolah dan kuliah anak sejak dini.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-gray-100 p-2 rounded-full text-gray-500 icon-chevron transition-transform duration-300">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <!-- Accordion Body -->
                    <div class="accordion-content border-t border-gray-100 bg-gray-50/50">
                        <div class="flex flex-col md:flex-row p-6 gap-8">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=400&auto=format&fit=crop"
                                class="w-full md:w-1/3 h-48 md:h-auto object-cover rounded-xl shadow-sm"
                                alt="Pendidikan">
                            <div class="flex-1 flex flex-col justify-center">
                                <h4 class="text-lg font-bold text-gray-800 mb-2">Penjelasan Produk</h4>
                                <p class="text-sm text-gray-600 mb-4 leading-relaxed">Simpanan Pendidikan adalah
                                    tabungan
                                    berjangka khusus untuk perencanaan biaya pendidikan putra-putri Anda. Menggunakan
                                    akad
                                    Mudharabah Muthlaqah, dana Anda dikelola untuk menghasilkan nisbah (bagi hasil) yang
                                    lebih optimal.</p>
                                <h4 class="font-bold text-sm text-gray-800 mb-2">Keunggulan & Benefit:</h4>
                                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-orange mt-0.5"></i> Setoran ringan mulai dari Rp
                                        50.000 / bulan.</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-orange mt-0.5"></i> Target pencairan dana
                                        disesuaikan
                                        dengan tahun ajaran baru.</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-orange mt-0.5"></i> Bagi hasil lebih tinggi dari
                                        simpanan biasa.</li>
                                </ul>
                                <a href="#cara-daftar"
                                    class="inline-block text-center w-full md:w-auto px-6 py-2.5 bg-brand-orange text-white font-bold rounded-lg hover:bg-orange-700 transition shadow-md">Daftar
                                    Program Ini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 2: Aqiqah & Qurban -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden group">
                    <button
                        class="accordion-header w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-green-50 text-green-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="leaf" class="w-7 h-7"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-brand-orange transition">
                                    Simpanan Aqiqah & Qurban</h3>
                                <p class="text-sm text-gray-500">Rencanakan ibadah qurban tanpa beban di akhir tahun.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-gray-100 p-2 rounded-full text-gray-500 icon-chevron transition-transform duration-300">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="accordion-content border-t border-gray-100 bg-gray-50/50">
                        <div class="flex flex-col md:flex-row p-6 gap-8">
                            <img src="https://images.unsplash.com/photo-1516934024742-b461fba47600?q=80&w=400&auto=format&fit=crop"
                                class="w-full md:w-1/3 h-48 md:h-auto object-cover rounded-xl shadow-sm" alt="Qurban">
                            <div class="flex-1 flex flex-col justify-center">
                                <h4 class="text-lg font-bold text-gray-800 mb-2">Penjelasan Produk</h4>
                                <p class="text-sm text-gray-600 mb-4 leading-relaxed">Tabungan yang dirancang untuk
                                    memudahkan niat ibadah Aqiqah atau ber-Qurban. Dana dicairkan tepat pada bulan
                                    Dzulhijjah atau menjelang kelahiran sang buah hati, dapat dikonversikan langsung
                                    menjadi
                                    hewan qurban yang difasilitasi oleh KOSPE.</p>
                                <h4 class="font-bold text-sm text-gray-800 mb-2">Keunggulan & Benefit:</h4>
                                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-green-500 mt-0.5"></i> Jangka waktu fleksibel (3-12
                                        bulan).
                                    </li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-green-500 mt-0.5"></i> Bebas menentukan jenis hewan
                                        (Kambing/Sapi).</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-green-500 mt-0.5"></i> Koperasi bekerja sama dengan
                                        peternak
                                        lokal untuk harga terbaik.</li>
                                </ul>
                                <a href="#cara-daftar"
                                    class="inline-block text-center w-full md:w-auto px-6 py-2.5 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 transition shadow-md">Daftar
                                    Program Ini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 3: Umroh & Haji -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden group">
                    <button
                        class="accordion-header w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-yellow-50 text-yellow-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="plane" class="w-7 h-7"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-brand-orange transition">
                                    Simpanan Umroh & Haji Khusus</h3>
                                <p class="text-sm text-gray-500">Mewujudkan kerinduan ke Baitullah dengan tabungan
                                    pasti.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-gray-100 p-2 rounded-full text-gray-500 icon-chevron transition-transform duration-300">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="accordion-content border-t border-gray-100 bg-gray-50/50">
                        <div class="flex flex-col md:flex-row p-6 gap-8">
                            <img src="https://images.unsplash.com/photo-1565514020176-dbda608859fe?q=80&w=400&auto=format&fit=crop"
                                class="w-full md:w-1/3 h-48 md:h-auto object-cover rounded-xl shadow-sm" alt="Umroh">
                            <div class="flex-1 flex flex-col justify-center">
                                <h4 class="text-lg font-bold text-gray-800 mb-2">Penjelasan Produk</h4>
                                <p class="text-sm text-gray-600 mb-4 leading-relaxed">Produk simpanan jangka panjang
                                    untuk
                                    memfasilitasi niat suci ibadah Haji Khusus maupun Umroh. Kami bekerjasama dengan
                                    Biro
                                    Travel terpercaya yang tersertifikasi Kemenag RI, memberikan kepastian jadwal
                                    keberangkatan Anda.</p>
                                <h4 class="font-bold text-sm text-gray-800 mb-2">Keunggulan & Benefit:</h4>
                                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-yellow mt-0.5"></i> Terintegrasi langsung dengan
                                        Biro
                                        Travel rekanan.</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-yellow mt-0.5"></i> Mendapatkan nomor porsi haji
                                        (jika
                                        target tercapai).</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-yellow mt-0.5"></i> Bagi hasil tabungan
                                        dikapitalisasi
                                        untuk menambah saldo keberangkatan.</li>
                                </ul>
                                <a href="#cara-daftar"
                                    class="inline-block text-center w-full md:w-auto px-6 py-2.5 bg-yellow-500 text-white font-bold rounded-lg hover:bg-yellow-600 transition shadow-md">Daftar
                                    Program Ini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 4: Masa Depan (Pensiun/Darurat) -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden group">
                    <button
                        class="accordion-header w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="trending-up" class="w-7 h-7"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-brand-orange transition">
                                    Simpanan Masa Depan (Pensiun)</h3>
                                <p class="text-sm text-gray-500">Investasi jangka panjang untuk masa tua yang tenang.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-gray-100 p-2 rounded-full text-gray-500 icon-chevron transition-transform duration-300">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="accordion-content border-t border-gray-100 bg-gray-50/50">
                        <div class="flex flex-col md:flex-row p-6 gap-8">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=400&auto=format&fit=crop"
                                class="w-full md:w-1/3 h-48 md:h-auto object-cover rounded-xl shadow-sm"
                                alt="Masa Depan">
                            <div class="flex-1 flex flex-col justify-center">
                                <h4 class="text-lg font-bold text-gray-800 mb-2">Penjelasan Produk</h4>
                                <p class="text-sm text-gray-600 mb-4 leading-relaxed">Simpanan berjangka panjang (di
                                    atas 5
                                    tahun) yang dikelola secara syariah dengan porsi bagi hasil sangat maksimal.
                                    Ditujukan
                                    bagi Anda yang ingin menyiapkan jaring pengaman finansial saat masa produktif
                                    berakhir.
                                </p>
                                <h4 class="font-bold text-sm text-gray-800 mb-2">Keunggulan & Benefit:</h4>
                                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-purple-600 mt-0.5"></i> Nisbah (porsi bagi hasil) khusus
                                        yang tertinggi di antara produk lain.</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-purple-600 mt-0.5"></i> Dilindungi oleh asuransi jiwa
                                        syariah (syarat & ketentuan berlaku).</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-purple-600 mt-0.5"></i> Aman dari dampak inflasi karena
                                        dikelola di sektor riil rill yang tumbuh.</li>
                                </ul>
                                <a href="#cara-daftar"
                                    class="inline-block text-center w-full md:w-auto px-6 py-2.5 bg-purple-600 text-white font-bold rounded-lg hover:bg-purple-700 transition shadow-md">Daftar
                                    Program Ini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 5: Idul Fitri -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden group">
                    <button
                        class="accordion-header w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-red-50 text-brand-red rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="moon" class="w-7 h-7"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-brand-orange transition">
                                    Simpanan Idul Fitri</h3>
                                <p class="text-sm text-gray-500">Persiapan hari kemenangan, dari mudik hingga bingkisan.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-gray-100 p-2 rounded-full text-gray-500 icon-chevron transition-transform duration-300">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="accordion-content border-t border-gray-100 bg-gray-50/50">
                        <div class="flex flex-col md:flex-row p-6 gap-8">
                            <img src="https://images.unsplash.com/photo-1584553421349-355dbcbaffd4?q=80&w=400&auto=format&fit=crop"
                                class="w-full md:w-1/3 h-48 md:h-auto object-cover rounded-xl shadow-sm"
                                alt="Idul Fitri">
                            <div class="flex-1 flex flex-col justify-center">
                                <h4 class="text-lg font-bold text-gray-800 mb-2">Penjelasan Produk</h4>
                                <p class="text-sm text-gray-600 mb-4 leading-relaxed">Tabungan yang dapat ditarik khusus
                                    2
                                    minggu menjelang Hari Raya Idul Fitri. Solusi terbaik agar Anda tidak terbebani
                                    secara
                                    finansial ketika mempersiapkan baju lebaran, mudik, dan hidangan hari raya.</p>
                                <h4 class="font-bold text-sm text-gray-800 mb-2">Keunggulan & Benefit:</h4>
                                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-red mt-0.5"></i> Pencairan otomatis H-14 Lebaran.
                                    </li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-red mt-0.5"></i> Mencegah dana terpakai untuk
                                        keperluan lain yang tidak mendesak.</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-brand-red mt-0.5"></i> Opsi berupa paket sembako premium
                                        atau pencairan dana tunai.</li>
                                </ul>
                                <a href="#cara-daftar"
                                    class="inline-block text-center w-full md:w-auto px-6 py-2.5 bg-brand-red text-white font-bold rounded-lg hover:bg-red-700 transition shadow-md">Daftar
                                    Program Ini</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ITEM 6: Wisata Qurani / Ziarah -->
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden group">
                    <button
                        class="accordion-header w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-14 h-14 bg-teal-50 text-teal-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i data-lucide="map" class="w-7 h-7"></i>
                            </div>
                            <div class="text-left">
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-brand-orange transition">
                                    Simpanan Wisata Qurani</h3>
                                <p class="text-sm text-gray-500">Tadabbur alam dan sejarah Islam tanpa mengganggu
                                    cashflow.
                                </p>
                            </div>
                        </div>
                        <div
                            class="bg-gray-100 p-2 rounded-full text-gray-500 icon-chevron transition-transform duration-300">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </button>
                    <div class="accordion-content border-t border-gray-100 bg-gray-50/50">
                        <div class="flex flex-col md:flex-row p-6 gap-8">
                            <img src="https://images.unsplash.com/photo-1542044801-39fbcffa96f6?q=80&w=400&auto=format&fit=crop"
                                class="w-full md:w-1/3 h-48 md:h-auto object-cover rounded-xl shadow-sm"
                                alt="Wisata Qurani">
                            <div class="flex-1 flex flex-col justify-center">
                                <h4 class="text-lg font-bold text-gray-800 mb-2">Penjelasan Produk</h4>
                                <p class="text-sm text-gray-600 mb-4 leading-relaxed">Tabungan yang dialokasikan khusus
                                    untuk program tour religi/ziarah, baik di dalam negeri (Wali Songo, Masjid
                                    bersejarah)
                                    maupun luar negeri (Turki, Andalusia). Perjalanan dikawal langsung oleh asatidz
                                    pembimbing.</p>
                                <h4 class="font-bold text-sm text-gray-800 mb-2">Keunggulan & Benefit:</h4>
                                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-teal-600 mt-0.5"></i> Perjalanan sudah diurus penuh oleh
                                        koperasi dan biro perjalanan.</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-teal-600 mt-0.5"></i> Diskon khusus biaya tour bagi
                                        anggota
                                        KOSPE yang menabung rutin.</li>
                                    <li class="flex items-start gap-2"><i data-lucide="check-circle-2"
                                            class="w-4 h-4 text-teal-600 mt-0.5"></i> Tour bernuansa islami, menjaga
                                        waktu
                                        shalat, dan makanan halal terjamin.</li>
                                </ul>
                                <a href="#cara-daftar"
                                    class="inline-block text-center w-full md:w-auto px-6 py-2.5 bg-teal-600 text-white font-bold rounded-lg hover:bg-teal-700 transition shadow-md">Daftar
                                    Program Ini</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Cara Daftar Program -->
    <section id="cara-daftar" class="py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-brand-red font-bold uppercase tracking-wider text-sm">Mudah & Cepat</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Cara Mengikuti Program Simpanan</h2>
                <p class="text-gray-500 mt-3 max-w-2xl mx-auto">Untuk bergabung dengan Simpanan Program, pastikan Anda
                    telah
                    terdaftar sebagai Anggota Aktif KOSPE. Jika sudah, ikuti 3 langkah mudah ini.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative max-w-5xl mx-auto">
                <!-- Connector Line (Desktop) -->
                <div class="hidden md:block absolute top-12 left-[15%] w-[70%] h-1 bg-gray-100 -z-10"></div>

                <!-- Step 1 -->
                <div class="bg-white p-6 text-center relative">
                    <div
                        class="w-20 h-20 bg-brand-red/10 border-4 border-white text-brand-red rounded-full flex items-center justify-center mx-auto mb-6 z-10 shadow-md">
                        <i data-lucide="smartphone" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">1. Pilih Program</h4>
                    <p class="text-gray-500 text-sm">Buka aplikasi KOSPE Mobile, masuk ke menu 'Layanan Simpanan', dan
                        pilih
                        program yang Anda inginkan.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-6 text-center relative">
                    <div
                        class="w-20 h-20 bg-brand-orange/10 border-4 border-white text-brand-orange rounded-full flex items-center justify-center mx-auto mb-6 z-10 shadow-md">
                        <i data-lucide="file-check-2" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">2. Tentukan Target</h4>
                    <p class="text-gray-500 text-sm">Masukkan nominal target, durasi waktu (tenor), dan setujui akad
                        Mudharabah yang tertera di aplikasi.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-6 text-center relative">
                    <div
                        class="w-20 h-20 bg-brand-yellow/10 border-4 border-white text-brand-yellow rounded-full flex items-center justify-center mx-auto mb-6 z-10 shadow-md">
                        <i data-lucide="refresh-ccw" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">3. Setoran Rutin (Autodebet)</h4>
                    <p class="text-gray-500 text-sm">Setoran awal sukses. Untuk selanjutnya, Anda bisa mengatur fitur
                        autodebet dari Saldo Sukarela Anda.</p>
                </div>
            </div>


        </div>
    </section>
    <script>
        // --- ACCORDION LOGIC ---
        $('.accordion-header').click(function () {
            const content = $(this).next('.accordion-content');
            const icon = $(this).find('.icon-chevron');
            const parent = $(this).parent();

            // Check if currently open
            const isOpen = content.is(':visible');

            // Close all other accordions (Optional, if you want only 1 open at a time)
            $('.accordion-content').slideUp(300);
            $('.icon-chevron').removeClass('rotate-180 bg-brand-orange text-white').addClass('bg-gray-100 text-gray-500');
            $('.accordion-header').parent().removeClass('ring-2 ring-brand-orange/50'); // remove highlight border

            if (!isOpen) {
                // Open this accordion
                content.slideDown(300);
                icon.addClass('rotate-180 bg-brand-orange text-white').removeClass('bg-gray-100 text-gray-500');
                parent.addClass('ring-2 ring-brand-orange/50'); // Highlight active card
            }
        });

        // Open the first accordion by default
        $('.accordion-header').first().click();
    </script>
</div>