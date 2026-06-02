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
            'wa_crm' => '628118807177',
        ]);
    }
};
?>

<div>
    <header class="relative pt-20 pb-32 overflow-hidden bg-brand-darkred text-white">
        <div class="absolute inset-0">
            <!-- Background abstract red -->
            <div
                class="absolute top-0 right-0 w-[500px] h-[500px] bg-yellow-500/20 rounded-full blur-[100px] mix-blend-screen">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-red/80 rounded-full blur-[100px] mix-blend-multiply">
            </div>
            <!-- Star/Sparkle decorations -->
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-yellow-300 rounded-full animate-pulse-slow"></div>
            <div class="absolute top-1/3 right-1/3 w-3 h-3 bg-yellow-200 rounded-full animate-pulse-slow"
                style="animation-delay: 1s;"></div>
            <div class="absolute bottom-1/4 right-1/4 w-2 h-2 bg-white rounded-full animate-pulse-slow"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10 flex flex-col lg:flex-row items-center gap-12">
            <!-- Left Text Content -->
            <div class="lg:w-3/5 space-y-6 animate-fade-in-up">
                <span
                    class="inline-flex items-center gap-2 py-1.5 px-5 rounded-full bg-gradient-to-r from-yellow-500 to-yellow-300 text-brand-darkred font-bold text-xs uppercase tracking-widest shadow-lg">
                    <i data-lucide="crown" class="w-4 h-4"></i> Program Eksklusif
                </span>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight text-white drop-shadow-2xl">
                    SIMPROTAMA
                </h1>
                <h2
                    class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gold-gradient drop-shadow-lg leading-tight uppercase">
                    Buka Rekeningnya <br>Ambil Hadiahnya!
                </h2>

                <p class="text-lg text-red-100 max-w-xl leading-relaxed mt-4 font-medium">
                    Dapatkan hadiah langsung <strong class="text-yellow-300">tanpa diundi</strong> untuk setiap
                    pembukaan
                    rekening Simpanan Produktif Utama (SIMPROTAMA) KOSPE.
                </p>

                <div class="flex flex-wrap gap-4 pt-6">
                    <div
                        class="bg-black/30 backdrop-blur-md border border-white/10 rounded-2xl p-5 min-w-[220px] shadow-inner">
                        <p class="text-xs text-red-200 uppercase tracking-wider mb-1 font-semibold">Setoran Mulai Dari
                        </p>
                        <p class="text-4xl font-black text-white drop-shadow">Rp 100 Jt</p>
                    </div>
                    <div
                        class="bg-gradient-to-br from-yellow-400 via-yellow-500 to-yellow-600 rounded-2xl p-5 min-w-[220px] shadow-xl transform hover:-translate-y-2 transition duration-300">
                        <p class="text-xs text-yellow-900 uppercase tracking-wider mb-1 font-bold">Pilihan Hadiah
                            Menarik
                        </p>
                        <p class="text-xl font-black text-gray-900 leading-tight">Mobil, Motor, <br>Haji / Umroh</p>
                    </div>
                </div>

                <div class="pt-6">
                    <a href="https://api.whatsapp.com/send/?phone=628118807177&text=saya+mau+daftar+simprotama"
                        class="inline-flex items-center gap-2 px-8 py-4 bg-white text-brand-red rounded-full font-bold text-lg hover:bg-gray-100 transition shadow-[0_0_20px_rgba(255,255,255,0.3)] transform hover:scale-105">
                        Daftar Sekarang Juga <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>

            <!-- Right Image Banner Representation -->
            <div class="animate-float hidden md:block">
                <div class="relative">
                    <!-- Glow behind image -->
                    <div class="absolute inset-0 bg-yellow-400 rounded-3xl blur-2xl opacity-30"></div>
                    <img src="/4.jpg"
                        class="relative z-10 w-full rounded-3xl shadow-[0_30px_60px_rgba(0,0,0,0.8)] border-4 border-yellow-400/80"
                        alt="Banner SIMPROTAMA">
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Keunggulan SIMPROTAMA -->
    <section class="py-24 bg-gray-50 relative border-b border-gray-200">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern-red -z-10"></div>
        <div class="container mx-auto px-4 ">

            <div class="text-center mb-16">
                <span class="text-brand-red font-bold uppercase tracking-wider text-sm">Benefit Spesial</span>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mt-2 mb-6">Keunggulan Eksklusif</h2>
                <div class="w-24 h-1.5 bg-brand-yellow mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Point 1 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group border-t-4 border-t-brand-red">
                    <div
                        class="w-16 h-16 bg-red-50 text-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-red group-hover:text-white transition">
                        <i data-lucide="crown" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Setoran Utama</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Program premium untuk nilai investasi yang lebih besar, dengan setoran mulai dari <strong>Rp 100
                            Juta</strong>.
                    </p>
                </div>

                <!-- Point 2 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group border-t-4 border-t-brand-yellow">
                    <div
                        class="w-16 h-16 bg-yellow-50 text-brand-yellow rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-yellow group-hover:text-white transition">
                        <i data-lucide="gift" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bebas Pilih Hadiah*</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Dapatkan hadiah langsung di awal <strong>tanpa diundi</strong>. Pilihan hadiah disesuaikan
                        dengan
                        nominal penempatan Anda.
                    </p>
                </div>

                <!-- Point 3 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group border-t-4 border-t-blue-600">
                    <div
                        class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-blue-600 group-hover:text-white transition">
                        <i data-lucide="calendar-clock" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Jangka Waktu</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Dana dikunci (lock) dengan jangka waktu <strong>minimal 12 bulan</strong> untuk mendukung
                        pembiayaan
                        proyek produktif KOSPE.
                    </p>
                </div>

                <!-- Point 4 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-md border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group border-t-4 border-t-green-500">
                    <div
                        class="w-16 h-16 bg-green-50 text-green-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-green-500 group-hover:text-white transition">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Akad Sesuai Syariah</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Transaksi dijamin amanah dan menggunakan akad syariah yang telah disahkan oleh Dewan Pengawas
                        Syariah.
                    </p>
                </div>

                <!-- Point 5 -->
                <div
                    class="bg-white p-8 col-span-2 rounded-2xl shadow-md border border-gray-100 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group border-t-4 border-t-gray-500">
                    <div
                        class="w-16 h-16 bg-gray-100 text-gray-500 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-gray-600 group-hover:text-white transition">
                        <i data-lucide="ban" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Gratis Biaya Admin</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tidak ada potongan biaya administrasi bulanan. Nilai simpanan pokok Anda tetap utuh hingga akhir
                        periode.
                    </p>
                </div>
            </div>

            <p class="text-center text-sm text-gray-400 mt-10 italic">*Syarat dan ketentuan berlaku. Skema hadiah
                mengacu
                pada tabel penempatan resmi KOSPE.</p>
        </div>
    </section>

    <!-- 3. Katalog Hadiah -->
    <section class="py-24 bg-white relative">
        <div class="container mx-auto px-4 ">
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 py-1 px-4 rounded-full bg-yellow-100 text-yellow-700 font-bold text-xs uppercase tracking-widest mb-4">
                    <i data-lucide="award" class="w-4 h-4"></i> Tanpa Diundi
                </span>
                <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">Pilihan Hadiah SIMPROTAMA</h2>
                <div class="w-24 h-1.5 bg-brand-red mx-auto rounded-full mb-6"></div>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Sesuaikan nominal penempatan dana Anda dan bawa
                    pulang
                    hadiah eksklusif impian Anda seketika.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Hadiah 1: Mobil -->
                <div
                    class="bg-gray-50 rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div
                        class="h-48 overflow-hidden relative bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center p-6">
                        <img src="https://images.unsplash.com/photo-1550355291-bbee04a92027?q=80&w=400&auto=format&fit=crop"
                            class="w-full h-full object-cover mix-blend-multiply group-hover:scale-110 transition duration-500 rounded-xl"
                            alt="Mobil">
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur text-gray-800 font-bold text-xs px-3 py-1 rounded-full shadow-sm">
                            Premium</div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Mobil Baru</h3>
                        <p class="text-sm text-gray-500">Pilihan tipe mobil keluarga (MPV) atau City Car keluaran
                            terbaru.
                        </p>
                    </div>
                </div>

                <!-- Hadiah 2: Paket Umroh -->
                <div
                    class="bg-gray-50 rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div
                        class="h-48 overflow-hidden relative bg-gradient-to-br from-yellow-100 to-orange-100 flex items-center justify-center p-6">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHHCiJzdmDTwrwaEC8MXkT7JE47h7mdbijhw&s"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500 rounded-xl"
                            alt="Umroh">
                        <div
                            class="absolute top-4 right-4 bg-brand-yellow text-gray-900 font-bold text-xs px-3 py-1 rounded-full shadow-sm">
                            Spesial</div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Paket Umroh</h3>
                        <p class="text-sm text-gray-500">Keberangkatan umroh reguler VIP plus akomodasi hotel bintang 5.
                        </p>
                    </div>
                </div>

                <!-- Hadiah 3: Motor -->
                <div
                    class="bg-gray-50 rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div
                        class="h-48 overflow-hidden relative bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center p-6">
                        <img src="https://images.unsplash.com/photo-1558981403-c5f9899a28bc?q=80&w=400&auto=format&fit=crop"
                            class="w-full h-full object-cover mix-blend-multiply group-hover:scale-110 transition duration-500 rounded-xl"
                            alt="Motor">
                        <div
                            class="absolute top-4 right-4 bg-brand-red text-white font-bold text-xs px-3 py-1 rounded-full shadow-sm">
                            Favorit</div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Sepeda Motor</h3>
                        <p class="text-sm text-gray-500">Berbagai pilihan motor matic, sport, hingga motor listrik
                            modern.
                        </p>
                    </div>
                </div>

                <!-- Hadiah 4: Logam Mulia -->
                <div
                    class="bg-gray-50 rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 group">
                    <div
                        class="h-48 overflow-hidden relative bg-gradient-to-br from-yellow-200 to-yellow-400 flex items-center justify-center p-6">
                        <img src="https://images.unsplash.com/photo-1610375461246-83df859d849d?q=80&w=400&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500 rounded-xl"
                            alt="Emas">
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur text-brand-orange font-bold text-xs px-3 py-1 rounded-full shadow-sm">
                            Fleksibel</div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Logam Mulia</h3>
                        <p class="text-sm text-gray-500">Logam mulia bersertifikat resmi ANTAM untuk investasi anti
                            inflasi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="#kontak" class="inline-flex items-center text-brand-red font-bold hover:underline">Lihat Tabel
                    Skema Hadiah Lengkap <i data-lucide="chevron-right" class="w-4 h-4 ml-1"></i></a>
            </div>
        </div>
    </section>

    <!-- 4. Testimoni & Foto Penerima Manfaat -->
    <section class="py-24 bg-gray-900 text-white relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop')] opacity-10 object-cover mix-blend-overlay">
        </div>
        <div
            class="absolute inset-0 bg-gradient-to-t from-gray-900 via-brand-darkred/80 to-gray-900 mix-blend-multiply">
        </div>

        <div class="container mx-auto px-4 relative z-10 max-w-6xl">
            <div class="flex  justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <span class="text-brand-yellow font-bold uppercase tracking-wider text-sm mb-2 block">Bukan Sekadar
                        Janji</span>
                    <h2 class="text-2xl md:text-5xl font-bold mb-4 text-white">Cerita Penerima Manfaat</h2>
                </div>
                <div class="flex gap-2">
                    <button
                        class="swiper-btn-prev-testi w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center hover:bg-brand-red hover:border-brand-red transition text-white"><i
                            data-lucide="chevron-left" class="w-6 h-6"></i></button>
                    <button
                        class="swiper-btn-next-testi w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center hover:bg-brand-red hover:border-brand-red transition text-white"><i
                            data-lucide="chevron-right" class="w-6 h-6"></i></button>
                </div>
            </div>

            <!-- Swiper Testimonial & Gallery -->
            <div class="swiper testiSimproSwiper !overflow-visible">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white text-gray-800 rounded-3xl overflow-hidden shadow-2xl flex flex-col h-full border-4 border-white">
                            <div class="h-60 relative overflow-hidden bg-gray-200">
                                <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover" alt="Penyerahan Mobil">
                                <div
                                    class="absolute bottom-4 left-4 bg-brand-red text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    Hadiah Mobil MPV</div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <div class="flex gap-1 text-brand-yellow mb-4">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-gray-600 italic mb-6 flex-1 text-lg">"Awalnya saya ragu, tapi ternyata
                                    benar!
                                    Hari ini saya buka rekening SIMPROTAMA, kuncinya langsung diserahkan. Dana aman
                                    berkembang, operasional bisnis keluarga saya pun jadi lancar berkat mobil baru."</p>
                                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                                    <div
                                        class="w-12 h-12 rounded-full bg-brand-blue text-white flex items-center justify-center font-bold text-xl">
                                        H</div>
                                    <div>
                                        <h4 class="font-bold text-gray-900">H. Suhendra</h4>
                                        <p class="text-sm text-gray-500">Pengusaha Grosir</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white text-gray-800 rounded-3xl overflow-hidden shadow-2xl flex flex-col h-full border-4 border-white">
                            <div class="h-60 relative overflow-hidden bg-gray-200">
                                <img src="https://images.unsplash.com/photo-1558981285-6f0c94958bb6?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover" alt="Penyerahan Motor">
                                <div
                                    class="absolute bottom-4 left-4 bg-brand-orange text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    Hadiah Motor Matic</div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <div class="flex gap-1 text-brand-yellow mb-4">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-gray-600 italic mb-6 flex-1 text-lg">"Prosesnya sangat transparan dan
                                    sesuai
                                    syariah. Saya tempatkan dana tabungan pendidikan anak di SIMPROTAMA, dapat motor
                                    baru
                                    yang sekarang saya pakai untuk antar-jemput anak sekolah."</p>
                                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                                    <div
                                        class="w-12 h-12 rounded-full bg-brand-red text-white flex items-center justify-center font-bold text-xl">
                                        S</div>
                                    <div>
                                        <h4 class="font-bold text-gray-900">Siti Maryam</h4>
                                        <p class="text-sm text-gray-500">Pegawai Swasta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white text-gray-800 rounded-3xl overflow-hidden shadow-2xl flex flex-col h-full border-4 border-white">
                            <div class="h-60 relative overflow-hidden bg-gray-200">
                                <img src="https://storage.googleapis.com/muslimpergi/uploads/article/pict/22007/Keuntungan_umroh_bersama_keluarga.jpg"
                                    class="w-full h-full object-cover" alt="Penyerahan Umroh">
                                <div
                                    class="absolute bottom-4 left-4 bg-brand-yellow text-gray-900 text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    Hadiah Tiket Umroh VIP</div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <div class="flex gap-1 text-brand-yellow mb-4">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-gray-600 italic mb-6 flex-1 text-lg">"Niat awalnya hanya ingin menyimpan
                                    dana
                                    pensiun di tempat yang halal. MasyaAllah, rezeki tidak kemana, bulan depan saya
                                    diberangkatkan Umroh bersama istri gratis dari KOSPE."</p>
                                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                                    <div
                                        class="w-12 h-12 rounded-full bg-green-600 text-white flex items-center justify-center font-bold text-xl">
                                        R</div>
                                    <div>
                                        <h4 class="font-bold text-gray-900">Bpk. Rahmatullah</h4>
                                        <p class="text-sm text-gray-500">Pensiunan Guru</p>
                                    </div>
                                </div>
                            </div>
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
                        <a href="{{ route('daftar-anggota') }}"
                            class="block w-full bg-blue-500 text-white font-bold py-4 rounded-xl hover:bg-blue-600 transition shadow-lg shadow-blue-200 flex items-center justify-center gap-2 text-lg">
                            <i data-lucide="file-text" class="w-6 h-6"></i> Isi Form Pendaftaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@push('scripts')
    <script>
        new Swiper(".testiSimproSwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-btn-next-testi",
                prevEl: ".swiper-btn-prev-testi",
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 2.5 },
            },
        });
    </script>
@endpush