<?php

use Livewire\Component;
use App\Models\Blogs;
use App\Models\Agen;

new class extends Component {
    public $mitra;
    public $marketing;

    public function mount($nama = null)
    {
        $agen = Agen::where('kode', $nama)->first();
        $this->marketing = $agen ? $agen->id_hni : 115;
    }

    public function render()
    {
        $blogs = Blogs::where('is_active', 1)->where('kategori', 1)->take(3)->orderBy('date', 'desc')->get();
        $this->mitra = [
            ['name' => 'Bank Syariah', 'logo' => 'https://yt3.googleusercontent.com/ytc/AIdro_k-xALPS3HzL1-WOw6Rt0YwGfLXe94oXm8fsm188tACmEg=s900-c-k-c0x00ffffff-no-rj'],
            ['name' => 'Bank Permata', 'logo' => 'https://banksyariahriyal.com/storage/partners/hYzz0XO3JUYDCvemHyuLz13zsmddv0ZLsauTF3Pj.png'],
            ['name' => 'Naffar Tour', 'logo' => 'https://bb71d2eac085c69b0.nos.wjv-1.neo.id/1634910180-748101/17320037432695-DSFKXJJucx.png'],
            ['name' => 'Pondok Sedekah', 'logo' => 'https://pondoksedekah.id/wp-content/uploads/2024/10/cropped-Logo-1.png'],
            ['name' => 'Rumah Quran', 'logo' => '/logo/rq.png'],
            ['name' => 'Business Center Beaksi 4 HNI', 'logo' => '/logo/bc4.png'],
            ['name' => 'Bank Mega Syariah', 'logo' => 'https://image.idntimes.com/post/20211101/logo-bank-mega-png-3-e6ef4eec77222513124664aac2c4feaf.png'],

        ];
        return $this->view([
            'blogs' => $blogs,
            'mitra' => $this->mitra,
            'artikel' => Blogs::where('is_active', 1)->where('kategori', 2)->take(3)->orderBy('date', 'desc')->get(),
            'marketing' => $this->marketing,
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
                            Daftar Anggota <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send/?phone={{ session('hp') ?? '628118807177' }}&text=saya+ingin+konsultasi+lebih+lanjut+tentang+KOSPE&type=phone_number&app_absent=0"
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
                            Anggota </p>
                    </div>
                </div>

                <!-- Right Swiper -->
                <div
                    class="relative rounded-2xl overflow-hidden shadow-2xl transform rotate-1 hover:rotate-0 transition duration-500">
                    <div class="swiper heroSwiper h-[400px] md:h-[500px]">
                        <div class="swiper-wrapper">
                            <a href="{{ route('daftar-anggota') }}" class="swiper-slide">
                                <img src="/3.jpg" class="w-full h-full object-cover" alt="Produk 3">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">
                                </div>
                            </a>
                            <a href="{{ route('sirohplus') }}" class="swiper-slide">
                                <img src="/sirohplus.jpg" class="w-full h-full object-cover" alt="Produk 5">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">
                                </div>
                            </a>
                            <a href="{{ route('sijiku') }}" class="swiper-slide">
                                <img src="/sijiku.jpg" class="w-full h-full object-cover" alt="Produk 5">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">
                                </div>
                            </a>
                            <a href="{{ route('simpanan-berjangka') }}" class="swiper-slide">
                                <img src="/2.jpg" class="w-full h-full object-cover" alt="Produk 2">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">
                                </div>
                            </a>
                            <a href="{{ route('sidikplus') }}" class="swiper-slide">
                                <img src="/sidikplus.jpg" class="w-full h-full object-cover" alt="Produk 5">
                                <div
                                    class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black to-transparent p-6">
                                </div>
                            </a>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Section 6 Card Scrollable -->
    <section id="produk" class="py-16 bg-white" wire:key="produk">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2">Produk Unggulan</h2>
                <div class="w-20 h-1 bg-brand-red mx-auto rounded"></div>
            </div>

            <!-- Horizontal Scroll Container -->
            <div class="flex overflow-x-auto pb-8 hide-scrollbar snap-x snap-mandatory gap-6 px-2">
                <!-- Card 1 -->
                <a href="/daftar-anggota" wire:navigate
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-red transition duration-500">
                        <img src="https://blog.cakap.com/wp-content/uploads/2021/07/cara-membuat-kuesioner-di-google-form.jpg"
                            alt="" srcset="" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class=" text-xl font-bold mb-2 group-hover:text-brand-red">Jadi Anggota</h3>
                        <p class="text-sm text-gray-500 mb-4">Langkah awal untuk merasakan manfaat dan keberkahan
                            bersama KOSPE.
                        </p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </a>
                <a href="/simpanan-program" wire:navigate
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-red transition duration-500">
                        <img src="https://linebank.co.id/blog/wp-content/uploads/2022/08/tabung-edited-jpeg-1200x726.webp"
                            alt="" srcset="" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class=" text-xl font-bold mb-2 group-hover:text-brand-red">Buka Simpanan</h3>
                        <p class="text-sm text-gray-500 mb-4">Simpan dana Anda dengan akad Wadiah atau Mudharabah yang
                            aman.
                        </p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </a>

                <a href="/haji-khusus" wire:navigate
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-yellow transition duration-500">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXjTVw6zQ0AwCTByOx3tGeOl6GQb4obDktcw&s"
                            alt="" class="w-full h-full object-cover" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class=" text-xl font-bold mb-2 group-hover:text-brand-yellow">Simpanan Haji Khusus</h3>
                        <p class="text-sm text-gray-500 mb-4">Perencanaan ibadah haji yang resmi dan amanah</p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </a>

                <!-- Card 4 -->
                <a href="/siwak" wire:navigate
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-red transition duration-500">
                        <img src="https://assets.banksaqu.co.id/Tabungan_adalah_a12ca011c3/Tabungan_adalah_a12ca011c3.jpg"
                            alt="" class="w-full h-full object-cover" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-red">Simpanan Wajib Khusus</h3>
                        <p class="text-sm text-gray-500 mb-4">Kewajiban anggota dengan manfaat jangka panjang.</p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </a>

                <!-- Card 5 -->
                <a href="/simpanan-berjangka" wire:navigate
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-orange transition duration-500">
                        <img src="https://hokibank.co.id/wp-content/uploads/2025/08/tabungan-vs-investasi.jpg" alt=""
                            class="w-full h-full object-cover" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-orange">Simpanan Produktif</h3>
                        <p class="text-sm text-gray-500 mb-4">Dapatkan bagi hasil yang kompetitif dengan prinsip
                            Mudharabah.
                        </p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </a>

                <!-- Card 6 -->
                <a href="/simprotama" wire:navigate
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-yellow transition duration-500">
                        <img src="/simprotama.png" alt="" class="w-full h-full object-cover" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-yellow">SimproTama</h3>
                        <p class="text-sm text-gray-500 mb-4">Simpanan Program Terencana Utama dengan bonus spesial.</p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </a>

                <a href="/form-pembiayaan" wire:navigate
                    class="min-w-[85%] md:min-w-[350px] snap-center bg-white rounded-xl shadow-lg border border-gray-100 overflow-hidden group cursor-pointer card-hover transition hover:shadow-2xl">
                    <div
                        class="h-40 bg-gray-100 flex items-center justify-center group-hover:bg-brand-orange transition duration-500">
                        <img src="https://accurate.id/wp-content/uploads/2023/09/accurate.id-Peran-Penting-Lembaga-Pembiayaan.webp"
                            alt="" class="w-full h-full object-cover" srcset="">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 group-hover:text-brand-orange">Ajukan Pembiayaan</h3>
                        <p class="text-sm text-gray-500 mb-4">Solusi modal usaha dengan prinsip bagi hasil yang adil.
                        </p>
                        <span class="text-brand-orange font-semibold text-sm flex items-center gap-1">Selengkapnya <i
                                data-lucide="arrow-right" class="w-4 h-4"></i></span>
                    </div>
                </a>

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
            <a href="{{ route('daftar-anggota') }}" wire:navigate
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
                    class="tab-btn bg-brand-red text-white border-brand-red px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full hover:bg-brand-red font-semibold  transition transform hover:scale-105"
                    data-target="#tab-agenda">Agenda</button>
                <button
                    class="tab-btn bg-white text-red-600 border border-brand-red px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold hover:bg-brand-red transition transform hover:scale-105"
                    data-target="#tab-artikel">Artikel</button>
                <button
                    class="tab-btn bg-white text-red-600 border border-brand-red px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold hover:bg-brand-red transition transform hover:scale-105"
                    data-target="#tab-video">Video</button>

                <button
                    class="tab-btn bg-white text-red-600 border border-brand-red px-6 py-2 md:px-8 md:py-3 text-sm md:text-base rounded-full font-semibold hover:bg-brand-red transition transform hover:scale-105"
                    data-target="#tab-mitra">Kemitraan Lembaga</button>
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
                                    <img src="https://auth.kospe.id/asset/img/post/{{ $blog->img }}"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                                        alt="RAT">
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-2 text-brand-red text-sm mb-3">
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
                        <h3 class="text-2xl font-bold text-gray-800 border-l-4 border-brand-orange pl-3">Artikel Edukasi
                            dan Informasi</h3>
                        <a href="#" class="text-brand-orange font-medium text-sm hover:underline">Baca Selengkapnya
                            &rarr;</a>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Articles code remains same -->
                        @foreach ($artikel as $a)
                            <a wire:navigate href="{{ route('blogs.detail', $a->id_post) }}"
                                class="flex flex-col bg-white rounded-xl shadow hover:shadow-lg transition border border-gray-100 h-full">
                                <img src="https://auth.kospe.id/asset/img/post/{{ $a->img }}"
                                    class="h-64 w-full object-cover rounded-t-xl" alt="Artikel 1">
                                <div class="p-6 flex-1 flex flex-col">
                                    <span
                                        class="text-xs font-semibold text-brand-red bg-red-50 px-2 py-1 rounded w-fit mb-3">Fiqih
                                        Muamalah</span>
                                    <h4 class="text-lg font-bold mb-3 hover:text-brand-red cursor-pointer">{{ $a->judul }}
                                    </h4>
                                    <p class="text-gray-600 text-sm mb-4 flex-1">
                                        {{ substr(html_entity_decode($a->isi), 0, 100) }}...
                                    </p>
                                    <div class="pt-4 border-t flex items-center justify-between text-xs text-gray-500">
                                        <span>Admin KOSPE</span>
                                        <span>{{ $a->date }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach

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
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/sC2k-mCX6xo"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    title="Kemudahan Dalam Genggaman - MyKoSPE" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Testimoni Produk
                                Simpanan Produktif
                            </h4>
                            <p class="text-sm text-gray-500">PASSIVE INCOME HALAL BERKAH
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/CYKjWb6ST40"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    title="Kemudahan Dalam Genggaman - MyKoSPE" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Apa itu MyKoSPE ?
                            </h4>
                            <p class="text-sm text-gray-500">MyKoSPE adalah platform digital yang memudahkan anggota
                                koperasi syariah dalam
                                mengelola tabungan dan investasi mereka.</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/zFWLhd58_dE"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    title="Kemudahan Dalam Genggaman - MyKoSPE" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Tutorial Aktivasi
                                MyKoSPE</h4>
                            <p class="text-sm text-gray-500">Langkah-langkah mudah untuk mengaktifkan akun MyKoSPE Anda.
                            </p>
                        </div>

                    </div>
                    <div class="grid md:grid-cols-3 gap-6 mt-10">
                        <!-- Videos code remains same -->
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/32TetPTN-Mg"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    title="Kemudahan Dalam Genggaman - MyKoSPE" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Testimoni Anggota
                                KoSP</h4>
                            <p class="text-sm text-gray-500">Temukan pengalaman nyata dari anggota KoSPE</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/CSDsGrxvF0o"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    title="Kemudahan Dalam Genggaman - MyKoSPE" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Perjalanan Sukses
                                KoSPE 2025</h4>
                            <p class="text-sm text-gray-500">Ikuti perjalanan sukses anggota KoSPE dalam mencapai tujuan
                                finansial mereka.</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/hzGjpB1aiOA"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    title="Kemudahan Dalam Genggaman - MyKoSPE" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Sukses berkah
                                bersama Simpanan Produktif</h4>
                            <p class="text-sm text-gray-500">Temukan bagaimana simpanan produktif membantu anggota KoSPE
                                mencapai kesuksesan finansial mereka.</p>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-6 mt-10">
                        <!-- Videos code remains same -->
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/yab0G-Q0p6Y"
                                    title="Koperasi Syariah di Bekasi" frameborder="0"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Koperasi Terbaik di
                                Bekasi</h4>
                            <p class="text-sm text-gray-500">Yuk silaturahmi ke Kantor Pusat KoSPE di Bekasi</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/XOSBzDog73s"
                                    title="KoSPE berbagai Takjil Ramadhan 1447 H #shorts" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">KoSPE berbagai
                                Takjil Ramadhan 1447</h4>
                            <p class="text-sm text-gray-500">Ramadhan bulan berbagi.</p>
                        </div>
                        <div class="group cursor-pointer">
                            <div
                                class="bg-gray-900 rounded-xl h-64 flex items-center justify-center text-white relative overflow-hidden shadow-lg">
                                <iframe width="100%" height="751" src="https://www.youtube.com/embed/hzGjpB1aiOA"
                                    class="absolute inset-0 w-full h-full object-cover"
                                    title="Kemudahan Dalam Genggaman - MyKoSPE" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                            </div>
                            <h4 class="mt-3 font-bold text-lg group-hover:text-brand-red transition">Sukses berkah
                                bersama Simpanan Produktif</h4>
                            <p class="text-sm text-gray-500">Temukan bagaimana simpanan produktif membantu anggota KoSPE
                                mencapai kesuksesan finansial mereka.</p>
                        </div>
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
                            @foreach ($mitra as $item)
                                <div class="swiper-slide">
                                    <div
                                        class="bg-white   h-24 flex items-center justify-center p-4 grayscale hover:grayscale-0 transition">
                                        <img src="{{ $item['logo'] }}" class="w-full p-6" alt="{{ $item['name'] }}">

                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- Optional Navigation -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
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
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">Cek Saldo dan Mutasi
                                Realtime</h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Transparansi simpanan dan
                                pembiayaan kapan saja.
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
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">Beli Pulsa & Token
                                Listrik</h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Beli pulsa dan token listrik
                                dengan mudah dan cepat.</p>
                        </div>

                        <!-- Feature 3 -->
                        <div
                            class="feature-item feature-hidden bg-white p-3 md:p-5 rounded-xl md:rounded-2xl shadow-md border border-gray-100 hover:shadow-xl transition group">
                            <div
                                class="bg-brand-yellow/10 w-10 h-10 md:w-12 md:h-12 rounded-lg md:rounded-xl flex items-center justify-center mb-3 md:mb-4 group-hover:bg-brand-yellow transition duration-300">
                                <i data-lucide="refresh-cw"
                                    class="w-5 h-5 md:w-6 md:h-6 text-brand-yellow group-hover:text-white transition"></i>
                            </div>
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">Transfer ke Bank Lain
                            </h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Kirim dana ke bank lain tanpa
                                ribet
                                dan aman
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
                            <h4 class="font-bold text-sm md:text-lg text-gray-800 mb-1 md:mb-2">Jadwal Shalat & Kiblat
                            </h4>
                            <p class="text-xs md:text-sm text-gray-500 leading-tight">Lihat jadwal shalat dan arah
                                kiblat di lokasi Anda.</p>
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
                            <span class="text-lg">Apa visi Besar KoSPE??</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            Menjadi KOPERASI SYARIAH yang TERPERCAYA dan TERDEPAN dalam MEMBANGUN dan MENGEMBANGKAN
                            PEREKONOMIAN UMAT, serta
                            mewujudkan 1000 pondok pesantren penghafal Alquran
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Apakah KoSPE sudah terdaftar di OJK?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            Alhamdulillah KoSPE sudah terdaftar di Kementrian Koperasi dan UKM RI Legalitas dan secara
                            legal Koperasi ada dibawah
                            Kementrian Koperasi RI tidak dibawah OJK
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Apa keuntungan menjadi Anggota KoSPE?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            1. Membangkitan perekonomian umat islam <br>
                            2. Gratis biaya admin bulanan <br>
                            3. Ikut Serta berbagai produk simpanan dan pembiayaan yang ada di KoSPE <br>
                            4. Mendaptkan bagi hasil SHU pertahun setelah RAT (Rapat anggota Tahunan) <br>
                            5. Membantu sesama anggota kospe yang lain <br>
                            6. Mendapatkan info-info dan pelatihan bisnis <br>
                            7. Kemudahan dan transparansi dalam transaksi karena sudah system online, bisa di akses
                            kapan pun dan dimana pun melalui
                            aplikasi MyKoSPE <br>
                            8. Akad sesuai syariah islam, bebas riba karena diawasi oleh Dewaan Syariah Nasional (DSN)
                            bersertifikasi <br>
                            9. Mendapatkan bagi hasil untuk beberapa produk simpanan
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Bagaimana cara mendaftar menjadi anggota KoSPE?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            Cukup siapkan KTP, mengisi formulir pendaftaran menjadi anggota KoSPE dan menyetorkan
                            simpanan pokok Rp 80.000 + simpanan wajib 1 bulan Rp 59.000 lalu kirim bukti transfer ke CRM
                            KOSPE 08118807177
                        </div>
                    </div>
                    <div
                        class="bg-white border border-gray-100 rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 overflow-hidden group">
                        <button
                            class="faq-btn w-full text-left px-6 py-5 bg-white flex justify-between items-center font-bold text-gray-800 transition group-hover:text-brand-red">
                            <span class="text-lg">Berapa bagi hasil yang di berikan KoSPE?</span>
                            <div
                                class="bg-gray-100 rounded-full p-2 group-hover:bg-brand-red group-hover:text-white transition">
                                <i data-lucide="chevron-down"
                                    class="w-5 h-5 transform transition-transform duration-300"></i>
                            </div>
                        </button>
                        <div
                            class="faq-content hidden px-6 pb-6 pt-2 text-gray-600 bg-white leading-relaxed border-t border-gray-50">
                            Bagi hasil disesuikan dengan program simpanan yang dipilih oleh anggdota dan insyalloh lebih
                            menarik dari Deposito Bank
                            Konvensional
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
                        <img src="/cs.JPG" alt="Customer Service Salam"
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