<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <!-- 1. Hero Section (App Showcase) -->
    <header
        class="relative pt-20 pb-32 lg:pt-32 lg:pb-48 overflow-hidden bg-gradient-to-br from-brand-red via-red-900 to-black text-white">
        <!-- Abstract Background Blobs -->
        <div
            class="absolute top-1/4 left-1/4 w-96 h-96 bg-brand-orange rounded-full mix-blend-screen filter blur-[100px] opacity-40 animate-pulse">
        </div>
        <div class="absolute bottom-1/4 right-1/4 w-[500px] h-[500px] bg-brand-yellow rounded-full mix-blend-screen filter blur-[120px] opacity-20 animate-pulse"
            style="animation-delay: 1s;"></div>
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4xKSIvPjwvc3ZnPg==')]">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Left: Typography & CTA -->
                <div class="text-center lg:text-left animate-fade-in-up">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-brand-yellow text-sm font-bold tracking-wider mb-6">
                        <i data-lucide="smartphone" class="w-4 h-4"></i> Rilis Versi 2.0
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6">
                        Koperasi Syariah di <br>
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-brand-yellow to-brand-orange">Genggaman
                            Anda</span>
                    </h1>
                    <p class="text-lg md:text-xl text-gray-300 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Aplikasi <strong>MyKOSPE</strong> hadir memberikan pengalaman transaksi yang Cepat, Aman,
                        Profesional, dan 100% Transparan khusus untuk anggota KOSPE.
                    </p>

                    <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                        <a href="https://play.google.com/store/apps/details?id=com.mgp.kospemobile&pcampaignid=web_share"
                            target="_blank"
                            class="flex items-center gap-3 bg-white text-gray-900 hover:bg-gray-100 px-6 py-3.5 rounded-xl transition shadow-xl hover:-translate-y-1 group">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                                class="h-6 w-auto group-hover:scale-105 transition" alt="Play Store">
                            <div class="flex flex-col text-left leading-none">
                                <span class="text-[10px] uppercase text-gray-500 font-semibold">Unduh di</span>
                                <span class="text-base font-bold">Google Play</span>
                            </div>
                        </a>

                    </div>
                </div>

                <!-- Right: High-Fidelity CSS Phone Mockup -->
                <div class="relative flex justify-center lg:justify-end lg:pr-10 animate-float">
                    <!-- Glow Behind Phone -->
                    <div
                        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[280px] h-[550px] bg-brand-orange rounded-full blur-[80px] opacity-40">
                    </div>

                    <!-- Phone Frame -->
                    <div
                        class="relative z-10 w-[300px] h-[620px] bg-gray-900 rounded-[45px] border-[10px] border-gray-900 shadow-[0_30px_60px_-15px_rgba(0,0,0,0.8)] overflow-hidden ring-2 ring-gray-800/50">
                        <!-- Notch -->
                        <div
                            class="absolute top-0 left-1/2 transform -translate-x-1/2 w-36 h-7 bg-gray-900 rounded-b-2xl z-30 flex justify-center items-center gap-2">
                            <div class="w-12 h-1.5 bg-gray-800 rounded-full"></div>
                            <div class="w-2.5 h-2.5 bg-gray-800 rounded-full"></div>
                        </div>

                        <!-- UI Screen Content (Interactive Mockup) -->
                        <div class="w-full h-full bg-gray-50 flex flex-col relative overflow-y-auto hide-scrollbar">

                            <img src="{{ asset('mykospe.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom Wave SVG -->
        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none rotate-180 text-white">
            <svg class="relative block w-[calc(100%+1.3px)] h-[50px] md:h-[100px]" data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    fill="currentColor"></path>
            </svg>
        </div>
    </header>

    <!-- 2. Core Values Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Mengapa Menggunakan MyKOSPE?</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Cepat -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-lg transition group">
                    <div
                        class="w-16 h-16 bg-blue-100 text-blue-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <i data-lucide="zap" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Cepat</h3>
                    <p class="text-sm text-gray-500">Transaksi *real-time* kapanpun dan dimanapun tanpa harus antre di
                        kantor cabang.</p>
                </div>
                <!-- Aman -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-lg transition group">
                    <div
                        class="w-16 h-16 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Aman</h3>
                    <p class="text-sm text-gray-500">Dilengkapi dengan PIN, Biometrik (Sidik Jari/Face ID), dan enkripsi
                        data tingkat perbankan.</p>
                </div>
                <!-- Profesional -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-lg transition group">
                    <div
                        class="w-16 h-16 bg-purple-100 text-purple-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <i data-lucide="award" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Profesional</h3>
                    <p class="text-sm text-gray-500">Dukungan *Customer Service* yang responsif dan fitur-fitur yang
                        dikembangkan oleh ahli IT.</p>
                </div>
                <!-- Transparan -->
                <div class="p-6 rounded-2xl bg-gray-50 border border-gray-100 hover:shadow-lg transition group">
                    <div
                        class="w-16 h-16 bg-orange-100 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                        <i data-lucide="search" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Transparan</h3>
                    <p class="text-sm text-gray-500">Akses riwayat mutasi dan pembagian SHU secara detail tanpa ada yang
                        ditutupi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Key Features List -->
    <section class="py-20 bg-gray-50 border-t border-gray-200 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left: Mockup Detail -->
                <div class="relative flex justify-center">
                    <div
                        class="absolute inset-0 bg-brand-red rounded-full filter blur-[100px] opacity-10 w-3/4 h-3/4 m-auto">
                    </div>
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=800&auto=format&fit=crop"
                        class="relative z-10 w-full max-w-md rounded-[2.5rem] shadow-2xl border-4 border-white transform -rotate-3 hover:rotate-0 transition duration-500"
                        alt="Features">

                    <!-- Floating Cards -->
                    <div
                        class="absolute top-1/4 -right-12 bg-white p-4 rounded-xl shadow-xl border border-gray-100 animate-float z-20 hidden md:block">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-100 p-2 rounded-full text-green-500"><i data-lucide="check"
                                    class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs text-gray-500">Transfer Berhasil</p>
                                <p class="font-bold text-gray-800">Rp 500.000</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-1/4 -left-12 bg-white p-4 rounded-xl shadow-xl border border-gray-100 animate-float z-20 hidden md:block"
                        style="animation-delay: 2s;">
                        <div class="flex items-center gap-3">
                            <div class="bg-orange-100 p-2 rounded-full text-brand-orange"><i data-lucide="qr-code"
                                    class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs text-gray-500">Scan QRIS</p>
                                <p class="font-bold text-gray-800">Kios Pesantren</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Feature List -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Fitur Lengkap dalam Satu Aplikasi
                        </h2>
                        <p class="text-gray-600 text-lg">MyKOSPE mengintegrasikan layanan simpanan, pembiayaan, hingga
                            ibadah sosial Anda.</p>
                    </div>

                    <div class="space-y-6">
                        <!-- Feat 1 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-red-50 text-brand-red rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="wallet" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-1">Cek Saldo & Mutasi</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Pantau perkembangan saldo Simpanan
                                    Pokok,
                                    Wajib, Sukarela, dan Program Anda secara *real-time* lengkap dengan histori
                                    transaksi.
                                </p>
                            </div>
                        </div>
                        <!-- Feat 2 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-orange-50 text-brand-orange rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="arrow-right-left" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-1">Transfer Antar Anggota Gratis</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Kirim dana ke sesama anggota KOSPE
                                    menggunakan nomor HP atau ID Anggota tanpa dipungut biaya admin sepeserpun.</p>
                            </div>
                        </div>
                        <!-- Feat 3 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-yellow-50 text-brand-yellow rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="qr-code" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-1">Pembayaran Merchant (QRIS)</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Gunakan fitur *Scan* untuk berbelanja
                                    di
                                    unit usaha Kios Pesantren atau seluruh *merchant* yang berlogo QRIS di Indonesia.
                                </p>
                            </div>
                        </div>
                        <!-- Feat 4 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-green-50 text-green-600 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                                <i data-lucide="heart-handshake" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-800 mb-1">Layanan ZISWAF Online</h4>
                                <p class="text-gray-600 text-sm leading-relaxed">Tunaikan Zakat, Infaq, Sedekah, dan
                                    Wakaf
                                    langsung dari genggaman. Dana disalurkan melalui lembaga amil terpercaya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. How to Use / Activate -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-12">Cara Aktivasi MyKOSPE</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative max-w-5xl mx-auto">
                <!-- Line connector -->
                <div class="hidden md:block absolute top-12 left-1/6 w-2/3 h-0.5 bg-gray-200 -z-10"></div>

                <div class="bg-white p-6 relative">
                    <div
                        class="w-24 h-24 bg-white border-4 border-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-red shadow-lg">
                        <i data-lucide="download" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">1. Unduh Aplikasi</h3>
                    <p class="text-sm text-gray-500">Cari "MyKOSPE" di Google Play Store atau Apple App Store, lalu
                        instal
                        aplikasinya secara gratis.</p>
                </div>

                <div class="bg-white p-6 relative">
                    <div
                        class="w-24 h-24 bg-white border-4 border-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-orange shadow-lg">
                        <i data-lucide="user-check" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">2. Aktivasi Akun</h3>
                    <p class="text-sm text-gray-500">Buka aplikasi, pilih "Aktivasi". Masukkan ID Anggota dan Nomor HP
                        yang
                        terdaftar untuk menerima OTP.</p>
                </div>

                <div class="bg-white p-6 relative">
                    <div
                        class="w-24 h-24 bg-white border-4 border-gray-100 rounded-full flex items-center justify-center mx-auto mb-6 text-brand-yellow shadow-lg">
                        <i data-lucide="lock" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">3. Buat PIN & Selesai</h3>
                    <p class="text-sm text-gray-500">Buat 6 digit PIN rahasia untuk keamanan transaksi. Aplikasi siap
                        digunakan!</p>
                </div>
            </div>
        </div>
    </section>


</div>