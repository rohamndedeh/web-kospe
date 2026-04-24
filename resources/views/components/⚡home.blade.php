<?php

use Livewire\Component;
use App\Models\Blogs;

new class extends Component {
    //
    public function render()
    {
        $blogs = Blogs::where('is_active', 1)->where('kategori', 1)->take(3)->orderBy('date', 'desc')->get();
        return $this->view([
            'blogs' => $blogs
        ]);
    }
};
?>

<div>


    <!-- 3. Hero Section -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="space-y-6 animate-fade-in-up">
                    <div
                        class="inline-block px-3 py-1 bg-orange-100 text-brand-orange rounded-full text-sm font-semibold">
                        Ekonomi Umat Berbasis Syariah</div>
                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 leading-tight">
                        Membangun <span class="text-brand-red">Ekonomi</span>,<br>
                        Meraih <span class="text-brand-orange">Keberkahan</span>.
                    </h1>
                    <p class="text-gray-600 text-lg md:w-4/5">
                        Bergabunglah bersama ribuan anggota lainnya dalam membangun kemandirian ekonomi pesantren dengan
                        prinsip syariah yang transparan dan amanah.
                    </p>
                    <div class="flex gap-4 pt-4">
                        <a wire:navigate href="/daftar-anggota"
                            class="px-8 py-3 bg-gradient-to-r from-brand-red to-brand-orange text-white rounded-lg font-semibold shadow-lg hover:shadow-xl transition transform hover:-translate-y-1 flex items-center gap-2">
                            Daftar Sekarang <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a wire:navigate href="/konsultasi"
                            class="px-8 py-3 border-2 border-gray-300 text-gray-700 rounded-lg font-semibold hover:border-brand-red hover:text-brand-red transition">
                            Konsultasi
                        </a>
                    </div>

                    <div class="flex items-center gap-4 mt-8">
                        <div class="flex -space-x-2">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                src="https://i.pravatar.cc/100?img=1" alt="Member">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                src="https://i.pravatar.cc/100?img=2" alt="Member">
                            <img class="w-10 h-10 rounded-full border-2 border-white"
                                src="https://i.pravatar.cc/100?img=3" alt="Member">
                        </div>
                        <p class="text-sm text-gray-500">Dipercaya oleh <span
                                class="font-bold text-brand-red">2,500+</span>
                            Anggota</p>
                    </div>
                </div>

                <!-- Right Swiper -->
                <div
                    class="relative rounded-2xl overflow-hidden shadow-2xl transform rotate-1 hover:rotate-0 transition duration-500">
                    <div class="swiper heroSwiper h-[400px] md:h-[500px]">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/1.jpg" class="w-full h-full object-cover" alt="Produk 1">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/2.jpg" class="w-full h-full object-cover" alt="Produk 2">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/3.jpg" class="w-full h-full object-cover" alt="Produk 3">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/4.jpg" class="w-full h-full object-cover" alt="Produk 4">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/5.jpg" class="w-full h-full object-cover" alt="Produk 5">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/6.jpg" class="w-full h-full object-cover" alt="Produk 5">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="/7.jpg" class="w-full h-full object-cover" alt="Produk 5">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">

                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Section 6 Card Scrollable -->
    <section id="produk" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2">Produk Unggulan</h2>
                <div class="w-20 h-1 bg-brand-red mx-auto rounded"></div>
            </div>

            <!-- Horizontal Scroll Container -->
            <div class="flex overflow-x-auto pb-8 hide-scrollbar snap-x snap-mandatory gap-6 px-2">
                <!-- Card 1 -->
                <div
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-red transition duration-500">
                        <i data-lucide="wallet" class="w-16 h-16 text-brand-red group-hover:text-white transition"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-red">Buka Simpanan</h3>
                        <p class="text-sm text-gray-500 mb-4">Simpan dana Anda dengan akad Wadiah atau Mudharabah yang
                            aman.
                        </p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-orange transition duration-500">
                        <i data-lucide="hand-coins"
                            class="w-16 h-16 text-brand-orange group-hover:text-white transition"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-orange">Ajukan Pembiayaan</h3>
                        <p class="text-sm text-gray-500 mb-4">Solusi modal usaha dengan prinsip bagi hasil yang adil.
                        </p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-yellow transition duration-500">
                        <i data-lucide="plane"
                            class="w-16 h-16 text-brand-yellow group-hover:text-white transition"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-yellow">Daftar Haji Khusus</h3>
                        <p class="text-sm text-gray-500 mb-4">Perencanaan ibadah haji & umroh yang terpercaya.</p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-red transition duration-500">
                        <i data-lucide="shield-check"
                            class="w-16 h-16 text-brand-red group-hover:text-white transition"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-red">Simpanan Wajib</h3>
                        <p class="text-sm text-gray-500 mb-4">Kewajiban anggota dengan manfaat jangka panjang.</p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </div>

                <!-- Card 5 -->
                <div
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-orange transition duration-500">
                        <i data-lucide="trending-up"
                            class="w-16 h-16 text-brand-orange group-hover:text-white transition"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-orange">Simpanan Produktif</h3>
                        <p class="text-sm text-gray-500 mb-4">Investasi dana anda untuk dikelola di sektor riil
                            pesantren.
                        </p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </div>

                <!-- Card 6 -->
                <div
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-yellow transition duration-500">
                        <i data-lucide="crown"
                            class="w-16 h-16 text-brand-yellow group-hover:text-white transition"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-yellow">Simpro Tama</h3>
                        <p class="text-sm text-gray-500 mb-4">Simpanan Program Terencana Utama dengan bonus spesial.</p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Full Width Parallax -->
    <section class="relative bg-fixed bg-center bg-cover h-[400px] flex items-center"
        style="background-image: url('https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1200&auto=format&fit=crop');">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">Ingin Menjadi Bagian dari Kami?</h2>
            <p class="text-gray-200 text-lg mb-8 max-w-2xl mx-auto">Bergabunglah menjadi anggota KOSPE dan nikmati
                berbagai
                keuntungan serta keberkahan dalam bermuamalah.</p>
            <a href="#"
                class="inline-block bg-brand-red hover:bg-red-700 text-white text-lg font-bold py-4 px-10 rounded-full transition shadow-lg transform hover:scale-105">
                Daftar Anggota Sekarang
            </a>
        </div>
    </section>

    <!-- 6. 3 Navbar Tambahan (Tabs + New Testimoni & Mitra) -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Tab Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-10">
                <button
                    class="tab-btn bg-brand-red text-white px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold  transition transform hover:scale-105"
                    data-target="#tab-agenda">Agenda</button>
                <button
                    class="tab-btn bg-white text-gray-600 border border-gray-300 px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105"
                    data-target="#tab-artikel">Artikel</button>
                <button
                    class="tab-btn bg-white text-gray-600 border border-gray-300 px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105"
                    data-target="#tab-video">Video</button>
                <button
                    class="tab-btn bg-white text-gray-600 border border-gray-300 px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105"
                    data-target="#tab-testimoni">Testimoni</button>
                <button
                    class="tab-btn bg-white text-gray-600 border border-gray-300 px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold hover:bg-gray-100 transition transform hover:scale-105"
                    data-target="#tab-mitra">Mitra</button>
            </div>

            <!-- Content Container (Full Width Container) -->
            <div class="min-h-[400px]">

                <!-- Agenda Tab -->
                <div id="tab-agenda" class="tab-content block tab-animate">
                    <div class="flex justify-between items-end mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 border-l-4 border-brand-red pl-3">Agenda Kegiatan
                        </h3>
                        <a href="#" class="text-brand-red font-medium text-sm hover:underline">Lihat Semua Agenda
                            &rarr;</a>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        @foreach ($blogs as $blog)
                            <div
                                class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition translate-y-0 group border border-gray-100">
                                <div class="relative h-48 overflow-hidden">
                                    <div
                                        class="absolute top-4 left-4 bg-brand-red text-white text-xs font-bold px-3 py-1 rounded uppercase tracking-wide z-10">
                                        Rapat</div>
                                    <img src="https://images.unsplash.com/photo-1544531586-fde5298cdd40?q=80&w=600&auto=format&fit=crop"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                        alt="RAT">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 text-gray-500 text-sm mb-3">
                                        <i data-lucide="calendar" class="w-4 h-4 text-brand-orange"></i>
                                        <span>{{ $blog->date }}</span>
                                    </div>
                                    <h4 class="font-bold text-xl mb-3 text-gray-800 group-hover:text-brand-red transition">
                                        {{ $blog->judul }}
                                    </h4>
                                    <p class="text-gray-600 text-sm line-clamp-2 mb-4">
                                        {{ substr(html_entity_decode($blog->isi), 0, 100) }}...
                                    </p>
                                    <a href="{{ route('blogs.detail', $blog->id_post) }}" wire:navigate
                                        class="text-brand-orange font-semibold text-sm hover:text-brand-red transition">Detail
                                        Kegiatan &rarr;</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

                <!-- Artikel Tab -->
                <div id="tab-artikel" class="tab-content hidden tab-animate">
                    <div class="flex justify-between items-end mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 border-l-4 border-brand-orange pl-3">Artikel &
                            Berita
                            Terbaru</h3>
                        <a href="#" class="text-brand-orange font-medium text-sm hover:underline">Baca Selengkapnya
                            &rarr;</a>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Articles code remains same -->
                        <div
                            class="flex flex-col bg-white rounded-xl shadow hover:shadow-lg transition border border-gray-100 h-full">
                            <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?q=80&w=600&auto=format&fit=crop"
                                class="h-56 w-full object-cover rounded-t-xl" alt="Artikel 1">
                            <div class="p-6 flex-1 flex flex-col">
                                <span
                                    class="text-xs font-semibold text-brand-red bg-red-50 px-2 py-1 rounded w-fit mb-3">Fiqih
                                    Muamalah</span>
                                <h4 class="text-lg font-bold mb-3 hover:text-brand-red cursor-pointer">Hukum Riba dan
                                    Dampaknya dalam Ekonomi Modern</h4>
                                <p class="text-gray-600 text-sm mb-4 flex-1">Penjelasan mendalam mengenai pandangan
                                    Islam
                                    terhadap sistem bunga bank konvensional.</p>
                                <div class="pt-4 border-t flex items-center justify-between text-xs text-gray-500">
                                    <span>Admin KOSPE</span>
                                    <span>2 Hari lalu</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col bg-white rounded-xl shadow hover:shadow-lg transition border border-gray-100 h-full">
                            <img src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?q=80&w=600&auto=format&fit=crop"
                                class="h-56 w-full object-cover rounded-t-xl" alt="Artikel 2">
                            <div class="p-6 flex-1 flex flex-col">
                                <span
                                    class="text-xs font-semibold text-brand-orange bg-orange-50 px-2 py-1 rounded w-fit mb-3">Tips
                                    Keuangan</span>
                                <h4 class="text-lg font-bold mb-3 hover:text-brand-red cursor-pointer">5 Cara Mengatur
                                    Keuangan Rumah Tangga Sakinah</h4>
                                <p class="text-gray-600 text-sm mb-4 flex-1">Strategi jitu mengelola pendapatan agar
                                    cukup
                                    untuk kebutuhan dan tetap bisa menabung.</p>
                                <div class="pt-4 border-t flex items-center justify-between text-xs text-gray-500">
                                    <span>Ustadz Ahmad</span>
                                    <span>5 Hari lalu</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col bg-white rounded-xl shadow hover:shadow-lg transition border border-gray-100 h-full">
                            <img src="https://images.unsplash.com/photo-1604594849809-dfedbc827105?q=80&w=600&auto=format&fit=crop"
                                class="h-56 w-full object-cover rounded-t-xl" alt="Artikel 3">
                            <div class="p-6 flex-1 flex flex-col">
                                <span
                                    class="text-xs font-semibold text-brand-yellow bg-yellow-50 px-2 py-1 rounded w-fit mb-3">Berita
                                    Koperasi</span>
                                <h4 class="text-lg font-bold mb-3 hover:text-brand-red cursor-pointer">KOSPE Raih
                                    Penghargaan Koperasi Terbaik 2024</h4>
                                <p class="text-gray-600 text-sm mb-4 flex-1">Alhamdulillah, atas kepercayaan anggota,
                                    KOSPE
                                    kembali menorehkan prestasi tingkat nasional.</p>
                                <div class="pt-4 border-t flex items-center justify-between text-xs text-gray-500">
                                    <span>Humas</span>
                                    <span>1 Minggu lalu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video Tab -->
                <div id="tab-video" class="tab-content hidden tab-animate">
                    <div class="flex justify-between items-end mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 border-l-4 border-black pl-3">Galeri Video</h3>
                        <a href="#" class="text-gray-800 font-medium text-sm hover:underline">Tonton di YouTube
                            &rarr;</a>
                    </div>
                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Videos code remains same -->
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-56 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1590050252141-5bd9f1734a84?q=80&w=600&auto=format&fit=crop"
                                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-40 transition duration-500 group-hover:scale-110"
                                    alt="Video Thumb">
                                <div
                                    class="relative z-10 transform group-hover:scale-125 transition duration-300 bg-brand-red/80 rounded-full p-3">
                                    <i data-lucide="play" class="w-8 h-8 fill-current"></i>
                                </div>
                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Profil Koperasi
                                Syariah
                                Pesantren</h4>
                            <p class="text-sm text-gray-500">Mengenal lebih dekat visi dan misi kami.</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-56 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=600&auto=format&fit=crop"
                                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-40 transition duration-500 group-hover:scale-110"
                                    alt="Video Thumb">
                                <div
                                    class="relative z-10 transform group-hover:scale-125 transition duration-300 bg-brand-red/80 rounded-full p-3">
                                    <i data-lucide="play" class="w-8 h-8 fill-current"></i>
                                </div>
                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Testimoni Sukses
                                Anggota</h4>
                            <p class="text-sm text-gray-500">Kisah inspiratif pengusaha mikro binaan.</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-56 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <img src="https://images.unsplash.com/photo-1542204165-65bf26472b9b?q=80&w=600&auto=format&fit=crop"
                                    class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:opacity-40 transition duration-500 group-hover:scale-110"
                                    alt="Video Thumb">
                                <div
                                    class="relative z-10 transform group-hover:scale-125 transition duration-300 bg-brand-red/80 rounded-full p-3">
                                    <i data-lucide="play" class="w-8 h-8 fill-current"></i>
                                </div>
                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Highlight RAT Tahun
                                Lalu</h4>
                            <p class="text-sm text-gray-500">Keseruan dan transparansi laporan tahunan.</p>
                        </div>
                    </div>
                </div>

                <!-- NEW TAB: Testimoni -->
                <div id="tab-testimoni" class="tab-content hidden tab-animate">
                    <div class="flex justify-between items-end mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 border-l-4 border-brand-yellow pl-3">Kata Mereka
                        </h3>
                        <a href="#" class="text-brand-yellow font-medium text-sm hover:underline">Lihat Semua &rarr;</a>
                    </div>
                    <!-- Swiper Testimoni -->
                    <div class="swiper testiSwiper pb-10">
                        <div class="swiper-wrapper">
                            <!-- Testi 1 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-6 rounded-xl shadow border border-gray-100 h-full">
                                    <div class="flex gap-1 text-yellow-400 mb-4">
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                    </div>
                                    <p class="text-gray-600 mb-6 italic">"Alhamdulillah sejak bergabung dengan KOSPE,
                                        usaha
                                        warung kelontong saya makin berkembang berkat pembiayaan mudharabah."</p>
                                    <div class="flex items-center gap-3">
                                        <img src="https://i.pravatar.cc/150?img=12" class="w-10 h-10 rounded-full"
                                            alt="User">
                                        <div>
                                            <h5 class="font-bold text-sm">Ibu Sulastri</h5>
                                            <p class="text-xs text-gray-500">Anggota sejak 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testi 2 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-6 rounded-xl shadow border border-gray-100 h-full">
                                    <div class="flex gap-1 text-yellow-400 mb-4">
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                    </div>
                                    <p class="text-gray-600 mb-6 italic">"Proses daftar haji di sini sangat transparan
                                        dan
                                        sesuai syariah. Petugasnya ramah dan sangat membantu."</p>
                                    <div class="flex items-center gap-3">
                                        <img src="https://i.pravatar.cc/150?img=59" class="w-10 h-10 rounded-full"
                                            alt="User">
                                        <div>
                                            <h5 class="font-bold text-sm">Bpk. H. Mahmud</h5>
                                            <p class="text-xs text-gray-500">Anggota Haji Khusus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testi 3 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-6 rounded-xl shadow border border-gray-100 h-full">
                                    <div class="flex gap-1 text-yellow-400 mb-4">
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star-half" class="w-4 h-4 fill-current"></i>
                                    </div>
                                    <p class="text-gray-600 mb-6 italic">"Aplikasi KOSPE Mobile sangat memudahkan saya
                                        untuk
                                        cek saldo dan transfer ke sesama anggota tanpa biaya."</p>
                                    <div class="flex items-center gap-3">
                                        <img src="https://i.pravatar.cc/150?img=33" class="w-10 h-10 rounded-full"
                                            alt="User">
                                        <div>
                                            <h5 class="font-bold text-sm">Rizky Pratama</h5>
                                            <p class="text-xs text-gray-500">Mahasiswa / Santri</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testi 4 -->
                            <div class="swiper-slide">
                                <div class="bg-white p-6 rounded-xl shadow border border-gray-100 h-full">
                                    <div class="flex gap-1 text-yellow-400 mb-4">
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                        <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                    </div>
                                    <p class="text-gray-600 mb-6 italic">"Investasi emas di KOSPE sangat aman dan
                                        terpercaya. Harga jual beli sangat kompetitif dibanding tempat lain."</p>
                                    <div class="flex items-center gap-3">
                                        <img src="https://i.pravatar.cc/150?img=45" class="w-10 h-10 rounded-full"
                                            alt="User">
                                        <div>
                                            <h5 class="font-bold text-sm">Ibu Sarah</h5>
                                            <p class="text-xs text-gray-500">Pengusaha Butik</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- NEW TAB: Mitra -->
                <div id="tab-mitra" class="tab-content hidden tab-animate">
                    <div class="flex justify-between items-end mb-6">
                        <h3 class="text-2xl font-bold text-gray-800 border-l-4 border-gray-800 pl-3">Mitra Strategis
                        </h3>
                    </div>
                    <!-- Swiper Mitra (Scrollable) -->
                    <div class="swiper mitraSwiper">
                        <div class="swiper-wrapper py-4">
                            <!-- Logos (Using FontAwesome/Text as placeholder for logos) -->
                            <div class="swiper-slide">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                    <span class="font-bold text-xl text-blue-600">Bank Syariah</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                    <span class="font-bold text-xl text-green-600">BAZNAS</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                    <span class="font-bold text-xl text-red-600">Telkom</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                    <span class="font-bold text-xl text-orange-600">PosIndo</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                    <span class="font-bold text-xl text-purple-600">Muamalat</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                    <span class="font-bold text-xl text-cyan-600">Pegadaian</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="bg-white border border-gray-200 rounded-lg h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                    <span class="font-bold text-xl text-emerald-600">BSI</span>
                                </div>
                            </div>
                        </div>
                        <!-- Optional Navigation -->
                        <!-- <div class="swiper-button-next"></div>
                             <div class="swiper-button-prev"></div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NEW SECTION: Mobile App (Redesigned grid for mobile) -->
    <section class="py-24 bg-gradient-to-b from-white to-orange-50 relative overflow-hidden">
        <!-- Background Futuristic Blobs -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-10 left-10 w-72 h-72 bg-brand-red/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 1s;"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

                <!-- Left: Text & Features -->
                <div class="lg:col-span-7 space-y-8" id="features-container">
                    <div class="space-y-4">
                        <span
                            class="inline-block px-3 py-1 bg-brand-red/10 text-brand-red rounded-full text-xs font-bold tracking-wider uppercase border border-brand-red/20">
                            <i data-lucide="zap" class="inline w-3 h-3 mr-1"></i> Digital Syariah 4.0
                        </span>
                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight">
                            KOSPE Mobile <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-brand-orange">Kemudahan
                                dalam Genggaman</span>
                        </h2>
                        <p class="text-gray-600 text-lg md:w-4/5 leading-relaxed">
                            Nikmati pengalaman bertransaksi yang aman, cepat, dan sesuai syariah. Pantau tabungan,
                            pembiayaan, hingga bayar zakat langsung dari smartphone Anda.
                        </p>
                    </div>

                    <!-- Feature Items (Compact Grid for Mobile) -->
                    <div class="grid grid-cols-2 gap-3 md:gap-6">
                        <!-- Feature 1 -->
                        <div
                            class="feature-item feature-hidden bg-white p-3 md:p-5 rounded-xl md:rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition group">
                            <div
                                class="bg-brand-red/10 w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl flex items-center justify-center mb-3 md:mb-4 group-hover:bg-brand-red transition duration-300">
                                <i data-lucide="smartphone"
                                    class="w-5 h-5 md:w-6 md:h-6 text-brand-red group-hover:text-white transition"></i>
                            </div>
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">Cek Saldo</h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Transparansi total simpanan Anda.
                            </p>
                        </div>

                        <!-- Feature 2 -->
                        <div
                            class="feature-item feature-hidden bg-white p-3 md:p-5 rounded-xl md:rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition group">
                            <div
                                class="bg-brand-orange/10 w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl flex items-center justify-center mb-3 md:mb-4 group-hover:bg-brand-orange transition duration-300">
                                <i data-lucide="qr-code"
                                    class="w-5 h-5 md:w-6 md:h-6 text-brand-orange group-hover:text-white transition"></i>
                            </div>
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">Bayar QRIS</h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Belanja praktis tinggal scan.</p>
                        </div>

                        <!-- Feature 3 -->
                        <div
                            class="feature-item feature-hidden bg-white p-3 md:p-5 rounded-xl md:rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition group">
                            <div
                                class="bg-brand-yellow/10 w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl flex items-center justify-center mb-3 md:mb-4 group-hover:bg-brand-yellow transition duration-300">
                                <i data-lucide="refresh-cw"
                                    class="w-5 h-5 md:w-6 md:h-6 text-brand-yellow group-hover:text-white transition"></i>
                            </div>
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">Transfer</h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Kirim dana antar anggota gratis.
                            </p>
                        </div>

                        <!-- Feature 4 -->
                        <div
                            class="feature-item feature-hidden bg-white p-3 md:p-5 rounded-xl md:rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition group">
                            <div
                                class="bg-green-100 w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl flex items-center justify-center mb-3 md:mb-4 group-hover:bg-green-500 transition duration-300">
                                <i data-lucide="heart-handshake"
                                    class="w-5 h-5 md:w-6 md:h-6 text-green-600 group-hover:text-white transition"></i>
                            </div>
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">ZISWAF</h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Bayar Zakat & Sedekah mudah.</p>
                        </div>
                    </div>

                    <div class="pt-4 flex flex-wrap gap-4">
                        <a href="https://play.google.com/store/apps/details?id=com.mgp.kospemobile&pcampaignid=web_share"
                            class="flex items-center gap-3 bg-gray-900 text-white hover:bg-gray-800 px-6 py-3 rounded-xl transition shadow-lg hover:-translate-y-1">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                class="h-6 w-auto" alt="Play Store">
                            <div class="flex flex-col text-left leading-none">
                                <span class="text-[10px] uppercase">Get it on</span>
                                <span class="text-sm font-bold">Google Play</span>
                            </div>
                        </a>

                    </div>
                </div>

                <!-- Right: Dummy Phone App Mockup -->
                <div class="lg:col-span-5 flex justify-center lg:justify-end relative">
                    <!-- Blob behind phone -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[300px] h-[500px] bg-gradient-to-br from-brand-red to-brand-yellow rounded-full blur-3xl opacity-20">
                    </div>

                    <!-- Phone Frame -->
                    <div
                        class="relative z-10 w-[300px] h-[600px] bg-gray-900 rounded-[40px] border-8 border-gray-900 shadow-2xl overflow-hidden ring-1 ring-gray-800/50 transform rotate-3 hover:rotate-0 transition duration-500">
                        <!-- Notch -->
                        <div
                            class="absolute top-0 left-1/2 transform -translate-x-1/2 w-32 h-6 bg-gray-900 rounded-b-xl z-20">
                        </div>

                        <!-- Screen Content -->
                        <div class="w-full h-full bg-gray-50 flex flex-col relative overflow-y-auto hide-scrollbar">

                            <img src="{{ asset('mykospe.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FAQ Accordion (Redesigned) -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Decorative Blob -->
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-orange-50 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob">
        </div>
        <div
            class="absolute -bottom-8 left-20 w-72 h-72 bg-red-50 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Bantuan Anggota</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Pertanyaan Umum (FAQ)</h2>
                <div class="w-24 h-1.5 bg-brand-red mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left Column: Accordion -->
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Apa syarat utama menjadi anggota KOSPE?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            Syarat utamanya sangat mudah: Merupakan Warga Negara Indonesia (WNI), memiliki KTP, mengisi
                            formulir pendaftaran resmi, dan menyetorkan simpanan pokok serta simpanan wajib pertama.
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Apakah dana simpanan dijamin aman?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            InsyaAllah amanah. Kami diawasi langsung oleh Dinas Koperasi dan Dewan Pengawas Syariah.
                            Dana
                            dikelola secara transparan di sektor riil yang minim risiko dan halal.
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Bagaimana alur pengajuan pembiayaan?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            Anggota aktif minimal 3 bulan dapat mengajukan pembiayaan dengan mengisi formulir,
                            melampirkan
                            dokumen usaha/kebutuhan, dan menunggu proses survei serta akad dari komite pembiayaan.
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Apakah bisa mendaftar secara online?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            Tentu bisa! Silakan download aplikasi KOSPE Mobile kami atau klik tombol "Daftar Anggota" di
                            website ini untuk mengisi formulir pendaftaran digital.
                        </div>
                    </div>
                </div>

                <!-- Right Column: Admin Photo -->
                <div class="relative h-full min-h-[400px] flex items-center justify-center lg:justify-end group">
                    <!-- Background Shapes -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-brand-red to-brand-orange opacity-10 rounded-[3rem] transform rotate-3 group-hover:rotate-6 transition duration-500">
                    </div>

                    <!-- Image Container -->
                    <div
                        class="relative z-10 rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white max-w-md w-full">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=800&auto=format&fit=crop"
                            alt="Customer Service Salam"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">

                        <!-- Floating Badge -->
                        <div
                            class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-sm p-4 rounded-2xl shadow-lg border-l-4 border-brand-red">
                            <p class="font-bold text-gray-800 text-lg">Assalamu'alaikum!</p>
                            <p class="text-sm text-gray-600">Admin kami siap membantu Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>