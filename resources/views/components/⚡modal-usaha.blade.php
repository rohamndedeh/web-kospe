<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    @push('styles')
        <style>
            input[type=range]::-webkit-slider-thumb {
                -webkit-appearance: none;
                height: 20px;
                width: 20px;
                border-radius: 50%;
                background: #E56325;
                cursor: pointer;
                margin-top: -8px;
            }

            input[type=range]::-webkit-slider-runnable-track {
                width: 100%;
                height: 4px;
                cursor: pointer;
                background: #ddd;
                border-radius: 2px;
            }
        </style>
    @endpush
    <!-- 1. Hero Section -->
    <header class="relative pt-20 pb-32 overflow-hidden bg-gray-900 text-white">
        <div class="absolute inset-0">
            <img src="https://statik.tempo.co/data/2023/10/17/id_1245992/1245992_720.jpg"
                class="w-full h-full object-cover opacity-40 mix-blend-overlay" alt="Kabah Hajj">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/90 to-transparent"></div>

        <div class="container mx-auto px-4 relative z-10 flex flex-col md:flex-row items-center">
            <div class="md:w-2/3 space-y-6 animate-fade-in-up">
                <span
                    class="inline-flex items-center gap-2 py-1 px-4 rounded-full bg-brand-red/20 border border-brand-red text-red-400 font-bold text-xs uppercase tracking-widest mb-2">
                    <i data-lucide="store" class="w-4 h-4"></i> Solusi UMKM
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    Bangun Bisnis Berkah <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-red to-brand-orange">Tanpa
                        Riba</span>
                </h1>
                <p class="text-lg text-gray-300 max-w-xl leading-relaxed">
                    Dapatkan dukungan permodalan untuk mengembangkan usaha Anda dengan prinsip Kemitraan
                    (Mudharabah/Musyarakah) dan
                    Jual Beli (Murabahah) yang adil.
                </p>
                <div class="flex gap-4 pt-4">
                    <button onclick="document.getElementById('kalkulator').scrollIntoView()"
                        class="px-8 py-3.5 bg-brand-red text-white hover:bg-red-700 rounded-xl font-bold transition shadow-lg flex items-center gap-2">
                        <i data-lucide="check" class="w-5 h-5"></i> Ajukan Sekarang
                    </button>
                    <a href="#rab-section"
                        class="px-8 py-3.5 bg-white/10 hover:bg-white/20 border border-white/30 backdrop-blur rounded-xl font-bold transition flex items-center gap-2">
                        <i data-lucide="calculator" class="w-5 h-5"></i> Hitung Simulasi
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Pengertian & Keunggulan -->
    <section class="py-20 bg-gray-50 relative">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern -z-10"></div>
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <div class="relative">
                    <div class="absolute inset-0 bg-brand-orange/20 rounded-[2rem] transform -rotate-3 scale-105"></div>
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop"
                        class="relative z-10 w-full h-[450px] object-cover rounded-[2rem] shadow-xl"
                        alt="Diskusi Bisnis">

                    <div
                        class="absolute -right-8 bottom-12 bg-white p-5 rounded-2xl shadow-xl z-20 border border-gray-100 hidden md:block">
                        <div class="flex items-center gap-4 mb-2">
                            <div
                                class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center font-bold text-xl">
                                <i data-lucide="trending-up" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500">Plafon Pembiayaan</p>
                                <p class="font-bold text-gray-900 text-lg">Hingga Rp 500 Jt</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <span class="text-brand-red font-bold uppercase tracking-wider text-sm">Tentang Pembiayaan</span>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Mitra Pertumbuhan Bisnis Anda
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-4 text-lg">
                        <strong>Pembiayaan Modal Usaha KOSPE</strong> hadir untuk memfasilitasi anggota yang membutuhkan
                        tambahan modal kerja atau investasi aset usaha. Kami menolak sistem bunga (riba) yang
                        memberatkan.
                    </p>

                    <div class="space-y-4 mt-8">
                        <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm flex items-start gap-4">
                            <i data-lucide="store" class="w-6 h-6 text-brand-orange flex-shrink-0 mt-1"></i>
                            <div>
                                <h4 class="font-bold text-gray-800">Akad Murabahah (Jual Beli)</h4>
                                <p class="text-sm text-gray-500 mt-1">KOSPE membelikan barang kebutuhan usaha Anda
                                    (mesin,
                                    bahan baku, kendaraan operasional) lalu menjualnya kepada Anda dengan margin
                                    keuntungan
                                    yang transparan. Pembayaran dicicil dengan jumlah tetap.</p>
                            </div>
                        </div>
                        <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm flex items-start gap-4">
                            <i data-lucide="pie-chart" class="w-6 h-6 text-brand-red flex-shrink-0 mt-1"></i>
                            <div>
                                <h4 class="font-bold text-gray-800">Akad Mudharabah / Musyarakah (Bagi Hasil)</h4>
                                <p class="text-sm text-gray-500 mt-1">KOSPE memberikan suntikan dana tunai untuk
                                    proyek/usaha. Keuntungan usaha akan dibagi dua berdasarkan nisbah yang disepakati di
                                    awal. Risiko ditanggung bersama sesuai prinsip syariah.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Keunggulan Modal Uaha KOSPE</h2>
                <div class="w-20 h-1 bg-brand-yellow mx-auto rounded-full mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-red transition duration-300">
                        <i data-lucide="shield-check" class="w-8 h-8 text-brand-red"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Tanpa Riba</h4>
                    <p class="text-sm text-gray-500">Skema Ijarah murni, tanpa denda keterlambatan yang bersifat ribawi,
                        dan
                        ujrah disepakati di awal.</p>
                </div>
                <!-- Card 2 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-orange transition duration-300">
                        <i data-lucide="banknote" class="w-8 h-8 text-brand-orange"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Angsuran Tetap</h4>
                    <p class="text-sm text-gray-500">Jumlah cicilan per bulan bersifat *flat* (tetap) hingga lunas,
                        sehingga
                        mudah mengatur *cashflow*.</p>
                </div>
                <!-- Card 3 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-brand-yellow transition duration-300">
                        <i data-lucide="clock" class="w-8 h-8 text-brand-yellow"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Proses Cepat</h4>
                    <p class="text-sm text-gray-500">Persetujuan pembiayaan maksimal 3 hari kerja setelah dokumen
                        tagihan
                        (invoice) divalidasi.</p>
                </div>
                <!-- Card 4 -->
                <div class="text-center group">
                    <div
                        class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 border-2 border-gray-100 group-hover:border-green-500 transition duration-300">
                        <i data-lucide="check-square" class="w-8 h-8 text-green-500"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Bayar Langsung</h4>
                    <p class="text-sm text-gray-500">KOSPE yang akan membayarkan tagihan langsung ke pihak sekolah atau
                        instansi tujuan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Format RAB (Rencana Anggaran Belanja) -->
    <section id="rab-section" class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Persiapan Dokumen</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Rencana Anggaran Belanja (RAB)</h2>
                <p class="text-gray-500 mt-3 max-w-2xl mx-auto">Untuk pengajuan pembiayaan, anggota diwajibkan
                    menyertakan
                    RAB yang detail agar peruntukan dana jelas dan tidak menyimpang dari prinsip syariah.</p>
            </div>

            <div class="bg-gray-50 rounded-[2rem] border border-gray-200 p-8 shadow-sm">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-xl text-gray-800">Contoh Format RAB Usaha Kuliner</h3>
                    <button
                        class="px-4 py-2 bg-gray-900 text-white text-sm font-bold rounded-lg hover:bg-black transition flex items-center gap-2">
                        <i data-lucide="download" class="w-4 h-4"></i> Download Template Excel
                    </button>
                </div>

                <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-brand-red/10 text-brand-red text-sm font-bold">
                                <th class="px-6 py-4 border-b border-gray-200">No</th>
                                <th class="px-6 py-4 border-b border-gray-200">Kebutuhan / Nama Barang</th>
                                <th class="px-6 py-4 border-b border-gray-200 text-center">Qty</th>
                                <th class="px-6 py-4 border-b border-gray-200 text-right">Harga Satuan</th>
                                <th class="px-6 py-4 border-b border-gray-200 text-right">Total Harga</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-gray-700 divide-y divide-gray-100">
                            <tr>
                                <td class="px-6 py-4">1</td>
                                <td class="px-6 py-4 font-medium">Mesin Espresso (Aset)</td>
                                <td class="px-6 py-4 text-center">1 Unit</td>
                                <td class="px-6 py-4 text-right">Rp 15.000.000</td>
                                <td class="px-6 py-4 text-right font-semibold">Rp 15.000.000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">2</td>
                                <td class="px-6 py-4 font-medium">Biji Kopi House Blend (Bahan Baku)</td>
                                <td class="px-6 py-4 text-center">20 Kg</td>
                                <td class="px-6 py-4 text-right">Rp 150.000</td>
                                <td class="px-6 py-4 text-right font-semibold">Rp 3.000.000</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">3</td>
                                <td class="px-6 py-4 font-medium">Sewa Tempat (Operasional 1 Thn)</td>
                                <td class="px-6 py-4 text-center">1 Ls</td>
                                <td class="px-6 py-4 text-right">Rp 25.000.000</td>
                                <td class="px-6 py-4 text-right font-semibold">Rp 25.000.000</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td colspan="4" class="px-6 py-4 text-right font-bold text-gray-900">Total Pengajuan
                                    Pembiayaan:</td>
                                <td class="px-6 py-4 text-right font-bold text-brand-red text-lg">Rp 43.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p class="text-xs text-gray-500 mt-4"><i data-lucide="info" class="w-4 h-4 inline-block mr-1"></i>
                    Catatan:
                    Pada akad Murabahah, Koperasi akan bertindak membelikan barang (contoh: Mesin Espresso & Biji Kopi)
                    lalu
                    menyerahkannya kepada Anda.</p>
            </div>
        </div>
    </section>

    <!-- 4. Syarat & Ketentuan Tab -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Persyaratan Pengajuan</h2>
                <div class="w-24 h-1.5 bg-brand-red mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden">
                <div class="flex border-b border-gray-100">
                    <button
                        class="w-1/2 py-5 text-center font-bold text-brand-red border-b-4 border-brand-red bg-red-50/50"
                        id="btn-syarat">Syarat Umum</button>
                    <button
                        class="w-1/2 py-5 text-center font-semibold text-gray-500 hover:text-brand-orange border-b-4 border-transparent hover:bg-gray-50 transition"
                        id="btn-berkas">Dokumen Usaha</button>
                </div>

                <div class="p-8">
                    <!-- Syarat Content -->
                    <div id="content-syarat" class="space-y-4 animate-fade-in-up">
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Status Keanggotaan</h4>
                                <p class="text-sm text-gray-600 mt-1">Telah menjadi anggota aktif KOSPE minimal selama 3
                                    bulan dan rutin membayar simpanan wajib.</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Lama Usaha</h4>
                                <p class="text-sm text-gray-600 mt-1">Usaha yang diajukan telah berjalan minimal 1 tahun
                                    (dibuktikan dengan survei lokasi).</p>
                            </div>
                        </div>
                        <div
                            class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition border border-transparent hover:border-gray-100">
                            <div class="bg-red-100 text-brand-red p-2 rounded-full mt-1"><i data-lucide="check"
                                    class="w-4 h-4"></i></div>
                            <div>
                                <h4 class="font-bold text-gray-800">Jenis Usaha Halal</h4>
                                <p class="text-sm text-gray-600 mt-1">Usaha tidak melanggar syariat Islam (tidak menjual
                                    miras, barang bajakan, atau bisnis spekulatif).</p>
                            </div>
                        </div>
                    </div>

                    <!-- Berkas Content -->
                    <div id="content-berkas" class="hidden space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                <h5 class="font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Dokumen
                                    Pemohon
                                </h5>
                                <ul class="space-y-3">
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file-text"
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi KTP & KK Pemohon</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file-text"
                                            class="w-4 h-4 text-gray-400"></i> Fotokopi KTP Pasangan (Jika menikah)</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="file-text"
                                            class="w-4 h-4 text-gray-400"></i> Buku Nikah</li>
                                </ul>
                            </div>
                            <div class="bg-gray-50 p-5 rounded-xl border border-gray-200">
                                <h5 class="font-bold text-brand-orange mb-4 border-b border-gray-200 pb-2">Legalitas &
                                    Keuangan Usaha</h5>
                                <ul class="space-y-3">
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i data-lucide="building"
                                            class="w-4 h-4 text-gray-400"></i> SKU (Surat Keterangan Usaha) / NIB</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i
                                            data-lucide="calculator" class="w-4 h-4 text-gray-400"></i> Dokumen RAB
                                        (Rencana Anggaran)</li>
                                    <li class="flex items-center gap-2 text-sm text-gray-700"><i
                                            data-lucide="credit-card" class="w-4 h-4 text-gray-400"></i> Mutasi
                                        Rekening/Buku Kas 3 Bulan Terakhir
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Kalkulator Simulasi (Murabahah) -->
    <section id="kalkulator" class="py-20 bg-gray-900 text-white relative overflow-hidden">
        <div
            class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-red rounded-full blur-[150px] opacity-20 -translate-y-1/2 -translate-x-1/4">
        </div>

        <div class="container mx-auto px-4 max-w-6xl relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

                <div class="lg:col-span-5 space-y-6">
                    <span class="text-brand-orange font-bold uppercase tracking-widest text-sm">Kalkulator</span>
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Simulasi Angsuran Modal</h2>
                    <p class="text-gray-400 text-lg mb-6">Gunakan kalkulator ini untuk mengestimasi cicilan per bulan.
                        Simulasi ini menggunakan skema <strong>Murabahah (Jual Beli)</strong> dengan margin tetap.</p>

                    <div class="bg-brand-red/20 border border-brand-red/30 p-5 rounded-2xl">
                        <p class="text-sm text-gray-300 flex items-start gap-2 mb-2">
                            <i data-lucide="info" class="w-5 h-5 flex-shrink-0 text-brand-red"></i>
                            Untuk skema Bagi Hasil (Mudharabah/Musyarakah), perhitungan tidak menggunakan angsuran
                            tetap,
                            melainkan persentase keuntungan usaha sesungguhnya. Silakan hubungi CS.
                        </p>
                    </div>
                </div>

                <!-- Calculator Form -->
                <div class="lg:col-span-7">
                    <div class="bg-white text-gray-800 rounded-[2rem] p-8 md:p-10 shadow-2xl">
                        <div class="space-y-6">

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Plafon Pembiayaan (Sesuai
                                    RAB)</label>
                                <div class="relative">

                                    <input type="number" id="input-plafond"
                                        class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-red focus:border-brand-red outline-none transition font-bold text-lg"
                                        value="50000000" step="1000000">
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">

                                <div class="bg-gray-50 border border-gray-200 rounded-xl p-4">
                                    <label class="block text-xs font-semibold text-gray-500 mb-1">Total Pembiayaan
                                        (Plafon +
                                        Margin)</label>
                                    <span id="display-total-hutang" class="font-bold text-lg text-brand-red">Rp 0</span>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-3">Pilih Tenor (Masa
                                    Cicilan)</label>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="6">6 Bulan</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition active-tenor bg-red-50 border-brand-red text-brand-red"
                                        data-val="12">12 Bulan</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="24">24 Bulan</button>
                                    <button
                                        class="tenor-btn py-2.5 border-2 border-gray-200 rounded-xl font-semibold text-gray-600 hover:border-brand-red hover:text-brand-red transition"
                                        data-val="36">36 Bulan</button>
                                </div>
                            </div>

                            <div class="bg-brand-red/5 p-6 rounded-2xl border border-brand-red/10 text-center mt-4">
                                <p class="text-sm text-gray-500 mb-1 font-medium">Estimasi Angsuran per Bulan</p>
                                <h3 class="text-4xl font-bold text-brand-red mb-2" id="result-angsuran">Rp 0</h3>
                                <p class="text-xs text-gray-400">Nilai di atas hanya simulasi. Margin riil ditentukan
                                    setelah survei.</p>
                            </div>

                            <a href="register-member.html"
                                class="block w-full text-center bg-brand-red text-white font-bold py-4 rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-200">
                                Ajukan Pembiayaan Sekarang
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 6. Foto Penerima Benefit (Testimonials) -->
    <section class="py-20 bg-white overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Cerita Sukses</span>
                    <h2 class="text-3xl font-bold text-gray-900 mt-2">UMKM Binaan KOSPE</h2>
                </div>
                <div class="flex gap-2">
                    <button
                        class="swiper-btn-prev w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center hover:bg-brand-red hover:text-white hover:border-brand-red transition"><i
                            data-lucide="chevron-left" class="w-6 h-6"></i></button>
                    <button
                        class="swiper-btn-next w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center hover:bg-brand-red hover:text-white hover:border-brand-red transition"><i
                            data-lucide="chevron-right" class="w-6 h-6"></i></button>
                </div>
            </div>

            <!-- Swiper Beneficiaries -->
            <div class="swiper benefitSwiper !overflow-visible">
                <div class="swiper-wrapper">
                    <!-- Item 1 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 group">
                            <div class="h-56 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Toko Kelontong">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-brand-red">
                                    Pembiayaan Barang</div>
                            </div>
                            <div class="p-6 relative">
                                <img src="https://i.pravatar.cc/150?img=32"
                                    class="w-16 h-16 rounded-full border-4 border-white absolute -top-8 right-6 shadow-sm"
                                    alt="Owner">
                                <h4 class="font-bold text-lg text-gray-900">Toko Kelontong Barokah</h4>
                                <p class="text-xs text-gray-500 mb-4">Ibu Siti Maimunah • Anggota sejak 2021</p>
                                <p class="text-gray-600 text-sm italic">"Alhamdulillah, KOSPE membantu saya menambah
                                    stok
                                    barang dagangan menjelang lebaran tanpa bunga yang mencekik. Cicilannya sangat pas
                                    dengan omset harian warung."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 group">
                            <div class="h-56 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1579541592065-0242201b17b0?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Konveksi">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-brand-orange">
                                    Bagi Hasil Modal</div>
                            </div>
                            <div class="p-6 relative">
                                <img src="https://i.pravatar.cc/150?img=11"
                                    class="w-16 h-16 rounded-full border-4 border-white absolute -top-8 right-6 shadow-sm"
                                    alt="Owner">
                                <h4 class="font-bold text-lg text-gray-900">Konveksi Santri Mandiri</h4>
                                <p class="text-xs text-gray-500 mb-4">Bpk. Ahmad Zaki • Anggota sejak 2020</p>
                                <p class="text-gray-600 text-sm italic">"Dengan sistem bagi hasil (Mudharabah), saya
                                    mendapat suntikan modal untuk beli 3 mesin jahit baru. Usaha maju, koperasi juga
                                    dapat
                                    untung. Adil dan berkah."</p>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="swiper-slide">
                        <div class="bg-gray-50 rounded-2xl overflow-hidden border border-gray-100 group">
                            <div class="h-56 overflow-hidden relative">
                                <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?q=80&w=600&auto=format&fit=crop"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                                    alt="Cafe">
                                <div
                                    class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-bold text-brand-yellow">
                                    Pembelian Aset</div>
                            </div>
                            <div class="p-6 relative">
                                <img src="https://i.pravatar.cc/150?img=59"
                                    class="w-16 h-16 rounded-full border-4 border-white absolute -top-8 right-6 shadow-sm"
                                    alt="Owner">
                                <h4 class="font-bold text-lg text-gray-900">Kedai Kopi Hijrah</h4>
                                <p class="text-xs text-gray-500 mb-4">Mas Reza • Anggota sejak 2023</p>
                                <p class="text-gray-600 text-sm italic">"Saya mengajukan RAB untuk beli alat roaster
                                    kopi.
                                    KOSPE yang belikan barangnya lalu saya cicil (Murabahah). Prosesnya cepat, usahanya
                                    jelas."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Mitra Kerjasama -->
    <section class="py-16 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4">
            <h3 class="text-center font-bold text-gray-400 uppercase tracking-widest text-sm mb-10">Mitra Kemitraan &
                Suplier Binaan</h3>

            <div class="swiper mitraSwiper">
                <div class="swiper-wrapper items-center">
                    <div class="swiper-slide">
                        <div
                            class="h-20 flex items-center justify-center grayscale hover:grayscale-0 opacity-50 hover:opacity-100 transition duration-300">
                            <span class="font-black text-2xl text-blue-800">Bank BSI</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="h-20 flex items-center justify-center grayscale hover:grayscale-0 opacity-50 hover:opacity-100 transition duration-300">
                            <span class="font-black text-2xl text-green-700">KADIN</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="h-20 flex items-center justify-center grayscale hover:grayscale-0 opacity-50 hover:opacity-100 transition duration-300">
                            <span class="font-black text-2xl text-orange-600">Pasar Induk</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="h-20 flex items-center justify-center grayscale hover:grayscale-0 opacity-50 hover:opacity-100 transition duration-300">
                            <span class="font-black text-2xl text-purple-700">Muamalat</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="h-20 flex items-center justify-center grayscale hover:grayscale-0 opacity-50 hover:opacity-100 transition duration-300">
                            <span class="font-black text-2xl text-red-600">Dinas Koperasi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            // Tabs Logic (Syarat & Berkas)
            $('#btn-syarat').click(function () {
                $(this).addClass('text-brand-red border-brand-red bg-red-50/50').removeClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#btn-berkas').removeClass('text-brand-red border-brand-red bg-red-50/50').addClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#content-syarat').show().addClass('animate-fade-in-up');
                $('#content-berkas').hide();
            });

            $('#btn-berkas').click(function () {
                $(this).addClass('text-brand-red border-brand-red bg-red-50/50').removeClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#btn-syarat').removeClass('text-brand-red border-brand-red bg-red-50/50').addClass('text-gray-500 hover:text-brand-orange border-transparent hover:bg-gray-50');
                $('#content-berkas').show().addClass('animate-fade-in-up');
                $('#content-syarat').hide();
            });

            // Swiper Testimonials (Beneficiaries)
            new Swiper(".benefitSwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: ".swiper-btn-next",
                    prevEl: ".swiper-btn-prev",
                },
                breakpoints: {
                    768: { slidesPerView: 2 },
                    1024: { slidesPerView: 2.5 },
                },
            });

            // Swiper Mitra
            new Swiper(".mitraSwiper", {
                slidesPerView: 2,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    640: { slidesPerView: 3 },
                    1024: { slidesPerView: 5 },
                },
            });

            // Calculator Logic (Modal Usaha Murabahah)
            let selectedTenor = 12;
            const marginRate = 0.015; // 1.5% margin per bulan (contoh simulasi)

            function calculateInstallment() {
                let plafond = parseFloat($('#input-plafond').val()) || 0;

                const formatIDR = (num) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(num);

                // Hitung Angsuran: (Plafond + (Plafond * Margin * Tenor)) / Tenor
                const totalMargin = plafond * marginRate * selectedTenor;
                const totalHutang = plafond + totalMargin;
                let angsuran = totalHutang / selectedTenor;

                if (plafond === 0) angsuran = 0;

                $('#display-total-hutang').text(formatIDR(totalHutang));
                $('#result-angsuran').text(formatIDR(angsuran));
            }

            // Bind Events Calculator
            $('#input-plafond').on('input change', calculateInstallment);

            $('.tenor-btn').click(function () {
                $('.tenor-btn').removeClass('bg-red-50 border-brand-red text-brand-red active-tenor');
                $(this).addClass('bg-red-50 border-brand-red text-brand-red active-tenor');
                selectedTenor = parseInt($(this).data('val'));
                calculateInstallment();
            });

            // Initial calc
            calculateInstallment();
        </script>
    @endpush
</div>