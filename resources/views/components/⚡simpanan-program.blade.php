<?php

use Livewire\Component;
use App\Models\Produk;
use App\Models\Blogs;
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
        $produk = Produk::where('kategori', 1)->where('is_active', 1)->orderBy('img')->get();
        $post = [];
        foreach ($produk as $item) {
            $slug = strtolower(str_replace(' ', '-', $item->nama));
            $detail = Blogs::where('slug', $slug)->first();
            $post[] = (object) [
                'nama' => $item->nama,
                'icon' => $item->icon,
                'detail' => $detail,
                'subtitle' => $item->subtitle,
                'isi' => $detail ? $detail->isi : null,
                'img_big' => $item->img_big,
            ];
        }
        return $this->view([
            'produk' => $post ?? null,
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
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Mengenal KOSPE Lebih Dekat</h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">Sinergi Ekonomi Umat, Membangun Peradaban dengan Prinsip
                Syariah.</p>

            <!-- Breadcrumb -->
            <div class="mt-8 flex justify-center items-center gap-2 text-sm text-white/80">
                <a href="index.html" class="hover:text-white">Beranda</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white font-bold">Profil KoSPE</span>
            </div>
        </div>
    </header>
    <!-- 2. Accordion Program Simpanan -->
    <section class="py-20 bg-gray-50 relative z-10">
        <div class="absolute top-0 left-0 w-full h-full bg-pattern -z-10"></div>
        <div class="container mx-auto px-4 max-w-5xl">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Pilih Program Simpanan Anda</h2>
                <div class="w-24 h-1.5 bg-brand-orange mx-auto rounded-full mt-4"></div>
            </div>

            <!-- Accordion Container -->
            <div class="space-y-6">

                <!-- ITEM 1: Pendidikan -->
                @foreach ($produk as $item)
                    @if ($item->nama != 'Simpanan Pokok' && $item->nama != 'Simpanan Wajib')
                        <div class="bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden group">
                            <!-- Accordion Header -->
                            <button
                                class="accordion-header w-full flex items-center justify-between p-6 bg-white hover:bg-gray-50 transition cursor-pointer">
                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-14 h-14 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center flex-shrink-0">
                                        <img src="{{ $item->icon }}" alt="{{ $item->nama }}">
                                    </div>
                                    <div class="text-left">
                                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-brand-orange transition">
                                            {{ $item->nama }}
                                        </h3>
                                        <p class="text-sm text-gray-500">{{ $item->subtitle }}
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="bg-gray-100 p-2 rounded-full text-gray-500 icon-chevron transition-transform duration-300">
                                    <i data-lucide="chevron-down" class="w-5 h-5"></i>
                                </div>
                            </button>
                            <!-- Accordion Body -->
                            <div class="accordion-content border-t border-gray-100 bg-gray-50/50">
                                <div class="flex flex-col md:flex-row p-6 gap-8">
                                    <img src="/produk/{{ $item->img_big }}"
                                        class="w-full md:w-1/2 h-32 md:h-auto rounded-xl shadow-sm" alt="{{ $item->nama }}">
                                    <div class="flex-1 flex flex-col justify-center">

                                        <p class="text-sm text-gray-600 mb-4 leading-relaxed">
                                            {!! preg_replace('/Â+/', ' - ', html_entity_decode($item->isi)) !!}
                                        </p>

                                        <a href="#cara-daftar"
                                            class="inline-block text-center w-full md:w-auto px-6 py-2.5 bg-brand-orange text-white font-bold rounded-lg hover:bg-orange-700 transition shadow-md">Daftar
                                            Program Ini</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>
        </div>
    </section>

    <!-- 3. Cara Daftar Program -->
    <section id="cara-daftar" class="py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-brand-red font-bold uppercase tracking-wider text-sm">Mudah & Cepat</span>
                <h2 class="text-3xl font-bold text-gray-900 mt-2">Cara Mengikuti Program Simpanan</h2>
                <p class="text-gray-500 mt-3 max-w-2xl mx-auto">Untuk bergabung dengan Simpanan Program, pastikan Anda
                    telah
                    terdaftar sebagai Anggota Aktif KOSPE. Jika sudah, ikuti 3 langkah mudah ini.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative max-w-5xl mx-auto">
                <!-- Connector Line (Desktop) -->
                <div class="hidden md:block absolute top-12 left-[15%] w-[70%] h-1 bg-gray-100 -z-10"></div>

                <!-- Step 1 -->
                <div class="bg-white p-6 text-center relative">
                    <div
                        class="w-20 h-20 bg-brand-red/10 border-4 border-white text-brand-red rounded-full flex items-center justify-center mx-auto mb-6 z-10 shadow-md">
                        <i data-lucide="smartphone" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">1. Pilih Program</h4>
                    <p class="text-gray-500 text-sm">Buka aplikasi KOSPE Mobile, masuk ke menu 'Layanan Simpanan', dan
                        pilih
                        program yang Anda inginkan.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-6 text-center relative">
                    <div
                        class="w-20 h-20 bg-brand-orange/10 border-4 border-white text-brand-orange rounded-full flex items-center justify-center mx-auto mb-6 z-10 shadow-md">
                        <i data-lucide="file-check-2" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">2. Tentukan Target</h4>
                    <p class="text-gray-500 text-sm">Masukkan nominal target, durasi waktu (tenor), dan setujui akad
                        Mudharabah yang tertera di aplikasi.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-6 text-center relative">
                    <div
                        class="w-20 h-20 bg-brand-yellow/10 border-4 border-white text-brand-yellow rounded-full flex items-center justify-center mx-auto mb-6 z-10 shadow-md">
                        <i data-lucide="refresh-ccw" class="w-8 h-8"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-2">3. Setoran Rutin (Autodebet)</h4>
                    <p class="text-gray-500 text-sm">Setoran awal sukses. Untuk selanjutnya, Anda bisa mengatur fitur
                        autodebet dari Saldo Sukarela Anda.</p>
                </div>
            </div>


        </div>
    </section>

    <script>
        // --- ACCORDION LOGIC ---
        $('.accordion-header').click(function () {
            const content = $(this).next('.accordion-content');
            const icon = $(this).find('.icon-chevron');
            const parent = $(this).parent();

            // Check if currently open
            const isOpen = content.is(':visible');

            // Close all other accordions (Optional, if you want only 1 open at a time)
            $('.accordion-content').slideUp(300);
            $('.icon-chevron').removeClass('rotate-180 bg-brand-orange text-white').addClass('bg-gray-100 text-gray-500');
            $('.accordion-header').parent().removeClass('ring-2 ring-brand-orange/50'); // remove highlight border

            if (!isOpen) {
                // Open this accordion
                content.slideDown(300);
                icon.addClass('rotate-180 bg-brand-orange text-white').removeClass('bg-gray-100 text-gray-500');
                parent.addClass('ring-2 ring-brand-orange/50'); // Highlight active card
            }
        });

        // Open the first accordion by default
        $('.accordion-header').first().click();
    </script>
</div>