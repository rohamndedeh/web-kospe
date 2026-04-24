<?php

use Livewire\Component;
use App\Models\Blogs;

new class extends Component {
    public $blog;
    public $terkait;

    public function mount($id)
    {
        $this->blog = Blogs::where('id_post', $id)->where('is_active', 1)->firstOrFail();
        $this->terkait = Blogs::where('kategori', $this->blog->kategori)->where('is_active', 1)->where('id_post', '!=', $this->blog->id_post)->take(5)->orderBy('date', 'desc')->get();
    }

    public function render()
    {
        return $this->view([
            'blog' => $this->blog,
            'terkait' => $this->terkait
        ]);
    }
};
?>

<div>
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

                <!-- KIRI: KONTEN ARTIKEL (Col-8) -->
                <div class="lg:col-span-8 animate-fade-in-up">

                    <!-- Meta & Judul -->
                    <div class="mb-8">
                        <span
                            class="inline-block px-3 py-1 bg-orange-100 text-brand-orange text-xs font-bold rounded-md uppercase tracking-wider mb-4">Kegiatan
                            Koperasi</span>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-6">
                            {{ $blog->judul }}
                        </h1>

                        <div
                            class="flex flex-wrap items-center gap-6 text-sm text-gray-500 pb-6 border-b border-gray-100">
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?img=68"
                                    class="w-8 h-8 rounded-full border border-gray-200" alt="Author">
                                <span class="font-medium text-gray-700">Admin KOSPE</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar" class="w-4 h-4"></i> {{ $blog->date }}
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="eye" class="w-4 h-4"></i> 1,240 Dilihat
                            </div>
                        </div>
                    </div>

                    <!-- Thumbnail Utama -->
                    <div class="mb-10 rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <img src="https://kospe.id/asset/img/post/{{ $blog->img }}"
                            class="w-full h-auto max-h-[500px] object-cover" alt="RAT KOSPE 2026">
                        <p class="text-xs text-center text-gray-400 p-2 bg-gray-50 border-t border-gray-100">Suasana
                            Rapat
                            Anggota Tahunan KOSPE di Aula Utama Pesantren.</p>
                    </div>

                    <!-- Isi Artikel (Typography) -->
                    <div class="post-content text-lg">
                        <p>
                            <strong>KOTA SANTRI</strong> - Koperasi Syariah Pesantren (KOSPE) kembali sukses
                            menyelenggarakan Rapat Anggota Tahunan (RAT) Tahun Buku 2025 yang dilaksanakan pada hari
                            Sabtu,
                            24 April 2026. Acara yang digelar di Aula Utama Pesantren ini dihadiri oleh jajaran
                            Pengurus,
                            Dewan Pengawas Syariah (DPS), serta perwakilan anggota dari berbagai daerah.
                        </p>

                        <p>
                            Pelaksanaan RAT merupakan agenda wajib tahunan sebagai bentuk transparansi dan akuntabilitas
                            pengurus kepada seluruh anggota. Dalam laporannya, Ketua Pengurus KOSPE, H. Ahmad
                            Zulkarnain,
                            memaparkan pencapaian luar biasa yang berhasil diraih koperasi di tengah tantangan ekonomi
                            global.
                        </p>

                        <blockquote>
                            "Alhamdulillah, berkat partisipasi aktif seluruh anggota dalam menabung dan bertransaksi,
                            tahun
                            ini kita mencatatkan pertumbuhan aset sebesar 25% dibandingkan tahun sebelumnya. Ini adalah
                            bukti nyata bahwa ekonomi syariah berbasis keumatan memiliki daya tahan yang luar biasa,"
                            ujar
                            H. Ahmad Zulkarnain.
                        </blockquote>

                        <h3>Peningkatan Sisa Hasil Usaha (SHU)</h3>
                        <p>
                            Kabar gembira yang paling dinantikan oleh para anggota dalam RAT kali ini adalah persetujuan
                            pembagian Sisa Hasil Usaha (SHU). Mengingat keuntungan bersih koperasi yang meningkat
                            signifikan, rapat paripurna menyetujui pembagian SHU yang lebih besar dibandingkan tahun
                            buku
                            sebelumnya.
                        </p>

                        <p>Pembagian SHU ini didasarkan pada dua komponen aktivitas utama anggota, yaitu:</p>
                        <ul>
                            <li><strong>Jasa Simpanan:</strong> Diberikan kepada anggota yang aktif menyetorkan simpanan
                                wajib dan saldo rata-rata simpanan sukarela sepanjang tahun.</li>
                            <li><strong>Jasa Pinjaman/Pembiayaan:</strong> Diberikan kepada anggota yang telah
                                memanfaatkan
                                fasilitas pembiayaan (Modal Usaha, Renovasi, dll) dan melakukan pembayaran angsuran
                                dengan
                                lancar.</li>
                        </ul>

                        <!-- Galeri Kegiatan (Swiper Slider di dalam konten) -->
                        <div class="my-12">
                            <h4 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                                <i data-lucide="image" class="w-6 h-6 text-brand-red"></i> Galeri Kegiatan RAT 2026
                            </h4>
                            <div class="relative rounded-2xl overflow-hidden shadow-md">
                                <div class="swiper postGallerySwiper h-[300px] md:h-[400px]">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="https://images.unsplash.com/photo-1558403194-611308249627?q=80&w=1000&auto=format&fit=crop"
                                                class="w-full h-full object-cover" alt="Registrasi Anggota">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://images.unsplash.com/photo-1515162816999-a0c47dc192f7?q=80&w=1000&auto=format&fit=crop"
                                                class="w-full h-full object-cover" alt="Sambutan Ketua">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?q=80&w=1000&auto=format&fit=crop"
                                                class="w-full h-full object-cover" alt="Tanya Jawab">
                                        </div>
                                    </div>
                                    <!-- Add Pagination & Nav -->
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next text-white drop-shadow-md"></div>
                                    <div class="swiper-button-prev text-white drop-shadow-md"></div>
                                </div>
                            </div>
                        </div>

                        <h3>Rencana Strategis 2026-2027</h3>
                        <p>
                            Selain pembagian SHU, RAT juga menetapkan Rencana Kerja dan Rencana Anggaran Pendapatan
                            Belanja
                            Koperasi (RK-RAPBK) untuk periode mendatang. Fokus utama KOSPE ke depan adalah akselerasi
                            digitalisasi layanan melalui pengembangan lanjutan aplikasi <strong>MyKOSPE</strong>.
                        </p>
                        <p>
                            "Kami menargetkan di tahun ini, 100% anggota sudah bisa melakukan pengajuan pembiayaan dan
                            pencairan secara digital melalui smartphone. Ini untuk memudahkan akses bagi anggota yang
                            berada
                            jauh dari jangkauan kantor fisik," tambah sekretaris pengurus.
                        </p>
                        <p>
                            Acara RAT ditutup dengan doa bersama yang dipimpin oleh Dewan Pengawas Syariah (DPS) dan
                            dilanjutkan dengan ramah tamah serta pembagian *doorprize* menarik bagi peserta yang hadir.
                            Semoga dengan suksesnya RAT ini, KOSPE semakin amanah dan berkah dalam mengelola ekonomi
                            keumatan.
                        </p>
                    </div>

                    <!-- Tags & Share -->
                    <div
                        class="mt-12 pt-8 border-t border-gray-200 flex flex-col md:flex-row justify-between items-start md:items-center gap-6">

                        <div class="flex flex-wrap items-center gap-2">
                            <span class="font-bold text-gray-700 text-sm">Tags:</span>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white rounded-md text-xs font-medium text-gray-600 transition">RAT
                                2026</a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white rounded-md text-xs font-medium text-gray-600 transition">SHU
                                Koperasi</a>
                            <a href="#"
                                class="px-3 py-1 bg-gray-100 hover:bg-brand-red hover:text-white rounded-md text-xs font-medium text-gray-600 transition">Koperasi
                                Syariah</a>
                        </div>

                        <div class="flex items-center gap-3">
                            <span class="font-bold text-gray-700 text-sm">Bagikan:</span>
                            <button
                                class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center hover:bg-blue-700 transition shadow"><i
                                    data-lucide="facebook" class="w-4 h-4"></i></button>
                            <button
                                class="w-9 h-9 rounded-full bg-sky-500 text-white flex items-center justify-center hover:bg-sky-600 transition shadow"><i
                                    data-lucide="twitter" class="w-4 h-4"></i></button>
                            <button
                                class="w-9 h-9 rounded-full bg-green-500 text-white flex items-center justify-center hover:bg-green-600 transition shadow"><i
                                    data-lucide="message-circle" class="w-4 h-4"></i></button>
                            <button
                                class="w-9 h-9 rounded-full bg-gray-200 text-gray-600 flex items-center justify-center hover:bg-gray-300 transition shadow"
                                onclick="alert('Link disalin!')"><i data-lucide="link" class="w-4 h-4"></i></button>
                        </div>
                    </div>

                </div> <!-- End Col 8 -->

                <!-- KANAN: SIDEBAR (Col-4) -->
                <div class="lg:col-span-4 space-y-10">

                    <!-- Search Widget -->
                    <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
                        <div class="relative">
                            <input type="text" placeholder="Cari berita..."
                                class="w-full pl-10 pr-4 py-3 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-red/20 focus:border-brand-red transition">
                            <i data-lucide="search"
                                class="w-5 h-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2"></i>
                        </div>
                    </div>

                    <!-- BANNER PROMO 1 -->
                    <div class="relative rounded-2xl overflow-hidden shadow-lg group cursor-pointer h-80">
                        <img src="https://storage.googleapis.com/sahabat-pegadaian-asset-prd/20250514-072947_rangkaian-ibadah-hajiwebp.webp"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700"
                            alt="Haji Plus">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/70 to-transparent">
                        </div>
                        <div class="absolute inset-0 p-6 flex flex-col justify-end">
                            <span
                                class="bg-brand-yellow text-gray-900 text-xs font-bold px-2 py-1 rounded w-fit mb-2">PROMO</span>
                            <h4 class="text-white font-bold text-xl mb-2 leading-snug">Wujudkan Niat Haji Khusus Tahun
                                Ini
                            </h4>
                            <p class="text-gray-300 text-sm mb-4">DP Terjangkau, Masa Tunggu Hanya 8-10 Tahun.</p>
                            <a href="pembiayaan-haji.html"
                                class="inline-block bg-brand-red text-white text-sm font-bold py-2.5 px-4 rounded-lg text-center hover:bg-red-700 transition">Lihat
                                Program</a>
                        </div>
                    </div>

                    <!-- RECENT POSTS WIDGET -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-gray-800 mb-5 flex items-center gap-2 text-lg">
                            <div class="w-1 h-5 bg-brand-orange rounded-full"></div> Artikel Terkait
                        </h4>
                        <div class="space-y-5">
                            <!-- Post 1 -->
                            @foreach ($terkait as $key)
                                <a href="{{ route('blogs.detail', $key->id_post) }}" wire:navigate class="flex gap-4 group">
                                    <img src="https://kospe.id/asset/img/post/{{ $key->img }}"
                                        class="w-20 h-20 object-cover rounded-xl shadow-sm group-hover:opacity-80 transition"
                                        alt="Thumb">
                                    <div class="flex-1">
                                        <h5
                                            class="text-sm font-bold text-gray-800 leading-snug group-hover:text-brand-red transition line-clamp-2 mb-1">
                                            {{ $key->judul }}
                                        </h5>
                                        <span class="text-[10px] text-gray-400 flex items-center gap-1"><i
                                                data-lucide="clock" class="w-3 h-3"></i>
                                            {{ $key->date }}</span>
                                    </div>
                                </a>
                            @endforeach
                            <!-- Post 2 -->

                        </div>
                    </div>

                    <!-- BANNER PROMO 2 -->
                    <div class="relative rounded-2xl overflow-hidden shadow-lg group cursor-pointer h-80">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?q=80&w=400&auto=format&fit=crop"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition duration-700"
                            alt="Simpanan Pelajar">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-brand-orange via-brand-orange/60 to-transparent mix-blend-multiply">
                        </div>
                        <div class="absolute inset-0 p-6 flex flex-col justify-end text-white text-center">
                            <i data-lucide="graduation-cap" class="w-12 h-12 mx-auto mb-3 opacity-90"></i>
                            <h4 class="font-bold text-xl mb-2">Simpanan Pelajar</h4>
                            <p class="text-white/80 text-sm mb-4">Siapkan pendidikan anak sejak dini tanpa biaya admin.
                            </p>
                            <a href="#"
                                class="inline-block bg-white text-brand-orange text-sm font-bold py-2.5 px-4 rounded-lg hover:bg-gray-100 transition">Buka
                                Rekening</a>
                        </div>
                    </div>

                </div> <!-- End Col 4 -->

            </div>
        </div>
    </section>
    <style>
        .post-content p {
            margin-bottom: 1.5rem;
            line-height: 1.8;
            color: #4b5563;
        }

        .post-content h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .post-content ul {
            list-style-type: disc;
            margin-left: 1.5rem;
            margin-bottom: 1.5rem;
            color: #4b5563;
            line-height: 1.8;
        }

        .post-content blockquote {
            border-left: 4px solid #E56325;
            padding-left: 1rem;
            font-style: italic;
            color: #6b7280;
            background: #fffaf5;
            padding: 1.5rem;
            border-radius: 0.5rem;
            margin-bottom: 1.5rem;
        }
    </style>
    <script>
        new Swiper(".postGallerySwiper", {
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</div>