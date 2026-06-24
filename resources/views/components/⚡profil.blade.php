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
                Syariah. </p>

            <!-- Breadcrumb -->
            <div class="mt-8 flex justify-center items-center gap-2 text-sm text-white/80">
                <a href="index.html" class="hover:text-white">Beranda</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white font-bold">Profil KoSPE</span>
            </div>
        </div>
    </header>

    <!-- 2. Sejarah & Introduction -->
    <section class="py-20 bg-white relative">
        <div class="absolute top-0 left-0 w-40 h-40 pattern-bg"></div>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div class="space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                        Berawal dari Niat,<br>
                        <span class="text-brand-red">Bertumbuh Bersama Umat</span>
                    </h2>
                    <div class="w-20 h-1.5 bg-brand-orange rounded-full"></div>

                    <div class="text-gray-600 space-y-4 leading-relaxed text-lg">
                        <p>
                            Terbentuk dari rasa prihatin terhadap kondisi ummat Islam Bekasi dan daerah lain di masa itu
                            yang sangat rentan terhadap
                            pemurtadan karena mereka urang mampu dari segi keuangan dan keilmuan sehingga mudah terbawa
                            oleh bujukan para misionaris
                            untuk keluar dari Islam. Sehingga Koperasi Syariah diharapkan bisa menjadi benteng agar
                            mereka bisa berjuang
                            mempertahankan keislaman mereka.
                        </p>
                        <p>
                            Koperasi Syariah Pesantren Entrepreneur (KoSPE) adalah Lembaga keuangan berbasis Syariah
                            yang beroperasional sejak
                            2012 yang resmi terdafar di Kementrian Koperasi dan UKM RI dengan Badan Hukum : 30
                            /BH/INDAGKOP/V/2012, Akta Pernyataan
                            Keputusan Rapat Anggota Tahunan (RAT) ke XIV Tahun Buku 2025, Nomor 15 tanggal 06 Maret 2026
                            dibuat di hadapan Haji Ade
                            Ardiansyah, SH, MKn, Notaris di Kota Bekasi yang yang telah disahkan dengan Keputusan
                            Menteri Hukum dan Hak Asasi
                            Manusia Republik Indonesia Nomor AHU-0001245.AH.01.39.TAHUN 2026 tanggal 6 Maret 2026.
                        </p>
                    </div>

                    <div class="flex items-center gap-8 pt-4">
                        <div>
                            <h4 class="text-4xl font-bold text-brand-red">14+</h4>
                            <p class="text-sm text-gray-500">Tahun Mengabdi</p>
                        </div>
                        <div class="w-px h-12 bg-gray-300"></div>
                        <div>
                            <h4 class="text-4xl font-bold text-brand-orange">1K+</h4>
                            <p class="text-sm text-gray-500">Anggota Aktif</p>
                        </div>
                        <div class="w-px h-12 bg-gray-300"></div>
                        <div>
                            <h4 class="text-4xl font-bold text-brand-yellow">100%</h4>
                            <p class="text-sm text-gray-500">Syariah</p>
                        </div>
                    </div>
                </div>



                <!-- Image Composition -->
                <div class="relative">
                    <div class="absolute -bottom-6 -right-6 w-2/3 h-2/3 bg-brand-yellow/20 rounded-3xl -z-10"></div>
                    <div class="absolute -top-6 -left-6 w-2/3 h-2/3 bg-brand-red/10 rounded-3xl -z-10"></div>
                    <img src="{{ asset('rat2025.jpeg') }}" alt="Meeting"
                        class="rounded-3xl shadow-2xl w-full object-cover h-[500px]">

                    <!-- Floating Quote -->
                    <div
                        class="absolute top-10 left-0 right-0 mx-auto w-4/5 bg-white/90 backdrop-blur p-4 rounded-xl shadow-lg border-l-4 border-brand-red">
                        <p class="italic text-gray-600 text-sm">"Kami Koperasi Syariah Pesantren Entrepreneur
                            berkomitmen
                            menjadi lembaga keuangan syariah yang mampu meningkatkan usaha
                            kecil dan menengah agar bersaing di pasar internasional dan motor penggerak perekonomian
                            masyarakat.."</p>
                        <p class="text-sm font-bold text-brand-red mt-2">- Ketua Pengurus KOSPE</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 5. Struktur Pengurus -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Tim Kami</span>
                <h2 class="text-3xl font-bold mt-2">Struktur Pengurus</h2>
            </div>
            <img src="{{ asset('pengurus-fix.png') }}"
                class="w-full h-full object-cover group-hover:scale-110 transition duration-500" alt="Ketua">
        </div>
    </section>
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Prestasi KoSPE</span>
                <h2 class="text-3xl font-bold mt-2">Penghargaan</h2>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 text-center">
                <div class="shadow">
                    <img src="{{ asset('2023.png') }}"
                        class="w-full object-cover h-full md:h-80 group-hover:scale-110 transition duration-500"
                        alt="Ketua">
                    <p class="text-sm text-gray-500 p-5">(Bersama Wali Kota Bekasi
                        Bpk Dr. TRI ADHIANTO TJAHYONO) KoSPE mendapat Penghargaan Menjadi Koperasi Terbaik di Kota
                        Bekasi dari Dinas Koperasi Kota
                        Bekasi tahun 2023</p>
                </div>
                <div class="shadow">
                    <img src="{{ asset('2024.png') }}"
                        class="w-full object-cover h-full md:h-80 group-hover:scale-110 transition duration-500"
                        alt="Ketua">
                    <p class="text-sm text-gray-500 p-5">KoSPE mendapat Penghargaan dari Dinas Koperasi Kota BekasI 2024
                        yang diberikan oleh Wakil Walikota Bekasi Dr. ABDUL
                        HARRIS BOBIHOE, M.Si</p>
                </div>
                <div class="shadow">
                    <img src="{{ asset('2025.png') }}"
                        class="w-full object-cover h-full md:h-80 group-hover:scale-110 transition duration-500"
                        alt="Ketua">
                    <p class="text-sm text-gray-500 p-5">Bersama Menteri Koperasi dan UKM Republik Indonesia Dr. Ferry
                        Juliantoro SE., Ak., Msi</p>
                </div>
                <div class="shadow">
                    <img src="{{ asset('bok.jpeg') }}"
                        class="w-full object-cover h-full md:h-80 rounded-3xl group-hover:scale-110 transition duration-500"
                        alt="Ketua">
                    <p class="text-sm text-gray-500 p-5">Bersama para Mitra KoSPE, bangun sinergi, perbesar kontribusi,
                        raik kesuksesan sejati</p>
                </div>
            </div>

        </div>
    </section>

    <!-- 3. Visi & Misi -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Visi -->
                    <div class="p-10 md:p-16 bg-brand-red text-white flex flex-col justify-center">
                        <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="eye" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 tracking-wide opacity-90">VISI KAMI</h3>
                        <p class="text-2xl md:text-3xl font-bold leading-snug">
                            "Menjadi KOPERASI SYARIAH yang TERPERCAYA dan TERDEPAN dalam MEMBANGUN dan MENGEMBANGKAN
                            PEREKONOMIAN UMAT"
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="p-10 md:p-16 bg-white">
                        <div
                            class="w-12 h-12 bg-brand-orange/10 text-brand-orange rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="target" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">MISI KAMI</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2"
                                    class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-600">Penguasaan modal dengan menjadi Koperasi Syariah yang
                                    menjalankan program dan bisnis berasaskan syariah</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2"
                                    class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-600">Optimalisasi sistem teknologi guna transparansi, kecepatan &
                                    ketepatan kinerja koperasi</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2"
                                    class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-600">Memproduksi & memasarkan produk-produk muslim Indonesia,
                                    terutama anggota KoSPE ke seluruh dunia</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2"
                                    class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-600">Penguasaan lahan dengan membeli & mengoptimalkan lahan di
                                    Indonesia agar lebih bermanfaat</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2"
                                    class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                                <span class="text-gray-600">Mengoptimalkan peluang usaha lainnya yang memberikan manfaat
                                    dan keuntungan bagi KoSPE pada umumnya dan bagi anggota
                                    KoSPE pada khususnya.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. Nilai-Nilai (Core Values) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12">5 PILAR <span class="text-brand-red">(S.A.K.T.I)</span></h2>

            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Card 1 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-red-50 rounded-full flex items-center justify-center text-brand-red mb-6 group-hover:bg-brand-red group-hover:text-white transition">
                        <i data-lucide="moon-star" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">SISTEM SYARIAH</h3>
                    <p class="text-sm text-gray-500">Setiap aktivitas transaksi yang di lakukan di KoSPE telah melewati
                        tahap diskusi dan disetujui oleh Dewan Syariah KoSPE yang telah tersertifiaksi DSN MUI</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-orange-50 rounded-full flex items-center justify-center text-brand-orange mb-6 group-hover:bg-brand-orange group-hover:text-white transition">
                        <i data-lucide="heart-handshake" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">ANGGOTA AKTIF & SOLID</h3>
                    <p class="text-sm text-gray-500">KoSPE akan tumbuh dan berkembang dengan Anggota yang aktif dan
                        solid sehingga seluruh aktivitas menjadi lancar dan berkah</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-yellow-50 rounded-full flex items-center justify-center text-brand-yellow mb-6 group-hover:bg-brand-yellow group-hover:text-white transition">
                        <i data-lucide="chart-no-axes-combined" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">KEUANGAN SEHAT</h3>
                    <p class="text-sm text-gray-500">KoSPE memliki keuangan yang sehat sehingga timbul rasa kepercayaan
                        Anggota untuk terus berjuang bersama KoSPE untuk membangkitkan ekonomi umat.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-green-50 rounded-full flex items-center justify-center text-green-600 mb-6 group-hover:bg-green-600 group-hover:text-white transition">
                        <i data-lucide="monitor-smartphone" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">TEKNOLOGI & INOVASI</h3>
                    <p class="text-sm text-gray-500">Bekerjasama dengan Tim IT yang telah mengelola keuangan syariah
                        untuk berbagai koperasi di Indonesia berizin resmi dan menghadirkan solusi IT yang cepat, mudah
                        dan aman</p>
                </div>
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">INTEGRITAS MANAJEMEN</h3>
                    <p class="text-sm text-gray-500">Seluruh pengurus KoSPE telah mendapatkan pengakuan profesi resmi
                        dari BNSP (Badan Nasional Sertifikasi Profesi) sehingga telah memahami sistem koperasi secara
                        menyeluruh. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. Nilai-Nilai (Core Values) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-12">Karekter <span class="text-brand-red">(S.I.D.A.K)</span></h2>

            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                <!-- Card 1 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-red-50 rounded-full flex items-center justify-center text-brand-red mb-6 group-hover:bg-brand-red group-hover:text-white transition">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Santun</h3>
                    <p class="text-sm text-gray-500">Mencerminkan Adab, Etika, dan
                        nilai-nilai Moral yang baik.
                        Sopan dan menghormati
                        oranglain dalam ucapan &
                        tindakan</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-orange-50 rounded-full flex items-center justify-center text-brand-orange mb-6 group-hover:bg-brand-orange group-hover:text-white transition">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Ikhlas</h3>
                    <p class="text-sm text-gray-500">Melakukan sesuatu sebaik mungkin
                        dengan niat yang tulus, tidak
                        mengeluh, dan tidak berharap pujian.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-yellow-50 rounded-full flex items-center justify-center text-brand-yellow mb-6 group-hover:bg-brand-yellow group-hover:text-white transition">
                        <i data-lucide="lightbulb" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Disiplin</h3>
                    <p class="text-sm text-gray-500">Mencerminkan tindakan konsisten
                        dalam menjalankan tugas dan
                        tanggung jawab, tepat waktu, patuh
                        dan taat terhadap aturan.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-green-50 rounded-full flex items-center justify-center text-green-600 mb-6 group-hover:bg-green-600 group-hover:text-white transition">
                        <i data-lucide="circle-check-big" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Amanah</h3>
                    <p class="text-sm text-gray-500">Upaya menjadikan dirinya sebagai orang
                        yang selalu dapat dipercaya dalam
                        perkataan, tindakan dan pekerjaan</p>
                </div>
                <div
                    class="p-8 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-xl transition hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center text-blue-600 mb-6 group-hover:bg-blue-600 group-hover:text-white transition">
                        <i data-lucide="heart-handshake" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Kooperatif</h3>
                    <p class="text-sm text-gray-500">Sikap mau bekerja sama dengan orang
                        lain untuk mencapai tujuan bersama,
                        tidak egois, dan siap membantu rekan
                        atau tim saat dibutuhka</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-20 bg-red-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-12 text-center">Kenapa Mimilih <span class="text-brand-red">KOSPE</span>
            </h2>
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                    <span class="text-gray-600">Komitmen syar’i tanpa riba dalam setiap transaksi karena diawasi oleh
                        Dewaan Syariah Nasional (DSN) bersertifikasi</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                    <span class="text-gray-600">Ikut Membangkitan perekonomian umat islam dan terwujudnya 1000 pesantren
                        penghafal AL Quran</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                    <span class="text-gray-600">Kemudahan dan transparansi dalam transaksi karena sudah system online,
                        bisa di akses kapan pun dan dimana pun melalui
                        aplikasi MyKoSPE</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                    <span class="text-gray-600">Mendaptkan bagi hasil SHU pertahun setelah RAT (Rapat anggota
                        Tahunan) dan Mendapatkan bagi hasil untuk beberapa produk simpanan</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="check-circle-2" class="w-6 h-6 text-brand-orange flex-shrink-0 mt-0.5"></i>
                    <span class="text-gray-600">Para pengurus telah memiliki Sertifikat BNSP untuk sektor
                        Koperasi</span>
                </li>
            </ul>

        </div>
    </section>


    <!-- 6. Legalitas / CTA -->
    <section class="py-16 bg-gradient-to-r from-gray-900 to-gray-800 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-2">Legalitas Terjamin</h2>
                    <p class="text-gray-400">Badan Hukum : 30 /BH/INDAGKOP/V/2012 | NIK: 3275070060001</p>
                </div>
                <div class="flex gap-4">
                    <div class="bg-white/10 p-4 rounded-lg backdrop-blur text-center min-w-[100px]">
                        <i data-lucide="file-check" class="w-8 h-8 mx-auto mb-2 text-green-400"></i>
                        <span class="text-xs font-bold">Izin Kementerian Koperasi & UKM RI</span>
                    </div>
                    <div class="bg-white/10 p-4 rounded-lg backdrop-blur text-center min-w-[100px]">
                        <i data-lucide="award" class="w-8 h-8 mx-auto mb-2 text-yellow-400"></i>
                        <span class="text-xs font-bold">Grade A</span>
                    </div>
                </div>
            </div>
            <img src="{{ asset('nik.png') }}" class="w-full" alt="">

        </div>
    </section>
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-2">Sertifikasi Pengurus KoSPE dari BNSP</h2>
                    <p class="text-gray-400">Badan Nasional Sertifikasi Profesi RI</p>
                </div>

            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                <img src="{{ asset('bnsp/bagus.jpg') }}" class="w-full" alt="">
                <img src="{{ asset('bnsp/awang.jpg') }}" class="w-full" alt="">
                <img src="{{ asset('bnsp/agus.jpeg') }}" class="w-full" alt="">
                <img src="{{ asset('bnsp/dedy.jpg') }}" class="w-full" alt="">
                <img src="{{ asset('bnsp/herdy.jpg') }}" class="w-full" alt="">
                <img src="{{ asset('bnsp/aries.jpg') }}" class="w-full" alt="">
            </div>

        </div>
    </section>
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <iframe width="100%" height="751" src="https://www.youtube.com/embed/KoYzvbHCBPA"
                title="LAUNCHING KANTOR KOSPE PRIMA HARAPAN REGENCY BEKASI - Langkah Baru Koperasi Syariah!"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
</div>