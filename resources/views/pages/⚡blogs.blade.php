<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- Left Column: Blog List (8 Columns) -->
                <div class="lg:col-span-8 space-y-10">

                    <!-- Featured Post (Large) -->
                    <div
                        class="group bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 blog-card animate-fade-in-up">
                        <div class="h-[300px] md:h-[400px] overflow-hidden relative">
                            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1200&auto=format&fit=crop"
                                class="w-full h-full object-cover blog-img transition duration-700" alt="Featured">
                            <div
                                class="absolute top-4 left-4 bg-brand-red text-white px-4 py-1 rounded-full text-xs font-bold uppercase tracking-wide shadow-md">
                                Sorotan Utama
                            </div>
                        </div>
                        <div class="p-6 md:p-8">
                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                                <span class="flex items-center gap-1"><i data-lucide="calendar" class="w-4 h-4"></i> 20
                                    Oktober 2025</span>
                                <span class="flex items-center gap-1"><i data-lucide="user" class="w-4 h-4"></i> Admin
                                    KOSPE</span>
                            </div>
                            <h2
                                class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 group-hover:text-brand-red transition">
                                KOSPE Resmikan Unit Usaha Baru: Minimarket Berbasis Syariah di 5 Kota</h2>
                            <p class="text-gray-600 mb-6 leading-relaxed">
                                Sebagai langkah nyata dalam memberdayakan ekonomi umat, Koperasi Syariah Pesantren
                                (KOSPE) secara resmi meluncurkan 5 gerai Minimarket yang dikelola dengan prinsip
                                syariah. Keuntungan dari usaha ini akan kembali kepada anggota dalam bentuk SHU.
                            </p>
                            <a href="#"
                                class="inline-flex items-center gap-2 text-brand-orange font-bold hover:text-brand-red transition">
                                Baca Selengkapnya <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Blog Grid (2 Cols) -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Post 1 -->
                        <article
                            class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition blog-card group h-full flex flex-col">
                            <div class="h-48 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover blog-img transition duration-500"
                                    alt="Tips Keuangan">
                                <div
                                    class="absolute top-3 left-3 bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                                    Tips Keuangan</div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-3 group-hover:text-brand-red transition line-clamp-2">
                                    Cara Mengatur Keuangan Rumah Tangga agar Tetap Sakinah</h3>
                                <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-1">Tips praktis bagi keluarga
                                    muda dalam mengelola pendapatan bulanan agar cukup untuk kebutuhan sehari-hari dan
                                    tabungan masa depan.</p>
                                <div
                                    class="pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400 mt-auto">
                                    <span>15 Okt 2025</span>
                                    <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> 5
                                        min baca</span>
                                </div>
                            </div>
                        </article>

                        <!-- Post 2 -->
                        <article
                            class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition blog-card group h-full flex flex-col">
                            <div class="h-48 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover blog-img transition duration-500" alt="Fiqih">
                                <div
                                    class="absolute top-3 left-3 bg-green-100 text-green-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                                    Edukasi Syariah</div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-3 group-hover:text-brand-red transition line-clamp-2">
                                    Mengenal Akad Mudharabah dan Aplikasinya di Koperasi</h3>
                                <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-1">Penjelasan mendalam mengenai
                                    akad kerjasama bagi hasil (Mudharabah) antara pemilik modal dan pengelola usaha
                                    dalam Islam.</p>
                                <div
                                    class="pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400 mt-auto">
                                    <span>12 Okt 2025</span>
                                    <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> 7
                                        min baca</span>
                                </div>
                            </div>
                        </article>

                        <!-- Post 3 -->
                        <article
                            class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition blog-card group h-full flex flex-col">
                            <div class="h-48 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover blog-img transition duration-500" alt="Kegiatan">
                                <div
                                    class="absolute top-3 left-3 bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                                    Kegiatan</div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-3 group-hover:text-brand-red transition line-clamp-2">
                                    Rapat Anggota Tahunan (RAT) 2024 Berjalan Lancar</h3>
                                <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-1">Laporan pertanggungjawaban
                                    pengurus tahun buku 2024 diterima dengan baik oleh anggota. Pembagian SHU meningkat
                                    15%.</p>
                                <div
                                    class="pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400 mt-auto">
                                    <span>10 Okt 2025</span>
                                    <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> 3
                                        min baca</span>
                                </div>
                            </div>
                        </article>

                        <!-- Post 4 -->
                        <article
                            class="bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition blog-card group h-full flex flex-col">
                            <div class="h-48 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover blog-img transition duration-500" alt="Produk">
                                <div
                                    class="absolute top-3 left-3 bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase">
                                    Info Produk</div>
                            </div>
                            <div class="p-5 flex-1 flex flex-col">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-3 group-hover:text-brand-red transition line-clamp-2">
                                    Peluncuran Fitur Baru di Aplikasi KOSPE Mobile</h3>
                                <p class="text-gray-500 text-sm mb-4 line-clamp-3 flex-1">Kini anggota dapat melakukan
                                    pembayaran tagihan listrik, PDAM, dan pulsa langsung melalui aplikasi KOSPE Mobile.
                                </p>
                                <div
                                    class="pt-4 border-t border-gray-50 flex justify-between items-center text-xs text-gray-400 mt-auto">
                                    <span>05 Okt 2025</span>
                                    <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3"></i> 2
                                        min baca</span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center items-center gap-2 pt-8">
                        <button
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 hover:text-brand-red transition">
                            <i data-lucide="chevron-left" class="w-5 h-5"></i>
                        </button>
                        <button
                            class="w-10 h-10 flex items-center justify-center rounded-lg bg-brand-red text-white font-bold shadow-lg">1</button>
                        <button
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-brand-red transition">2</button>
                        <button
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-50 hover:text-brand-red transition">3</button>
                        <span class="text-gray-400 px-2">...</span>
                        <button
                            class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-gray-50 hover:text-brand-red transition">
                            <i data-lucide="chevron-right" class="w-5 h-5"></i>
                        </button>
                    </div>

                </div>

                <!-- Right Column: Sidebar (4 Columns) -->
                <div class="lg:col-span-4 space-y-8">

                    <!-- Search Widget -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-4">Cari Artikel</h4>
                        <div class="relative">
                            <input type="text" placeholder="Kata kunci..."
                                class="w-full pl-10 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red transition">
                            <i data-lucide="search"
                                class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>

                    <!-- Categories Widget -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <div class="w-1 h-5 bg-brand-orange rounded-full"></div> Kategori
                        </h4>
                        <ul class="space-y-2">
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center py-2 px-3 rounded-lg hover:bg-gray-50 group transition">
                                    <span class="text-gray-600 group-hover:text-brand-red">Semua Artikel</span>
                                    <span
                                        class="text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-full group-hover:bg-red-50 group-hover:text-brand-red">42</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center py-2 px-3 rounded-lg hover:bg-gray-50 group transition">
                                    <span class="text-gray-600 group-hover:text-brand-red">Edukasi Syariah</span>
                                    <span
                                        class="text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-full group-hover:bg-red-50 group-hover:text-brand-red">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center py-2 px-3 rounded-lg hover:bg-gray-50 group transition">
                                    <span class="text-gray-600 group-hover:text-brand-red">Kegiatan Koperasi</span>
                                    <span
                                        class="text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-full group-hover:bg-red-50 group-hover:text-brand-red">12</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center py-2 px-3 rounded-lg hover:bg-gray-50 group transition">
                                    <span class="text-gray-600 group-hover:text-brand-red">Tips Keuangan</span>
                                    <span
                                        class="text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-full group-hover:bg-red-50 group-hover:text-brand-red">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center py-2 px-3 rounded-lg hover:bg-gray-50 group transition">
                                    <span class="text-gray-600 group-hover:text-brand-red">Info Produk</span>
                                    <span
                                        class="text-xs bg-gray-100 text-gray-500 px-2 py-1 rounded-full group-hover:bg-red-50 group-hover:text-brand-red">7</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Popular Posts Widget -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-4 flex items-center gap-2">
                            <div class="w-1 h-5 bg-brand-yellow rounded-full"></div> Populer
                        </h4>
                        <div class="space-y-4">
                            <!-- Item 1 -->
                            <a href="#" class="flex gap-3 group">
                                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=150&auto=format&fit=crop"
                                    class="w-20 h-20 object-cover rounded-lg group-hover:opacity-80 transition"
                                    alt="Thumb">
                                <div>
                                    <h5
                                        class="text-sm font-bold text-gray-800 leading-snug group-hover:text-brand-red transition line-clamp-2">
                                        Hukum Riba dalam Pandangan Empat Mazhab</h5>
                                    <span class="text-xs text-gray-400 mt-1 block">12 Sep 2025</span>
                                </div>
                            </a>
                            <!-- Item 2 -->
                            <a href="#" class="flex gap-3 group">
                                <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&w=150&auto=format&fit=crop"
                                    class="w-20 h-20 object-cover rounded-lg group-hover:opacity-80 transition"
                                    alt="Thumb">
                                <div>
                                    <h5
                                        class="text-sm font-bold text-gray-800 leading-snug group-hover:text-brand-red transition line-clamp-2">
                                        Cara Daftar Haji Plus via KOSPE</h5>
                                    <span class="text-xs text-gray-400 mt-1 block">08 Aug 2025</span>
                                </div>
                            </a>
                            <!-- Item 3 -->
                            <a href="#" class="flex gap-3 group">
                                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=150&auto=format&fit=crop"
                                    class="w-20 h-20 object-cover rounded-lg group-hover:opacity-80 transition"
                                    alt="Thumb">
                                <div>
                                    <h5
                                        class="text-sm font-bold text-gray-800 leading-snug group-hover:text-brand-red transition line-clamp-2">
                                        Keuntungan Menjadi Anggota Koperasi Syariah</h5>
                                    <span class="text-xs text-gray-400 mt-1 block">20 Jul 2025</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Tags Cloud -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-4">Tag Populer</h4>
                        <div class="flex flex-wrap gap-2">
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white text-xs text-gray-600 rounded-full transition">#EkonomiSyariah</a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white text-xs text-gray-600 rounded-full transition">#Investasi</a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white text-xs text-gray-600 rounded-full transition">#UMKM</a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white text-xs text-gray-600 rounded-full transition">#HajiUmroh</a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white text-xs text-gray-600 rounded-full transition">#Zakat</a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white text-xs text-gray-600 rounded-full transition">#Pendidikan</a>
                        </div>
                    </div>

                    <!-- Newsletter CTA -->
                    <div
                        class="bg-gradient-to-br from-brand-red to-red-900 p-6 rounded-2xl shadow-lg text-white text-center">
                        <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i data-lucide="mail" class="w-6 h-6"></i>
                        </div>
                        <h4 class="font-bold text-lg mb-2">Berlangganan Info</h4>
                        <p class="text-sm text-red-100 mb-4">Dapatkan tips keuangan dan info produk terbaru langsung di
                            email Anda.</p>
                        <input type="email" placeholder="Email Anda"
                            class="w-full px-4 py-2 rounded-lg text-gray-800 text-sm mb-3 focus:outline-none">
                        <button
                            class="w-full bg-brand-yellow text-red-900 font-bold py-2 rounded-lg hover:bg-yellow-400 transition">Langganan</button>
                    </div>

                </div>

            </div>
        </div>
    </section>
</div>