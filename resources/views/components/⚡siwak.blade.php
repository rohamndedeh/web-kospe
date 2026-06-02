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
    <header class="relative pt-20 pb-32 overflow-hidden bg-gradient-to-br from-orange-50 to-white">
        <!-- Abstract decorations -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl transform translate-x-1/3 -translate-y-1/3">
        </div>
        <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-blue-600/5 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2">
        </div>

        <div class="container mx-auto px-4 relative z-10 flex flex-col lg:flex-row items-center gap-12">
            <!-- Left Text Content -->
            <div class="lg:w-3/5 space-y-6 animate-fade-in-up">
                <span
                    class="inline-flex items-center gap-2 py-1.5 px-4 rounded-full bg-brand-orange/10 text-brand-orange font-bold text-xs uppercase tracking-widest">
                    Ayo Daftar Sekarang
                </span>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black leading-tight text-brand-orange drop-shadow-sm">
                    SIWAK
                </h1>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                    Simpanan Wajib Khusus
                </h2>

                <p class="text-lg text-gray-600 max-w-xl leading-relaxed mt-4 font-medium">
                    Tingkatkan SHU (Sisa Hasil Usaha) tahunan Anda dengan membuka Simpanan Wajib Khusus. <strong>Cukup
                        sekali setor di awal!</strong>
                </p>

                <!-- Value Proposition Badges -->
                <div class="flex flex-wrap gap-4 pt-4">
                    <div
                        class="bg-blue-600 text-white rounded-xl p-4 shadow-lg shadow-blue-200 transform hover:-translate-y-1 transition border border-blue-500 max-w-[240px]">
                        <div class="flex items-center gap-2 mb-1">
                            <i data-lucide="plane" class="w-5 h-5 text-blue-200"></i>
                            <p class="text-sm font-bold uppercase tracking-wider text-blue-100">Undian Umroh</p>
                        </div>
                        <p class="text-xs text-blue-50 leading-snug">Setiap kelipatan saldo 1Jt mendapatkan 1 kupon
                            undian
                            Umroh saat RAT.</p>
                    </div>

                    <div
                        class="bg-gradient-to-r from-brand-red to-red-700 text-white rounded-xl p-4 shadow-lg shadow-red-200 transform hover:-translate-y-1 transition max-w-[240px]">
                        <div class="flex items-center gap-2 mb-1">
                            <i data-lucide="credit-card" class="w-5 h-5 text-red-200"></i>
                            <p class="text-sm font-bold uppercase tracking-wider">Gratis E-Money</p>
                        </div>
                        <p class="text-xs text-red-100 leading-snug">Dapatkan kartu e-money eksklusif edisi KOSPE gratis
                            untuk anggota SIWAK.</p>
                    </div>
                </div>

                <div class="pt-6 flex gap-4 items-center">
                    <div class="bg-gray-100 px-6 py-4 rounded-xl border border-gray-200 shadow-inner">
                        <p class="text-xs text-gray-500 uppercase tracking-wider mb-1 font-bold">Setoran Mulai Dari</p>
                        <p class="text-xl font-black text-gray-900">Rp 1.000.000 <span
                                class="text-sm font-normal text-gray-500">s/d Rp 500.000.000</span></p>
                    </div>
                </div>
            </div>

            <!-- Right Image Banner Representation -->
            <div class="lg:w-2/5 animate-float hidden md:block relative">
                <!-- Visual Kaaba/Umroh Backdrop Concept -->
                <div
                    class="relative w-full  mx-auto rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white z-10">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/80 z-10"></div>
                    <img src="https://arrayyan.travel/wp-content/uploads/2025/01/Umroh-Syawal-1024x683.jpeg"
                        class="w-full  object-cover" alt="Makkah">

                    <div class="absolute bottom-0 left-0 w-full p-6 z-20 text-center">
                        <h3 class="text-2xl font-bold text-white mb-2 shadow-black drop-shadow-md">UNDIAN UMROH</h3>
                        <p class="text-sm text-gray-200">Semakin besar saldo, semakin besar peluang Anda berangkat ke
                            Baitullah.</p>
                    </div>
                </div>

                <!-- Floating E-Money visual representation -->
                <div
                    class="absolute -bottom-10 -left-10 w-64 h-40 bg-gradient-to-br from-yellow-300 via-yellow-500 to-yellow-600 rounded-xl shadow-2xl z-20 transform -rotate-12 border border-yellow-300 p-4 flex flex-col justify-between">
                    <div class="flex justify-between items-center">
                        <div class="w-8 h-8 bg-white/20 rounded-md"></div>
                        <span class="text-[10px] font-bold text-yellow-900 opacity-80">KOSPE</span>
                    </div>
                    <div>
                        <p class="text-xs text-yellow-900 font-mono opacity-80">No. Rekening SIWAK</p>
                        <p class="text-lg text-yellow-900 font-mono tracking-widest font-bold">1420 1000 08</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Syarat & Ketentuan -->
    <section class="py-20 bg-white relative border-b border-gray-100">
        <div class="container mx-auto px-4 max-w-5xl">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Gambar pendukung -->
                <div class="order-2 lg:order-1 relative">
                    <div class="absolute inset-0 bg-brand-orange/10 rounded-3xl transform -rotate-3"></div>
                    <img src="/siwak.jpg"
                        class="relative z-10 rounded-3xl shadow-xl w-full object-cover border border-gray-100"
                        alt="Brosur SIWAK">
                </div>

                <!-- Konten S&K -->
                <div class="order-1 lg:order-2 space-y-8">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Syarat & Ketentuan Program</h2>
                        <div class="w-16 h-1.5 bg-brand-orange rounded-full mb-6"></div>
                        <p class="text-gray-600 mb-8">Pahami ketentuan mudah berikut untuk mulai menikmati bagi hasil
                            maksimal dan berkesempatan mendapatkan tiket Umroh.</p>
                    </div>

                    <ul class="space-y-5">
                        <li
                            class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-brand-orange transition">
                            <div class="bg-orange-100 p-2 rounded-lg text-brand-orange mt-0.5">
                                <i data-lucide="user-check" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Keanggotaan</h4>
                                <p class="text-sm text-gray-600 mt-1">Pemohon sudah terdaftar secara resmi sebagai
                                    anggota
                                    KOSPE.</p>
                            </div>
                        </li>

                        <li
                            class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-brand-orange transition">
                            <div class="bg-orange-100 p-2 rounded-lg text-brand-orange mt-0.5">
                                <i data-lucide="calendar-clock" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Jangka Waktu</h4>
                                <p class="text-sm text-gray-600 mt-1">Dana diendapkan dengan jangka waktu minimal
                                    <strong>3
                                        tahun</strong>.
                                </p>
                            </div>
                        </li>

                        <li
                            class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-brand-orange transition">
                            <div class="bg-orange-100 p-2 rounded-lg text-brand-orange mt-0.5">
                                <i data-lucide="ban" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Gratis Admin</h4>
                                <p class="text-sm text-gray-600 mt-1">Bebas dari potongan biaya administrasi bulanan
                                    selamanya.</p>
                            </div>
                        </li>

                        <li
                            class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-brand-orange transition">
                            <div class="bg-orange-100 p-2 rounded-lg text-brand-orange mt-0.5">
                                <i data-lucide="percent" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Bagi Hasil Ganda</h4>
                                <p class="text-sm text-gray-600 mt-1">Mendapatkan Bagi Hasil Tahunan tambahan,
                                    <strong>di
                                        luar</strong> dari pembagian SHU reguler.
                                </p>
                            </div>
                        </li>

                        <li
                            class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-100 hover:border-brand-orange transition">
                            <div class="bg-orange-100 p-2 rounded-lg text-brand-orange mt-0.5">
                                <i data-lucide="lock" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900">Sistem Lock</h4>
                                <p class="text-sm text-gray-600 mt-1">Dana SIWAK tidak bisa diambil sewaktu-waktu
                                    sebelum
                                    masa jatuh tempo berakhir.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="py-20 bg-gray-50 relative border-b border-gray-200 overflow-hidden">
        <div class="absolute inset-0 bg-pattern-orange -z-10 opacity-30"></div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div class="order-2 lg:order-1 space-y-8">
                    <div>
                        <span class="text-brand-orange font-bold uppercase tracking-wider text-sm mb-2 block">Fasilitas
                            Eksklusif</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Kartu E-Money SIWAK Mandiri</h2>
                        <div class="w-16 h-1.5 bg-brand-orange rounded-full mb-6"></div>
                        <p class="text-gray-600 text-lg leading-relaxed mb-6">Bukan sekadar tabungan biasa, khusus
                            pendaftar program SIWAK akan mendapatkan <strong>Kartu E-Money cetakan eksklusif
                                KOSPE</strong> yang terintegrasi dengan jaringan Bank Mandiri. Kartu pintar ini siap
                            menemani mobilitas harian Anda.</p>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div
                            class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-orange transition duration-300 group">
                            <div
                                class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="car" class="w-6 h-6"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Bayar Tol (e-Toll)</h4>
                            <p class="text-sm text-gray-500">Tap praktis di seluruh gerbang tol se-Indonesia tanpa repot
                                siapkan uang tunai.</p>
                        </div>
                        <div
                            class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-orange transition duration-300 group">
                            <div
                                class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="shopping-bag" class="w-6 h-6"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Belanja & Transport</h4>
                            <p class="text-sm text-gray-500">Bisa untuk bayar parkir, TransJakarta, KRL, hingga belanja
                                di berbagai Minimarket.</p>
                        </div>
                        <div
                            class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-orange transition duration-300 group">
                            <div
                                class="w-12 h-12 bg-orange-100 text-brand-orange rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="smartphone" class="w-6 h-6"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Top Up Mudah</h4>
                            <p class="text-sm text-gray-500">Isi ulang saldo kapanpun via m-Banking, ATM, atau jaringan
                                ritel terdekat (Indomaret/Alfamart).</p>
                        </div>
                        <div
                            class="bg-white p-5 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md hover:border-brand-orange transition duration-300 group">
                            <div
                                class="w-12 h-12 bg-red-100 text-brand-red rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition">
                                <i data-lucide="credit-card" class="w-6 h-6"></i>
                            </div>
                            <h4 class="font-bold text-gray-900 mb-1">Desain Premium</h4>
                            <p class="text-sm text-gray-500">Tampil elegan dengan desain kartu Gold khas anggota
                                prioritas Koperasi Pesantren.</p>
                        </div>
                    </div>
                </div>

                <!-- Image / Mockup E-Money -->
                <div class="order-1 lg:order-2 relative flex justify-center animate-float">
                    <!-- Glow behind -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-brand-yellow/30 rounded-full blur-3xl -z-10">
                    </div>

                    <!-- E-Money Card Visual (CSS Based) -->
                    <div
                        class="relative w-[320px] h-[200px] bg-gradient-to-br from-yellow-300 via-yellow-500 to-yellow-700 rounded-2xl shadow-2xl transform rotate-6 border border-yellow-200 overflow-hidden group hover:rotate-0 transition duration-500 cursor-pointer">
                        <div class="absolute inset-0 opacity-20"
                            style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23000000\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'3\'/%3E%3Ccircle cx=\'13\' cy=\'13\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E');">
                        </div>

                        <div class="absolute top-5 left-5 flex items-center gap-2">
                            <div
                                class="w-8 h-8 bg-white/20 backdrop-blur rounded flex items-center justify-center text-yellow-900 font-black text-lg">
                                K</div>
                            <span class="text-yellow-900 font-bold text-sm">KOSPE</span>
                        </div>

                        <div
                            class="absolute top-5 right-5 flex items-center gap-2 bg-white/30 backdrop-blur-sm px-2 py-1 rounded">
                            <span class="text-[10px] font-bold text-yellow-900 uppercase tracking-widest">e-money</span>
                        </div>

                        <!-- Chip -->
                        <div
                            class="absolute top-1/2 left-5 transform -translate-y-1/2 w-12 h-9 bg-gradient-to-br from-yellow-100 to-yellow-400 rounded border border-yellow-600/30 flex items-center justify-center">
                            <div class="w-8 h-5 border border-yellow-600/20 rounded-sm"></div>
                        </div>

                        <div class="absolute bottom-5 left-5 right-5">
                            <p class="text-xs text-yellow-900 font-mono opacity-90 mb-0.5 font-bold">Simpanan Wajib
                                Khusus</p>
                            <p class="text-xl text-yellow-900 font-mono tracking-widest font-black drop-shadow-sm">1420
                                1000 08XX</p>
                            <div class="flex justify-between items-end mt-1">
                                <p class="text-sm font-bold text-yellow-900 uppercase">Member Eksklusif</p>
                                <p class="text-[10px] font-black text-yellow-900 italic">MANDIRI</p>
                            </div>
                        </div>
                    </div>

                    <!-- Context Image (Hidden on very small screens) -->
                    <img src="https://awsimages.detik.net.id/community/media/visual/2017/10/30/9bebca02-5116-4f48-8eb9-e4ab72e745af_169.jpg?w=600&q=90"
                        class="absolute -bottom-12 -left-8 w-48 h-48 object-cover rounded-2xl shadow-xl border-4 border-white transform -rotate-12 hidden md:block group-hover:scale-105 transition duration-500"
                        alt="Belanja dengan E-Money">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Kalkulator Simulasi Bagi Hasil -->
    <section id="kalkulator" class="py-20 bg-brand-blue relative overflow-hidden text-white">
        <!-- Background elements -->
        <div
            class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-brand-orange opacity-10 rounded-full blur-2xl transform -translate-x-1/2 translate-y-1/2">
        </div>

        <div class="container mx-auto px-4 relative z-10 max-w-5xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <span class="text-brand-orange font-bold uppercase tracking-widest text-sm mb-2 block">Simulasi
                        Perhitungan</span>
                    <h2 class="text-3xl md:text-4xl font-bold">Bagi Hasil Ekstra 7,56%</h2>
                    <p class="text-blue-100 text-lg leading-relaxed">Selain mendapatkan porsi SHU tahunan dari koperasi,
                        dana SIWAK Anda juga akan mendapatkan tambahan Bagi Hasil setara <strong>7,56% per
                            tahun</strong>
                        (Equivalent Rate).</p>

                    <div class="bg-white/10 border border-white/20 p-5 rounded-2xl">
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle"
                                    class="w-5 h-5 text-brand-yellow flex-shrink-0 mt-0.5"></i>
                                <span class="text-sm">Nilai setoran mulai Rp 1.000.000 s/d Rp 500.000.000.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle"
                                    class="w-5 h-5 text-brand-yellow flex-shrink-0 mt-0.5"></i>
                                <span class="text-sm">Bagi hasil dibagikan di luar dari pembagian SHU
                                    bulanan/tahunan.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Calculator Box -->
                <div class="bg-white text-gray-800 rounded-3xl p-8 shadow-xl">
                    <div class="space-y-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Nominal Setoran SIWAK</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                <input type="text" id="input-nominal-siwak"
                                    class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition font-bold text-xl"
                                    value="1.000.000">
                            </div>
                            <p id="error-msg-siwak" class="text-xs text-red-500 mt-2 hidden">Minimal setoran adalah Rp
                                1.000.000</p>
                        </div>

                        <div class="bg-blue-50 border border-blue-100 rounded-2xl p-5">
                            <p
                                class="text-xs font-bold text-brand-blue uppercase tracking-wider mb-4 border-b border-blue-200 pb-2">
                                Estimasi Tambahan Bagi Hasil</p>

                            <div class="flex justify-between items-center mb-3">
                                <span class="text-sm text-gray-600 font-medium">ER Setara (p.a)</span>
                                <span class="font-bold text-brand-blue text-lg">7,56%</span>
                            </div>

                            <div class="flex justify-between items-center mb-3">
                                <span class="text-sm text-gray-600 font-medium">Bagi Hasil / Bulan</span>
                                <span class="font-bold text-green-600 text-lg" id="result-monthly-siwak">Rp 0</span>
                            </div>

                            <div class="flex justify-between items-center pt-3 border-t border-blue-200">
                                <span class="text-sm text-gray-800 font-bold">Total Bagi Hasil (1 Tahun)</span>
                                <span class="font-black text-brand-blue text-xl" id="result-yearly-siwak">Rp 0</span>
                            </div>
                        </div>
                        <p class="text-[10px] text-center text-gray-400 italic">*Nilai di atas adalah estimasi
                            (Equivalent
                            Rate) dan tidak mengikat sesuai kinerja usaha KOSPE.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Testimoni Anggota -->
    <section class="py-24 bg-gray-50 relative overflow-hidden border-b border-gray-200">
        <div class="absolute inset-0 bg-pattern-orange -z-10 opacity-50"></div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <span class="text-brand-orange font-bold uppercase tracking-wider text-sm mb-2 block">Cerita
                        Anggota</span>
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 text-gray-900">Keberkahan Nyata SIWAK</h2>
                    <p class="text-gray-600 text-lg">Dengarkan pengalaman mereka yang telah merasakan peningkatan SHU
                        dan
                        mendapatkan hadiah Umroh Gratis.</p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="swiper-btn-prev-testi w-12 h-12 rounded-full border border-gray-300 bg-white flex items-center justify-center hover:bg-brand-orange hover:text-white hover:border-brand-orange transition"><i
                            data-lucide="chevron-left" class="w-6 h-6"></i></button>
                    <button
                        class="swiper-btn-next-testi w-12 h-12 rounded-full border border-gray-300 bg-white flex items-center justify-center hover:bg-brand-orange hover:text-white hover:border-brand-orange transition"><i
                            data-lucide="chevron-right" class="w-6 h-6"></i></button>
                </div>
            </div>

            <!-- Swiper Testimonial -->
            <div class="swiper testiSiwakSwiper !overflow-visible">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white text-gray-800 rounded-3xl overflow-hidden shadow-xl flex flex-col h-full border border-gray-100 group">
                            <div class="h-56 relative overflow-hidden bg-gray-200">
                                <img src="https://pakemtours.co.id/wp-content/uploads/2019/08/fature-img-umroh-9-hari-jkt.jpg"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Pemenang Umroh">
                                <div
                                    class="absolute bottom-4 left-4 bg-brand-orange text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    Pemenang Undian Umroh</div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <div class="flex gap-1 text-brand-yellow mb-4">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-gray-600 italic mb-6 flex-1 text-lg">"Alhamdulillah, awalnya cuma mau
                                    mengamankan dana nganggur agar SHU akhir tahun naik. Eh, malah dipanggil pas RAT
                                    karena
                                    kupon undian saya menang Umroh. Berkah luar biasa!"</p>
                                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                                    <img src="https://i.pravatar.cc/150?img=11" alt="User"
                                        class="w-12 h-12 rounded-full border-2 border-gray-200">
                                    <div>
                                        <h4 class="font-bold text-gray-900">Bpk. H. Lukman</h4>
                                        <p class="text-sm text-gray-500">Anggota sejak 2019</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white text-gray-800 rounded-3xl overflow-hidden shadow-xl flex flex-col h-full border border-gray-100 group">
                            <div class="h-56 relative overflow-hidden bg-gray-200">
                                <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Bagi Hasil">
                                <div
                                    class="absolute bottom-4 left-4 bg-green-600 text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    SHU Melonjak Tajam</div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <div class="flex gap-1 text-brand-yellow mb-4">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-gray-600 italic mb-6 flex-1 text-lg">"Tahun lalu saya ubah tabungan biasa
                                    jadi SIWAK. Pas pembagian SHU, kaget banget porsi jasa modal saya naik drastis
                                    ditambah
                                    dapat bagi hasil bulanannya juga. Top banget!"</p>
                                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                                    <img src="https://i.pravatar.cc/150?img=32" alt="User"
                                        class="w-12 h-12 rounded-full border-2 border-gray-200">
                                    <div>
                                        <h4 class="font-bold text-gray-900">Ibu Siti Khadijah</h4>
                                        <p class="text-sm text-gray-500">PNS / Guru</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="swiper-slide">
                        <div
                            class="bg-white text-gray-800 rounded-3xl overflow-hidden shadow-xl flex flex-col h-full border border-gray-100 group">
                            <div class="h-56 relative overflow-hidden bg-gray-200">
                                <img src="https://www.blackxperience.com/assets/content/blackattitude/blacktips/-5264-masuk-tol-tak-perlu-tap-kartu-lagi--ini-penjelasannya.jpg"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="E-Money">
                                <div
                                    class="absolute bottom-4 left-4 bg-brand-red text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg">
                                    Fasilitas E-Money</div>
                            </div>
                            <div class="p-8 flex-1 flex flex-col">
                                <div class="flex gap-1 text-brand-yellow mb-4">
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star" class="w-5 h-5 fill-current"></i>
                                    <i data-lucide="star-half" class="w-5 h-5 fill-current"></i>
                                </div>
                                <p class="text-gray-600 italic mb-6 flex-1 text-lg">"Selain aman simpan uang di KOSPE
                                    (bebas
                                    admin bulanan), pas buka SIWAK langsung dikasih kartu E-Money edisi khusus. Keren
                                    buat
                                    bayar tol dan belanja di minimarket."</p>
                                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                                    <img src="https://i.pravatar.cc/150?img=12" alt="User"
                                        class="w-12 h-12 rounded-full border-2 border-gray-200">
                                    <div>
                                        <h4 class="font-bold text-gray-900">M. Ridwan</h4>
                                        <p class="text-sm text-gray-500">Wiraswasta</p>
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
        function formatIDR(angka) {
            let number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                let separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            return rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        }

        // --- SIWAK Calculator Logic ---
        const RATE_PA = 7.56; // 7.56% per tahun
        const MIN_DEPOSIT = 1000000;

        const inputNominal = $('#input-nominal-siwak');
        const errorMsg = $('#error-msg-siwak');
        const resMonthly = $('#result-monthly-siwak');
        const resYearly = $('#result-yearly-siwak');

        // Format input while typing
        inputNominal.on('keyup', function (e) {
            let val = $(this).val();
            $(this).val(formatIDR(val));
            calculateProfit();
        });

        function calculateProfit() {
            // Hapus titik untuk kalkulasi
            let rawValue = inputNominal.val().replace(/\./g, '');
            let nominal = parseInt(rawValue) || 0;

            if (nominal < MIN_DEPOSIT) {
                errorMsg.removeClass('hidden');
                resMonthly.text('Rp 0');
                resYearly.text('Rp 0');
                return;
            } else {
                errorMsg.addClass('hidden');
            }

            // Kalkulasi
            const yearlyProfit = nominal * (RATE_PA / 100);
            const monthlyProfit = yearlyProfit / 12;

            resMonthly.text('Rp ' + formatIDR(Math.round(monthlyProfit).toString()));
            resYearly.text('Rp ' + formatIDR(Math.round(yearlyProfit).toString()));
        }

        // Initial Calc
        calculateProfit();

        // --- Swiper Testimoni ---
        try {
            if (typeof Swiper !== 'undefined') {
                new Swiper(".testiSiwakSwiper", {
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
            }
        } catch (e) {
            console.error("Swiper Error:", e);
        }
    </script>
@endpush