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
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Simpanan Sukarela</h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">Produk tabungan syariah yang memberikan fleksibilitas dan
                keuntungan bagi anggota KOSPE.</p>

            <!-- Breadcrumb -->
            <div class="mt-8 flex justify-center items-center gap-2 text-sm text-white/80">
                <a href="index.html" class="hover:text-white">Beranda</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white font-bold">Simpanan Sukarela</span>
            </div>
        </div>
    </header>
    <!-- 2. Pengertian Section -->
    <section class="py-16 bg-white border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Apa itu Simpanan Sukarela?</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        <strong>Simpanan Sukarela</strong> adalah produk tabungan unggulan dari Koperasi Syariah
                        Pesantren
                        (KOSPE) yang sifatnya tidak mengikat (bebas). Produk ini dirancang khusus menyerupai tabungan
                        bank
                        pada umumnya, namun dengan sistem pengelolaan yang dijamin 100% syariah dan terbebas dari unsur
                        riba.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Anda bebas menentukan jumlah setoran dan waktu menyetor. Sangat cocok digunakan untuk mengatur
                        *cash
                        flow* (arus kas) bulanan keluarga, menyimpan dana darurat, maupun sebagai rekening transaksi
                        utama
                        untuk membayar berbagai tagihan melalui KOSPE Mobile.
                    </p>
                </div>
                <!-- Image -->
                <div class="relative">
                    <div class="absolute -inset-4 bg-brand-yellow/20 rounded-[2rem] transform rotate-3 -z-10"></div>
                    <img src="https://damai-sejahtera.id/assets/image/images/2022/simpanan.jpg"
                        class="rounded-[2rem] shadow-xl w-full object-cover h-[350px]" alt="Mobile Banking">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Keunggulan Section -->
    <section class="py-16 bg-gray-50 relative z-10">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern -z-10"></div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Benefit Produk</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Keunggulan Simpanan Sukarela</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-green-50 text-green-500 rounded-xl flex items-center justify-center mb-5">
                        <i data-lucide="refresh-ccw" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Sangat Fleksibel</h3>
                    <p class="text-gray-500 text-sm">Tidak ada batasan waktu dan nominal minimum untuk melakukan setoran
                        rutin bulanan.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="w-14 h-14 bg-blue-50 text-blue-500 rounded-xl flex items-center justify-center mb-5">
                        <i data-lucide="shield-check" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Bebas Biaya Admin</h3>
                    <p class="text-gray-500 text-sm">Saldo Anda utuh 100%. Tidak ada potongan biaya administrasi bulanan
                        sama sekali.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div
                        class="w-14 h-14 bg-brand-orange/10 text-brand-orange rounded-xl flex items-center justify-center mb-5">
                        <i data-lucide="banknote" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Tarik Tunai Mudah</h3>
                    <p class="text-gray-500 text-sm">Dana bisa diambil kapan saja secara tunai di kantor cabang atau
                        transfer ke bank lain.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div
                        class="w-14 h-14 bg-brand-red/10 text-brand-red rounded-xl flex items-center justify-center mb-5">
                        <i data-lucide="gift" class="w-7 h-7"></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Deposit PPOB</h3>
                    <p class="text-gray-500 text-sm">Saldo dapat di gunakan untuk pembelian produk PPOB (pulsa, paket
                        data, token listrik) juga bisa untuk topup saldo E-wallet (Gopay, OVO, Dana, ShopeePay,
                        LinkAja), dan Bayar tagihan BPJS Telkom PDAM dll.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. Penjelasan Akad -->
    <section id="akad" class="py-16 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div
                class="bg-gradient-to-br from-brand-red to-red-900 rounded-[2rem] p-8 md:p-12 text-white shadow-2xl relative overflow-hidden">
                <!-- Decorative Elements -->
                <div
                    class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl transform translate-x-1/3 -translate-y-1/3">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-48 h-48 bg-brand-yellow opacity-10 rounded-full blur-2xl transform -translate-x-1/2 translate-y-1/2">
                </div>

                <div class="relative z-10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="p-3 bg-white/20 backdrop-blur rounded-xl">
                            <i data-lucide="book-open-check" class="w-8 h-8 text-white"></i>
                        </div>
                        <h2 class="text-3xl font-bold">Skema Akad Syariah</h2>
                    </div>

                    <h3 class="text-2xl font-bold text-brand-yellow mb-2">Wadiah Yad Dhamanah</h3>
                    <p class="text-red-100 mb-8 text-lg">"Titipan yang Menjamin Pengembalian"</p>

                    <div class="space-y-6">
                        <div>
                            <h4 class="font-bold text-lg border-b border-red-500/50 pb-2 mb-3">Pengertian Akad</h4>
                            <p class="text-white/90 leading-relaxed text-sm md:text-base">
                                Akad Wadiah Yad Dhamanah adalah akad penitipan dana dari anggota (disebut
                                <em>Muwwadi'</em>)
                                kepada Koperasi (disebut <em>Mustawda'</em>). Dalam akad ini, pihak Koperasi
                                diperbolehkan
                                untuk memanfaatkan atau mengelola dana titipan tersebut ke dalam berbagai unit bisnis
                                sektor
                                riil yang produktif dan halal.
                            </p>
                        </div>

                        <div>
                            <h4 class="font-bold text-lg border-b border-red-500/50 pb-2 mb-3">Konsekuensi Akad</h4>
                            <ul class="space-y-3 text-sm md:text-base text-white/90">
                                <li class="flex items-start gap-3">
                                    <i data-lucide="check-circle"
                                        class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5"></i>
                                    <span>Koperasi <strong>menjamin keamanan 100%</strong> seluruh dana yang dititipkan.
                                        Jika terjadi kerugian usaha, saldo anggota tidak akan berkurang.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i data-lucide="check-circle"
                                        class="w-5 h-5 text-green-400 flex-shrink-0 mt-0.5"></i>
                                    <span>Anggota berhak <strong>mengambil dana miliknya kapan saja</strong> tanpa ada
                                        penalti.</span>
                                </li>
                            </ul>
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