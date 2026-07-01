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
    <header class="relative pt-20 pb-32 overflow-hidden bg-brand-blue text-white">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1200&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-20 mix-blend-overlay" alt="Business Growth">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-blue via-brand-blue/90 to-transparent"></div>

        <div class="container mx-auto px-4 relative z-10 flex flex-col lg:flex-row items-center gap-12">
            <!-- Left Text Content -->
            <div class="lg:w-3/5 space-y-6 animate-fade-in-up">
                <span
                    class="inline-block py-1.5 px-4 rounded-full bg-white/10 border border-white/20 text-white font-bold text-xs uppercase tracking-widest backdrop-blur-sm">Program
                    Unggulan KOSPE</span>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                    AYO DAFTAR <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white">SIMPRO</span>
                </h1>
                <h2 class="text-xl md:text-2xl font-bold text-blue-200">SIMPANAN PRODUKTIF</h2>

                <p class="text-lg text-gray-200 max-w-xl leading-relaxed">
                    Cara Mudah Tingkatkan Asset Berkah Melimpah. Program untuk memproduktifkan dana anggota dengan bagi
                    hasil kompetitif setiap bulan.
                </p>

                <div class="flex flex-wrap gap-4 pt-4">
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-4 min-w-[200px]">
                        <p class="text-xs text-blue-200 uppercase tracking-wider mb-1 font-semibold">Bagi Hasil (ER
                            Setara)</p>
                        <p class="text-3xl font-black text-white">7,56% <span class="text-sm font-normal">/tahun</span>
                        </p>
                    </div>
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-4 min-w-[200px]">
                        <p class="text-xs text-blue-200 uppercase tracking-wider mb-1 font-semibold">Setoran Mulai Dari
                        </p>
                        <p class="text-3xl font-black text-white">Rp 5 Jt</p>
                    </div>
                </div>

                <div class="pt-6">
                    <button onclick="document.getElementById('kalkulator').scrollIntoView()"
                        class="px-8 py-4 bg-white text-brand-blue hover:bg-gray-100 rounded-full font-bold transition shadow-xl flex items-center gap-2 transform hover:-translate-y-1">
                        <i data-lucide="calculator" class="w-5 h-5"></i> Simulasikan Keuntungan
                    </button>
                </div>
            </div>

            <!-- Right Image Banner Representation -->
            <div class=" hidden md:block animate-float">
                <img src="https://www.smsfinance.co.id/lib/images/news/Cara-Meningkatkan-Omzet-Penjualan-UMKM.jpg"
                    class="w-full rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.5)] border-4 border-white/10"
                    alt="Banner SIMPRO">
            </div>
        </div>
    </header>

    <!-- 2. Pengertian & Keunggulan -->
    <section class="py-20 bg-gray-50 relative">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern-blue -z-10"></div>
        <div class="container mx-auto px-4 max-w-6xl">

            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-4">Mengapa Memilih SIMPRO?</h2>
                <div class="w-24 h-1.5 bg-brand-blue mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Point 1 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-blue-50 text-brand-blue rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-blue group-hover:text-white transition">
                        <i data-lucide="wallet" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Setoran Terjangkau</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Anda bisa mulai memproduktifkan dana dengan setoran mulai dari <strong>Rp 5.000.000,-</strong>.
                        Dana akan dikelola secara profesional.
                    </p>
                </div>

                <!-- Point 2 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-green-600 group-hover:text-white transition">
                        <i data-lucide="gift" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Promo Free Keanggotaan</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Khusus pendaftar SIMPRO, dapatkan <strong>Gratis biaya keanggotaan senilai Rp 130.000</strong>
                        (Simpanan Pokok Rp 80.000 + Simpanan Wajib awal Rp 50.000).
                    </p>
                </div>

                <!-- Point 3 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-orange-50 text-brand-orange rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-orange group-hover:text-white transition">
                        <i data-lucide="calendar-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Bagi Hasil Tiap Bulan</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nikmati keuntungan rutin. Bagi hasil dari pengelolaan dana usaha akan <strong>dibagikan setiap
                            bulan</strong> ke rekening utama Anda.
                    </p>
                </div>

                <!-- Point 4 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-purple-600 group-hover:text-white transition">
                        <i data-lucide="shield-check" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Sesuai Syariah</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Semua transaksi dan pengelolaan dana dijamin 100% menggunakan <strong>akad sesuai
                            syariah</strong>, bebas dari riba dan gharar.
                    </p>
                </div>

                <!-- Point 5 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-red-50 text-brand-red rounded-2xl flex items-center justify-center mb-6 group-hover:bg-brand-red group-hover:text-white transition">
                        <i data-lucide="ban" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Gratis Biaya Admin</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Saldo Anda akan bekerja maksimal tanpa potongan. KOSPE memberikan fasilitas <strong>Gratis biaya
                            admin bulanan</strong>.
                    </p>
                </div>

                <!-- Point 6 -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <div
                        class="w-16 h-16 bg-teal-50 text-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-teal-600 group-hover:text-white transition">
                        <i data-lucide="clock" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Jangka Waktu Ideal</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Dana diproduktifkan dengan jangka waktu <strong>minimal 12 bulan</strong>, memastikan investasi
                        berjalan stabil dan memberikan hasil optimal.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. Kalkulator Simulasi SIMPRO -->
    <section id="kalkulator" class="py-20 bg-white relative">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-brand-blue rounded-[3rem] p-8 md:p-12 shadow-2xl relative overflow-hidden text-white">
                <!-- Abstract decorations -->
                <div
                    class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2">
                </div>
                <div
                    class="absolute bottom-0 left-0 w-64 h-64 bg-brand-yellow opacity-10 rounded-full blur-2xl transform -translate-x-1/2 translate-y-1/2">
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 relative z-10 items-center">
                    <!-- Left: Info -->
                    <div class="space-y-6">
                        <h2 class="text-3xl md:text-4xl font-bold">Simulasi Bagi Hasil SIMPRO</h2>
                        <p class="text-blue-100 text-lg leading-relaxed">Hitung estimasi pertumbuhan aset Anda. Setoran
                            mulai dari Rp 5.000.000 dengan Equivalent Rate (ER) setara <strong>7,56% per tahun</strong>.
                        </p>

                        <div class="bg-white/10 border border-white/20 p-5 rounded-2xl">
                            <ul class="space-y-3">
                                <li class="flex items-start gap-3">
                                    <i data-lucide="check-circle"
                                        class="w-5 h-5 text-brand-yellow flex-shrink-0 mt-0.5"></i>
                                    <span class="text-sm">Minimum penempatan Rp 5 Juta.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i data-lucide="check-circle"
                                        class="w-5 h-5 text-brand-yellow flex-shrink-0 mt-0.5"></i>
                                    <span class="text-sm">Tenor minimal 12 Bulan (1 Tahun).</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <i data-lucide="check-circle"
                                        class="w-5 h-5 text-brand-yellow flex-shrink-0 mt-0.5"></i>
                                    <span class="text-sm">Bagi hasil dibayarkan setiap bulan.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right: Calculator App -->
                    <div class="bg-white text-gray-800 rounded-3xl p-8 shadow-xl">
                        <div class="space-y-6">

                            <!-- Input Nominal -->
                            <div>
                                <label class="block text-sm font-bold text-gray-700 mb-2">Masukkan Nominal
                                    Simpanan</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="text" id="input-nominal"
                                        class="w-full pl-12 pr-4 py-3.5 bg-gray-50 border border-gray-300 rounded-xl focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition font-bold text-xl"
                                        value="5.000.000">
                                </div>
                                <p id="error-msg" class="text-xs text-red-500 mt-2 hidden">Minimal setoran adalah Rp
                                    5.000.000</p>
                            </div>

                            <!-- Results Box -->
                            <div class="bg-blue-50 border border-blue-100 rounded-2xl p-5">
                                <p
                                    class="text-xs font-bold text-brand-blue uppercase tracking-wider mb-4 border-b border-blue-200 pb-2">
                                    Estimasi Keuntungan</p>

                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-sm text-gray-600 font-medium">ER Setara (p.a)</span>
                                    <span class="font-bold text-brand-blue text-lg">7,56%</span>
                                </div>

                                <div class="flex justify-between items-center mb-3">
                                    <span class="text-sm text-gray-600 font-medium">Bagi Hasil / Bulan</span>
                                    <span class="font-bold text-green-600 text-lg" id="result-monthly">Rp 0</span>
                                </div>

                                <div class="flex justify-between items-center pt-3 border-t border-blue-200">
                                    <span class="text-sm text-gray-800 font-bold">Total Bagi Hasil (1 Tahun)</span>
                                    <span class="font-black text-brand-blue text-xl" id="result-yearly">Rp 0</span>
                                </div>
                            </div>

                            <a href="#cara-daftar"
                                class="block w-full text-center bg-brand-orange text-white font-bold py-4 rounded-xl hover:bg-orange-600 transition shadow-lg">
                                Daftar SIMPRO Sekarang
                            </a>
                            <p class="text-[10px] text-center text-gray-400 italic mt-2">*Nilai di atas adalah estimasi
                                (Equivalent Rate) berdasarkan data historis dan dapat berubah sesuai kinerja usaha
                                KOSPE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Cara Daftar & Legalitas -->
    <section id="cara-daftar" class="py-20 bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <span class="text-brand-orange font-bold tracking-wider uppercase text-sm">Proses Cepat</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Cara Mendaftar Program SIMPRO</h2>
            </div>

            <div class="bg-white rounded-3xl shadow-lg border border-gray-100 p-8 md:p-12">
                <ol class="relative border-l-2 border-gray-200 ml-4 md:ml-6 space-y-10">

                    <li class="pl-8 relative">
                        <div
                            class="absolute w-8 h-8 bg-brand-blue rounded-full text-white font-bold flex items-center justify-center -left-4 top-0 border-4 border-white shadow-sm">
                            1</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Konsultasi / Hubungi Admin</h4>
                        <p class="text-gray-600">Hubungi layanan Call Center kami via WhatsApp atau datang langsung ke
                            Kantor Terdekat untuk mendapatkan formulir pendaftaran SIMPRO.</p>
                    </li>

                    <li class="pl-8 relative">
                        <div
                            class="absolute w-8 h-8 bg-brand-blue rounded-full text-white font-bold flex items-center justify-center -left-4 top-0 border-4 border-white shadow-sm">
                            2</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Penyetoran Dana</h4>
                        <p class="text-gray-600">Lakukan penyetoran awal (Minimal Rp 5 Juta) melalui transfer ke
                            rekening resmi KOSPE. Khusus promo ini, <strong>Gratis biaya pendaftaran keanggotaan Rp
                                130rb</strong>.</p>
                    </li>

                    <li class="pl-8 relative">
                        <div
                            class="absolute w-8 h-8 bg-brand-blue rounded-full text-white font-bold flex items-center justify-center -left-4 top-0 border-4 border-white shadow-sm">
                            3</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Penandatanganan Akad</h4>
                        <p class="text-gray-600">Pihak KOSPE akan memproses akad syariah. Setelah ditandatangani, dana
                            Anda akan mulai diproduktifkan dan bagi hasil akan ditransfer otomatis setiap bulannya.</p>
                    </li>
                    <li class="pl-8 relative">
                        <div
                            class="absolute w-8 h-8 bg-brand-blue rounded-full text-white font-bold flex items-center justify-center -left-4 top-0 border-4 border-white shadow-sm">
                            4</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-2">Penyerahan Warkat Simpro</h4>
                        <p class="text-gray-600">Setelah akad selesai, Anda akan menerima dokumen resmi SIMPRO yang
                            berisi detail transaksi dan syarat-syaratnya sebagai surat berharga yang disebut Waarkat
                            Simpro.</p>
                    </li>

                </ol>


            </div>

            <div class="mt-10 text-center flex items-center justify-center gap-4 opacity-70">
                <p class="text-sm font-bold text-gray-500 flex items-center gap-1"><i data-lucide="shield-check"
                        class="w-5 h-5 text-brand-blue"></i> Aman & Legal</p>
                <div class="w-1.5 h-1.5 rounded-full bg-gray-300"></div>
                <p class="text-sm font-medium text-gray-500">Badan Hukum : 30/BH/INDAGKOP/V/2012</p>
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

        // SIMPRO Calculator Logic
        const RATE_PA = 7.56; // 7.56% per tahun
        const MIN_DEPOSIT = 5000000;

        const inputNominal = $('#input-nominal');
        const errorMsg = $('#error-msg');
        const resMonthly = $('#result-monthly');
        const resYearly = $('#result-yearly');

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
    </script>
@endpush