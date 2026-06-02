<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <!-- 1. Banner Promo Full Width -->
    {{-- <div
        class="bg-gradient-to-r from-brand-red to-brand-orange text-white py-3 text-center relative overflow-hidden">
        <div id="promo-slider" class="container mx-auto px-4 font-medium text-sm md:text-base">
            <div class="promo-item">🎉 Promo Haji Khusus: Diskon biaya administrasi hingga 50% bulan ini!</div>
            <div class="promo-item hidden">🚀 Simpanan Produktif: Bagi hasil setara 8% p.a. Aman & Syariah.</div>
            <div class="promo-item hidden">🕌 Daftar Umroh bersama Koperasi Pesantren, bimbingan sesuai sunnah.</div>
        </div>
    </div> --}}

    <!-- 2. Big Navbar Modern -->
    <nav class="bg-white shadow-md sticky top-0 z-40">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2">
                    <img src="{{ asset('logo.png') }}" alt="" class="w-12 ">
                    <div class="flex flex-col">
                        <span class="text-xs text-gray-500 font-medium">Koperasi Syariah Pesantren Entrepreneur</span>
                        <span class="text-xs text-gray-500 font-medium">BADAN HUKUM : 30/BH/INDAGKOP/V/2012</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex gap-8 items-center h-full">
                    <a href="{{ route('home') }}" wire:navigate
                        class="{{ request()->routeIs('home') ? 'active' : '' }} text-gray-700 hover:text-brand-red font-medium transition">Beranda</a>
                    <a href="{{ route('profil') }}" wire:navigate
                        class="{{ request()->routeIs('profil') ? 'active' : '' }} text-gray-700 hover:text-brand-red font-medium transition">Profil</a>

                    <!-- Mega Menu Parent -->
                    <div class="nav-item group h-full flex items-center cursor-pointer">
                        <span
                            class="text-gray-700 group-hover:text-brand-red font-medium transition flex items-center gap-1">
                            Produk <i data-lucide="chevron-down" class="w-4 h-4"></i>
                        </span>

                        <!-- Mega Menu Dropdown with Dynamic Image Logic -->
                        <div class="mega-menu">
                            <div class="container mx-auto px-4 py-8">
                                <div class="grid grid-cols-12 gap-8">
                                    <!-- Menu Column 1 -->
                                    <div class="col-span-3">
                                        <h4 class="font-bold text-brand-red mb-4 border-b pb-2">Simpanan</h4>
                                        <ul class="space-y-2">
                                            <li>
                                                <a href="{{ route('simpanan-anggota') }}" wire:navigate
                                                    class="{{ request()->routeIs('simpanan-anggota') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1579621970795-87facc2f976d?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Simpanan Wajib"
                                                    data-desc="Simpanan Pokok dan Simpanan Wajib sebagai bukti keaktifan anggota dengan bagi hasil tahunan.">
                                                    Simpanan Anggota
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('simpanan-sukarela') }}" wire:navigate
                                                    class="{{ request()->routeIs('simpanan-sukarela') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Simpanan Pokok"
                                                    data-desc="Simpanan yang dapat di setor dan tarik kapanpun dengan jumlah sesuai keinginan">
                                                    Simpanan Sukarela
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('simpanan-program') }}" wire:navigate
                                                    class="{{ request()->routeIs('simpanan-program') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Simpanan Pelajar"
                                                    data-desc="Simpanan dengan tujuan tertentu membuat rencana menjadi terarah dan lebih berkah dengan setoran ringan setiap bulan serta dapat bagi hasil">
                                                    Simpanan Program
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('simpanan-berjangka') }}" wire:navigate
                                                    class="{{ request()->routeIs('simpanan-berjangka') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1516934024742-b461fba47600?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Tabungan Qurban"
                                                    data-desc="Simpanan dengan jangka waktu tertentu, mendapatkan bagi hasil lebih komepetitif dan doorprize">
                                                    Simpanan Produktif
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('simprotama') }}" wire:navigate
                                                    class="{{ request()->routeIs('simprotama') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1516934024742-b461fba47600?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Tabungan Qurban"
                                                    data-desc="Simpanan dengan jangka waktu tertentu, mendapatkan bagi hasil lebih komepetitif dan doorprize">
                                                    Simpanan Produktif Utama
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('siwak') }}" wire:navigate
                                                    class="{{ request()->routeIs('siwak') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1516934024742-b461fba47600?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Tabungan Qurban"
                                                    data-desc="Simpanan dengan jangka waktu tertentu, mendapatkan bagi hasil lebih komepetitif dan doorprize">
                                                    Simpanan Wajib Khusus
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Menu Column 2 -->
                                    <div class="col-span-3">
                                        <h4 class="font-bold text-brand-red mb-4 border-b pb-2">Pembiayaan</h4>
                                        <ul class="space-y-2">
                                            <li>
                                                <a href="{{ route('haji-khusus', ['nama' => '-']) }}" wire:navigate
                                                    class="{{ request()->routeIs('haji-khusus') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Mudharabah"
                                                    data-desc="Kerjasama usaha dengan sistem bagi hasil yang adil dan transparan.">
                                                    Haji Khusus
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('modal-usaha') }}" wire:navigate
                                                    class="{{ request()->routeIs('modal-usaha') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Musyarakah"
                                                    data-desc="Pembiayaan modal kerja atau proyek dengan prinsip kemitraan.">
                                                    Modal Usaha
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('multi-jasa') }}" wire:navigate
                                                    class="{{ request()->routeIs('multi-jasa') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Qardh Hasan"
                                                    data-desc="Pinjaman kebajikan tanpa bunga untuk keperluan mendesak anggota.">
                                                    Multi Jasa
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('renovasi-rumah') }}" wire:navigate
                                                    class="{{ request()->routeIs('renovasi-rumah') ? 'active' : '' }} mega-link hover:text-brand-orange block py-1"
                                                    data-img="https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=400&auto=format&fit=crop"
                                                    data-title="Murabahah"
                                                    data-desc="Pembiayaan jual beli barang (rumah, kendaraan) dengan margin yang disepakati.">
                                                    Renovasi Rumah
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Image Column (Dynamic) -->
                                    <div class="col-span-6">
                                        <div
                                            class="bg-gray-50 rounded-xl p-6 flex items-center gap-6 border border-gray-100 h-full transition-all duration-300">
                                            <img id="mega-img-index"
                                                src="https://images.unsplash.com/photo-1607604276583-eef5d076aa5f?q=80&w=400&auto=format&fit=crop"
                                                alt="Menu Image"
                                                class="w-48 h-32 object-cover rounded-lg shadow-md transition-opacity duration-300">
                                            <div>
                                                <h5 id="mega-title-index" class="font-bold text-xl text-gray-800 mb-2">
                                                    Layanan Digital</h5>
                                                <p id="mega-desc-index" class="text-sm text-gray-600 leading-relaxed">
                                                    Akses
                                                    saldo dan mutasi kapan saja lewat aplikasi KOSPE Mobile. Transaksi
                                                    aman
                                                    dan berkah.</p>
                                                <a href="#"
                                                    class="inline-block mt-3 text-brand-red font-semibold text-sm hover:underline">Lihat
                                                    Detail &rarr;</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('mykospe') }}" wire:navigate
                        class="{{ request()->is('mykospe') ? 'active' : '' }} text-gray-700 hover:text-brand-red font-medium transition">My
                        Kospe</a>
                    <a href="{{ route('kantor') }}" wire:navigate
                        class="{{ request()->is('kantor') ? 'active' : '' }} text-gray-700 hover:text-brand-red font-medium transition">Kantor</a>
                    <a href="{{ route('daftar-anggota') }}"
                        class="px-6 py-2 bg-brand-red text-white rounded-full font-medium hover:bg-red-700 transition shadow-md hover:shadow-lg">
                        Daftar Anggota
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-brand-red transition p-2">
                    <i data-lucide="menu" class="w-8 h-8"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Full Screen Overlay -->
        <div id="mobile-menu"
            class="fixed inset-0 z-50 bg-white hidden flex-col overflow-y-auto transform translate-x-full opacity-0 transition-all duration-300">
            <!-- Header Mobile Menu -->
            <div class="flex justify-between items-center p-4 border-b border-gray-100 bg-white sticky top-0 z-10">
                <div class="flex items-center gap-2">
                    <div
                        class="w-8 h-8 bg-brand-red rounded-lg flex items-center justify-center text-white font-bold text-lg">
                        K</div>
                    <span class="text-lg font-bold text-brand-red">KoSPE</span>
                </div>
                <button id="close-mobile-menu"
                    class="text-gray-500 hover:text-brand-red p-2 rounded-full hover:bg-red-50 transition">
                    <i data-lucide="x" class="w-6 h-6"></i>
                </button>
            </div>

            <!-- Menu Items Container -->
            <div class="p-4 space-y-2">
                <a href="{{ route('home') }}" wire:navigate
                    class="block px-4 py-3 text-lg font-medium text-gray-700 hover:bg-red-50 hover:text-brand-red rounded-xl transition-colors duration-200 flex items-center gap-3">
                    <i data-lucide="home" class="w-5 h-5"></i> Beranda
                </a>
                <a href="{{ route('profil') }}" wire:navigate
                    class="block px-4 py-3 text-lg font-medium text-gray-700 hover:bg-red-50 hover:text-brand-red rounded-xl transition-colors duration-200 flex items-center gap-3">
                    <i data-lucide="user" class="w-5 h-5"></i> Profil
                </a>

                <!-- Mobile Dropdown (Layanan) -->
                <div class="group">
                    <button id="mobile-layanan-toggle"
                        class="w-full flex justify-between items-center px-4 py-3 text-lg font-medium text-gray-700 hover:bg-red-50 hover:text-brand-red rounded-xl transition-colors duration-200">
                        <span class="flex items-center gap-3"><i data-lucide="layers" class="w-5 h-5"></i>
                            Produk & Layanan</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"
                            id="mobile-layanan-icon"></i>
                    </button>

                    <!-- Mobile Mega Menu Content -->
                    <div id="mobile-layanan-content"
                        class="hidden bg-gray-50 rounded-xl mt-2 mx-2 overflow-hidden border border-gray-100">
                        <!-- Simpanan Section -->
                        <div class="p-4 border-b border-gray-200">
                            <h5
                                class="font-bold text-brand-red text-sm uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i data-lucide="wallet" class="w-4 h-4"></i> Simpanan
                            </h5>
                            <ul class="space-y-2 pl-2 border-l-2 border-brand-red/20">
                                <li><a href="{{ route('simpanan-anggota') }}" wire:navigate
                                        class="{{ request()->routeIs('simpanan-anggota') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Simpanan
                                        Anggota</a></li>
                                <li><a href="{{ route('simpanan-sukarela') }}" wire:navigate
                                        class="{{ request()->routeIs('simpanan-sukarela') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Simpanan
                                        Sukarela</a></li>
                                <li><a href="{{ route('simpanan-program') }}" wire:navigate
                                        class="{{ request()->routeIs('simpanan-program') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Simpanan
                                        Program</a></li>
                                <li><a href="{{ route('simpanan-berjangka') }}" wire:navigate
                                        class="{{ request()->routeIs('simpanan-berjangka') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Simpanan
                                        Produktif</a></li>
                                <li><a href="{{ route('simprotama') }}" wire:navigate
                                        class="{{ request()->routeIs('simprotama') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Simpanan
                                        Produktif Utama</a></li>
                                <li><a href="{{ route('siwak') }}" wire:navigate
                                        class="{{ request()->routeIs('siwak') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Simpanan
                                        Wajib Khusus</a></li>
                            </ul>
                        </div>

                        <!-- Pembiayaan Section -->
                        <div class="p-4">
                            <h5
                                class="font-bold text-brand-orange text-sm uppercase tracking-wider mb-3 flex items-center gap-2">
                                <i data-lucide="hand-coins" class="w-4 h-4"></i> Pembiayaan
                            </h5>
                            <ul class="space-y-2 pl-2 border-l-2 border-brand-orange/20">
                                <li><a href="{{ route('haji-khusus', ['nama' => 'John Doe']) }}" wire:navigate
                                        class="{{  request()->routeIs('haji-khusus') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Haji
                                        Khusus</a>
                                </li>
                                <li><a href="{{ route('modal-usaha') }}" wire:navigate
                                        class="{{ request()->routeIs('modal-usaha') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Modal
                                        Usaha</a>
                                </li>
                                <li><a href="{{ route('multi-jasa') }}" wire:navigate
                                        class="{{ request()->routeIs('multi-jasa') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Multi
                                        Jasa</a>
                                </li>
                                <li><a href="{{ route('renovasi-rumah') }}" wire:navigate
                                        class="{{ request()->routeIs('renovasi-rumah') ? 'active' : '' }} block px-3 py-2 text-sm text-gray-600 hover:text-brand-orange hover:bg-white rounded-lg transition">Renovasi
                                        Rumah</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <a href="{{ route('mykospe') }}" wire:navigate
                    class="block px-4 py-3 text-lg font-medium text-gray-700 hover:bg-red-50 hover:text-brand-red rounded-xl transition-colors duration-200 flex items-center gap-3">
                    <i data-lucide="shield-check" class="w-5 h-5"></i>Aplikasi MyKoSPE
                </a>
                <a href="{{ route('kantor') }}" wire:navigate
                    class="block px-4 py-3 text-lg font-medium text-gray-700 hover:bg-red-50 hover:text-brand-red rounded-xl transition-colors duration-200 flex items-center gap-3">
                    <i data-lucide="info" class="w-5 h-5"></i> Kontak
                </a>

                <!-- CTA Button in Mobile -->
                <div class="pt-6 mt-4 border-t border-gray-100">
                    <a href="#"
                        class="block w-full py-3 bg-brand-red text-white text-center rounded-xl font-bold shadow-lg hover:bg-red-700 hover:shadow-xl transition transform active:scale-95">
                        Masuk Anggota
                    </a>
                </div>

                <!-- Mobile Footer Info -->
                <div class="pt-8 text-center text-gray-400 text-xs">
                    <p>&copy; 2024 KOSPE Mobile</p>
                </div>
            </div>
        </div>
    </nav>

</div>
@push('scripts')
    <script>
        $('#mobile-layanan-toggle').click(function () {
            const content = $('#mobile-layanan-content');
            // Lucide akan mengubah <i> menjadi <svg>, jadi kita cari elemen svg
            const icon = $(this).find('svg');

            content.slideToggle(300); // Animasi buka-tutup
            icon.toggleClass('rotate-180 text-brand-red'); // Memutar ikon chevron
            $(this).toggleClass('text-brand-red'); // Highlight teks saat terbuka
        });
    </script>
@endpush