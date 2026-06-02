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
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Simpanan Keanggotaan KoSPE</h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">Wujud kontribusi Anggota terhadap perkembangan permodalan
                KOSPE</p>

            <!-- Breadcrumb -->
            <div class="mt-8 flex justify-center items-center gap-2 text-sm text-white/80">
                <a href="index.html" class="hover:text-white">Beranda</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white font-bold">Simpanan Anggota</span>
            </div>
        </div>
    </header>
    <!-- 2. Pengertian & Jumlah Setoran -->
    <section class="py-16 mt-10 relative z-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <!-- Card Simpanan Pokok -->
                <div
                    class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-brand-red transform transition hover:-translate-y-2">
                    <div class="w-16 h-16 bg-red-50 text-brand-red rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Simpanan Pokok</h3>
                    <p class="text-gray-600 min-h-[80px]">Sejumlah uang yang wajib dibayarkan oleh anggota kepada
                        koperasi pada saat pertama kali mendaftar. Simpanan ini merupakan bukti kepemilikan Anda di
                        KOSPE.
                    </p>

                    <div class="bg-gray-50 rounded-xl p-5 border border-gray-100 mb-6">
                        <span class="text-xs text-gray-500 font-bold uppercase tracking-wider block mb-1">Jumlah
                            Setoran</span>
                        <div class="text-3xl font-bold text-brand-red">Rp 80.000,-</div>
                        <span class="text-xs text-gray-400 mt-1 block">Dibayarkan 1x selama Jadi Anggota</span>
                    </div>

                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <i data-lucide="info" class="w-4 h-4 text-brand-red flex-shrink-0 mt-0.5"></i>
                            <span>Tidak dapat ditarik selama masih berstatus sebagai anggota.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i data-lucide="info" class="w-4 h-4 text-brand-red flex-shrink-0 mt-0.5"></i>
                            <span>Dapat dikembalikan jika mengundurkan diri.</span>
                        </li>
                    </ul>
                </div>

                <!-- Card Simpanan Wajib -->
                <div
                    class="bg-white rounded-2xl shadow-xl p-8 border-t-4 border-brand-orange transform transition hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-orange-50 text-brand-orange rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="calendar-clock" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Simpanan Wajib</h3>
                    <p class="text-gray-600 min-h-[80px]">Sejumlah uang yang wajib dibayarkan oleh anggota kepada
                        koperasi setiap bulannya secara rutin. Dana ini dikelola untuk unit-unit usaha yang dijalankan
                        KoSPE dan akan mendapatkan bagi hasil bagi para anggota
                    </p>

                    <div class="bg-gray-50 rounded-xl p-5 border border-gray-100 mb-6">
                        <span class="text-xs text-gray-500 font-bold uppercase tracking-wider block mb-1">Jumlah
                            Setoran</span>
                        <div class="text-3xl font-bold text-brand-orange">Rp 50.000,-</div>
                        <span class="text-xs text-gray-400 mt-1 block">Dibayarkan rutin setiap bulan</span>
                    </div>

                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <i data-lucide="info" class="w-4 h-4 text-brand-orange flex-shrink-0 mt-0.5"></i>
                            <span>Mendapatkan porsi pembagian Sisa Hasil Usaha (SHU) tahunan.</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <i data-lucide="info" class="w-4 h-4 text-brand-orange flex-shrink-0 mt-0.5"></i>
                            <span>Hanya dapat ditarik apabila keanggotaan berakhir.</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- 3. Syarat & Ketentuan -->
    <section class="py-16 bg-yellow-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-900">Keuntungan Menjadi Anggota KoSPE</h2>
                    <div class="w-20 h-1 bg-brand-yellow mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="bg-gray-50 p-6 md:p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <ol class="space-y-4 text-gray-700">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                1</div>
                            <p>Turut berkontribusi dalam Membangkitan perekonomian umat islam</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                2</div>
                            <p>Gratis biaya admin bulanan.</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                3</div>
                            <p>Membuka berbagai produk simpanan dan pembiayaan yang ada di KoSPE.</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                4</div>
                            <p>Mendaptkan bagi hasil SHU pertahun setelah RAT (Rapat anggota Tahunan).</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                5</div>
                            <p>Turut serta dalam Membantu sesama anggota kospe yang lain dan Mendapatkan info-info dan
                                pelatihan bisnis
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                6</div>
                            <p>Kemudahan dan transparansi dalam transaksi karena sudah system online, bisa di akses
                                kapan pun dan dimana pun melalui
                                aplikasi MyKoSPE
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                7</div>
                            <p>Akad sesuai syariah islam, bebas riba karena diawasi oleh Dewaan Syariah Nasional (DSN)
                                bersertifikasi
                            </p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                8</div>
                            <p>Mendapatkan bagi hasil untuk beberapa produk simpanan
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- 3. Syarat & Ketentuan -->
    <section class="py-16 bg-white border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-gray-900">Syarat & Ketentuan Keanggotaan</h2>
                    <div class="w-20 h-1 bg-brand-yellow mx-auto mt-4 rounded-full"></div>
                </div>

                <div class="bg-gray-50 p-6 md:p-8 rounded-2xl border border-gray-200 shadow-sm">
                    <ol class="space-y-4 text-gray-700">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                1</div>
                            <p>Warga Negara Indonesia (WNI) yang berdomisili di wilayah kerja KOSPE.</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                2</div>
                            <p>Mempunyai kemampuan penuh untuk melakukan tindakan hukum (dewasa/sudah menikah, minimal
                                usia
                                18 tahun).</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                3</div>
                            <p>Menyetujui landasan idiil, asas, dan prinsip koperasi syariah serta menyetujui Anggaran
                                Dasar
                                (AD) dan Anggaran Rumah Tangga (ART) KOSPE.</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                4</div>
                            <p>Melengkapi dokumen pendaftaran (Fotokopi KTP).</p>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-6 h-6 rounded-full bg-brand-red text-white flex items-center justify-center text-xs font-bold flex-shrink-0 mt-0.5">
                                5</div>
                            <p>Membayar lunas Simpanan Pokok dan Simpanan Wajib bulan pertama saat pendaftaran
                                disetujui.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Hak dan Kewajiban (Split Layout) -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Hak & Kewajiban Anggota</h2>
                <p class="text-gray-500 mt-2">Pahami peran Anda sebagai bagian dari keluarga besar KOSPE.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">

                <!-- Hak Anggota -->
                <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-green-500">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                        <i data-lucide="check-square" class="w-6 h-6 text-green-500"></i> Hak Anggota
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i data-lucide="check" class="list-icon-check text-green-500"></i>
                            <span class="text-gray-600 text-sm">Menghadiri, menyatakan pendapat, dan memberikan suara
                                dalam
                                Rapat Anggota Tahunan (RAT).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check" class="list-icon-check text-green-500"></i>
                            <span class="text-gray-600 text-sm">Memilih dan/atau dipilih menjadi anggota Pengurus atau
                                Pengawas Koperasi.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check" class="list-icon-check text-green-500"></i>
                            <span class="text-gray-600 text-sm">Meminta diadakan Rapat Anggota Luar Biasa (RALB) sesuai
                                dengan ketentuan yang berlaku.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check" class="list-icon-check text-green-500"></i>
                            <span class="text-gray-600 text-sm">Mendapatkan pelayanan yang sama (produk simpanan maupun
                                pembiayaan) dari Koperasi.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="check" class="list-icon-check text-green-500"></i>
                            <span class="text-gray-600 text-sm font-semibold">Mendapat bagian dari Sisa Hasil Usaha
                                (SHU)
                                secara proporsional sesuai aktivitas ekonomi di Koperasi.</span>
                        </li>
                    </ul>
                </div>

                <!-- Kewajiban Anggota -->
                <div class="bg-white p-8 rounded-2xl shadow-md border-t-4 border-brand-red">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                        <i data-lucide="alert-circle" class="w-6 h-6 text-brand-red"></i> Kewajiban Anggota
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3">
                            <i data-lucide="arrow-right" class="list-icon-check text-brand-red"></i>
                            <span class="text-gray-600 text-sm">Mematuhi Anggaran Dasar (AD), Anggaran Rumah Tangga
                                (ART),
                                dan keputusan Rapat Anggota.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="arrow-right" class="list-icon-check text-brand-red"></i>
                            <span class="text-gray-600 text-sm">Berpartisipasi aktif dalam kegiatan usaha Koperasi
                                (menabung
                                dan memanfaatkan pembiayaan).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="arrow-right" class="list-icon-check text-brand-red"></i>
                            <span class="text-gray-600 text-sm font-semibold">Menyetorkan Simpanan Wajib secara rutin
                                setiap
                                bulannya sesuai ketentuan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="arrow-right" class="list-icon-check text-brand-red"></i>
                            <span class="text-gray-600 text-sm">Melunasi cicilan pembiayaan tepat waktu jika memiliki
                                tanggungan pembiayaan.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i data-lucide="arrow-right" class="list-icon-check text-brand-red"></i>
                            <span class="text-gray-600 text-sm">Memelihara serta menjaga nama baik dan kebersamaan di
                                dalam
                                Koperasi.</span>
                        </li>
                    </ul>
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