<?php

use Livewire\Component;
use App\Models\Anggota;
use App\Models\SimpananWajib;
use App\Models\Pembiayaan;
use Livewire\WithPagination;
use Livewire\Attributes\On;

new class extends Component {
    use WithPagination;
    protected $paginationTheme = 'tailwind';
    public $target = 'ultah';
    protected $queryString = ['target'];
    public function render()
    {
        $anggota = Anggota::select('id', 'nm', 'tgllhr', 'hp', 'nocif')
            ->whereMonth('tgllhr', now()->month)
            ->whereDay('tgllhr', now()->day)
            ->paginate(10, '*', 'ultahPage');

        $sw = SimpananWajib::paginate(10, '*', 'simpananPage');
        $pemb = Pembiayaan::paginate(10, '*', 'pembiayaanPage');

        return $this->view([
            'anggota' => $anggota,
            'sw' => $sw,
            'pemb' => $pemb,
        ])->layout('layouts::admin');
    }

    #[On('setTab')]
    public function setTab($target)
    {
        $this->target = $target;
    }
};
?>

<div class="flex-1 flex flex-col h-full overflow-hidden bg-gray-50 dark:bg-brand-darker transition-colors duration-300">

    <!-- Top Header -->
    <header
        class="bg-white dark:bg-brand-card h-20 border-b border-gray-200 dark:border-brand-border flex items-center justify-between px-6 flex-shrink-0 transition-colors duration-300">
        <div class="flex items-center gap-4">
            <!-- Mobile Toggle -->
            <button id="mobile-menu-btn" class="md:hidden text-gray-600 dark:text-gray-300 hover:text-brand-red">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>

            <!-- Desktop Sidebar Toggle -->
            <button id="desktop-sidebar-toggle"
                class="hidden md:flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:bg-brand-red hover:text-white transition">
                <i data-lucide="chevron-left" class="w-5 h-5 transition-transform duration-300" id="toggle-icon"></i>
            </button>

            <h1 class="text-xl font-bold text-gray-800 dark:text-white hidden sm:block">Ringkasan Koperasi</h1>
        </div>

        <div class="flex items-center gap-4 md:gap-6">
            <!-- Search -->
            <div
                class="hidden md:flex items-center bg-gray-100 dark:bg-gray-700/50 rounded-full px-4 py-2 w-64 transition-colors">
                <i data-lucide="search" class="w-4 h-4 text-gray-400 mr-2"></i>
                <input type="text" placeholder="Cari data..."
                    class="bg-transparent border-none focus:outline-none text-sm w-full text-gray-700 dark:text-gray-200">
            </div>

            <!-- Dark Mode Toggle -->
            <button id="dark-mode-toggle"
                class="p-2 rounded-full text-gray-500 dark:text-yellow-400 hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                <i data-lucide="moon" class="w-5 h-5 hidden dark:block"></i>
                <!-- Icon for dark mode (shows moon when dark) -->
                <i data-lucide="sun" class="w-5 h-5 block dark:hidden"></i>
                <!-- Icon for light mode (shows sun when light) -->
            </button>

            <!-- Notifications -->
            <div class="relative">
                <button class="relative text-gray-500 dark:text-gray-300 hover:text-brand-red transition">
                    <i data-lucide="bell" class="w-6 h-6"></i>
                    <span
                        class="absolute top-0 right-0 w-2.5 h-2.5 bg-brand-orange rounded-full border-2 border-white dark:border-brand-card"></span>
                </button>
            </div>
        </div>
    </header>

    <div class="flex-1 overflow-y-auto p-6">

        <!-- Tabs Container -->
        <div
            class="bg-white dark:bg-brand-card rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border overflow-hidden">

            <!-- Tab Navigation -->
            <div class="flex border-b border-gray-100 dark:border-brand-border overflow-x-auto hide-scrollbar">
                <button data-tab="ultah"
                    class="reminder-tab {{ $target == 'ultah' ? ' text-brand-red border-brand-red font-bold' : 'text-gray-500 dark:text-gray-400 border-transparent font-medium' }} border-b-2  hover:text-brand-red  px-6 py-4 text-sm whitespace-nowrap transition"
                    data-target="#tab-ultah"><i data-lucide="cake" class="w-4 h-4 inline-block mr-1"></i> Ulang Tahun
                </button>
                <button data-tab="sw"
                    class="reminder-tab px-6 py-4 text-sm {{ $target == 'sw' ? ' text-brand-red border-brand-red font-bold' : 'text-gray-500 dark:text-gray-400 border-transparent font-medium' }} border-b-2  hover:text-brand-red whitespace-nowrap transition"
                    data-target="#tab-simpanan-wajib">
                    <i data-lucide="calendar-clock" class="w-4 h-4 inline-block mr-1"></i> Simpanan Wajib
                </button>
                <button data-tab="pemb"
                    class="reminder-tab px-6 py-4 text-sm {{ $target == 'pemb' ? ' text-brand-red border-brand-red font-bold' : 'text-gray-500 dark:text-gray-400 border-transparent font-medium' }} border-b-2  hover:text-brand-red whitespace-nowrap transition"
                    data-target="#tab-pembiayaan">
                    <i data-lucide="banknote" class="w-4 h-4 inline-block mr-1"></i> Angsuran Pembiayaan
                </button>
                <button data-tab="simp"
                    class="reminder-tab px-6 py-4 text-sm {{ $target == 'simp' ? ' text-brand-red border-brand-red font-bold' : 'text-gray-500 dark:text-gray-400 border-transparent font-medium' }} border-b-2 hover:text-brand-red whitespace-nowrap transition"
                    data-target="#tab-target">
                    <i data-lucide="target" class="w-4 h-4 inline-block mr-1"></i> Target Simpanan
                </button>
            </div>

            <!-- Tab Contents -->
            <div class="p-0">

                <!-- TAB 1: ULANG TAHUN -->
                <div id="tab-ultah" class="tab-pane {{ $target == 'ultah' ? 'block animate-fade-in-up' : 'hidden' }}">
                    <div
                        class="p-6 border-b border-gray-100 dark:border-brand-border bg-gray-50/50 dark:bg-brand-darker flex justify-between items-center">
                        <h3 class="font-bold text-gray-800 dark:text-white">Anggota Berulang Tahun (Hari Ini &
                            Mendatang)</h3>
                        <div class="relative">
                            <i data-lucide="search"
                                class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"></i>
                            <input type="text" placeholder="Cari nama..."
                                class="pl-9 pr-3 py-1.5 text-sm border border-gray-200 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-700 dark:text-gray-200 focus:outline-none focus:border-brand-red">
                        </div>
                    </div>
                    <div class="overflow-x-auto" wire:key="reminder-ultah">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 text-xs uppercase tracking-wider">
                                    <th class="px-6 py-4 font-semibold">Anggota</th>
                                    <th class="px-6 py-4 font-semibold">Tanggal Lahir</th>
                                    <th class="px-6 py-4 font-semibold">Usia</th>
                                    <th class="px-6 py-4 font-semibold">Status Notifikasi</th>
                                    <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody wire:loading.class="opacity-50"
                                class="text-sm text-gray-700 dark:text-gray-300 divide-y divide-gray-100 dark:divide-gray-700">
                                @foreach ($anggota as $a)
                                    <tr wire:key="anggota-{{ $a->id }}"
                                        class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div>
                                                    <p class="font-bold text-gray-900 dark:text-white">{{ $a->nm }}</p>
                                                    <p class="text-xs text-gray-500">ID: {{ $a->nocif }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4"><span
                                                class="text-brand-orange font-bold">{{ $a->tgllhr }}</span></td>
                                        <td class="px-6 py-4">{{  \Carbon\Carbon::parse($a->tgllhr)->age }} Tahun</td>
                                        <td class="px-6 py-4"><span
                                                class="px-2 py-1 bg-gray-100 dark:bg-gray-600 text-gray-600 dark:text-gray-300 text-xs rounded-full font-medium">Belum
                                                Dikirim</span></td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="p-2 bg-green-50 hover:bg-green-100 dark:bg-green-900/30 dark:hover:bg-green-900/50 text-green-600 dark:text-green-400 rounded-lg transition"
                                                title="Kirim WA Ucapan">
                                                <i data-lucide="message-circle" class="w-4 h-4"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="p-3">
                            {{ $anggota->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>
                </div>

                <!-- TAB 2: SIMPANAN WAJIB -->
                <div id="tab-simpanan-wajib"
                    class="tab-pane {{ $target == 'sw' ? 'block animate-fade-in-up' : 'hidden' }}">
                    <div
                        class="p-6 border-b border-gray-100 dark:border-brand-border bg-gray-50/50 dark:bg-brand-darker flex justify-between items-center">
                        <h3 class="font-bold text-gray-800 dark:text-white">Tunggakan Simpanan Wajib</h3>
                        <button
                            class="px-3 py-1.5 bg-white dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-sm rounded-lg hover:border-brand-red transition">
                            <i data-lucide="filter" class="w-4 h-4 inline-block mr-1"></i> Filter
                        </button>
                    </div>
                    <div class="overflow-x-auto" wire:key="reminder-sw">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 text-xs uppercase tracking-wider">
                                    <th class="px-6 py-4 font-semibold">Anggota</th>
                                    <th class="px-6 py-4 font-semibold">Tgl. Daftar</th>
                                    <th class="px-6 py-4 font-semibold">Saldo Akhir</th>
                                    <th class="px-6 py-4 font-semibold">Status/Badge</th>
                                    <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody wire:loading.class="opacity-50"
                                class="text-sm text-gray-700 dark:text-gray-300 divide-y divide-gray-100 dark:divide-gray-700">
                                @foreach ($sw as $s)
                                    <tr wire:key="sw-{{ $s->id }}"
                                        class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                        <td class="px-6 py-4">
                                            <p class="font-bold text-gray-900 dark:text-white">{{ $s->fnama }}</p>
                                            <p class="text-xs text-gray-500">ID: {{ $s->nocif }}</p>
                                        </td>
                                        <td class="px-6 py-4 font-medium text-brand-red">{{ $s->tgl_reg }}</td>
                                        <td class="px-6 py-4 font-bold text-gray-900 dark:text-white">
                                            {{ formatRupiah($s->sahirrp) }}
                                        </td>
                                        <td class="px-6 py-4"><span
                                                class="px-2 py-1 bg-red-100 dark:bg-red-900/30 text-red-700 dark:text-red-400 text-xs rounded-full font-bold">Perlu
                                                Tindakan</span></td>
                                        <td class="px-6 py-4 text-right flex justify-end gap-2">
                                            <button
                                                class="p-2 bg-green-50 hover:bg-green-100 dark:bg-green-900/30 dark:hover:bg-green-900/50 text-green-600 dark:text-green-400 rounded-lg transition"
                                                title="Kirim Tagihan via WA">
                                                <i data-lucide="message-circle" class="w-4 h-4"></i>
                                            </button>
                                            <button
                                                class="p-2 bg-blue-50 hover:bg-blue-100 dark:bg-blue-900/30 dark:hover:bg-blue-900/50 text-blue-600 dark:text-blue-400 rounded-lg transition"
                                                title="Kirim Email">
                                                <i data-lucide="mail" class="w-4 h-4"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-3">
                            {{ $sw->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>
                </div>

                <!-- TAB 3: PEMBIAYAAN -->
                <div id="tab-pembiayaan"
                    class="tab-pane {{ $target == 'pemb' ? 'block animate-fade-in-up' : 'hidden' }}">
                    <div
                        class="p-6 border-b border-gray-100 dark:border-brand-border bg-gray-50/50 dark:bg-brand-darker flex justify-between items-center">
                        <h3 class="font-bold text-gray-800 dark:text-white">Jatuh Tempo Angsuran Pembiayaan</h3>
                    </div>
                    <div class="overflow-x-auto" wire:key="reminder-sw">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 text-xs uppercase tracking-wider">
                                    <th class="px-6 py-4 font-semibold">Anggota / Akad</th>
                                    <th class="px-6 py-4 font-semibold">Sisa Tenor</th>
                                    <th class="px-6 py-4 font-semibold">Nominal /Bulan</th>
                                    <th class="px-6 py-4 font-semibold">Jatuh Tempo</th>
                                    <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody wire:loading.class="opacity-50"
                                class="text-sm text-gray-700 dark:text-gray-300 divide-y divide-gray-100 dark:divide-gray-700">
                                @foreach ($pemb as $p)
                                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                        <td class="px-6 py-4">
                                            <p class="font-bold text-gray-900 dark:text-white">{{ $p->nama }}</p>
                                            <p class="text-xs text-gray-500">No Kontrak : {{ $p->nokontrak }}</p>
                                        </td>
                                        <td class="px-6 py-4">12 / 24 Bulan</td>
                                        <td class="px-6 py-4 font-bold text-gray-900 dark:text-white">Rp 1.250.000</td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2 text-brand-red font-bold">
                                                <i data-lucide="alert-triangle" class="w-4 h-4"></i> Hari Ini (23 Feb)
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button
                                                class="px-3 py-1.5 bg-brand-orange text-white text-xs font-bold rounded hover:bg-orange-600 transition shadow-sm">
                                                Kirim Notif H-1
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="p-3">
                            {{ $pemb->links(data: ['scrollTo' => false]) }}
                        </div>
                    </div>
                </div>

                <!-- TAB 4: TARGET SIMPANAN -->
                <div id="tab-target" class="tab-pane {{ $target == 'simp' ? 'block animate-fade-in-up' : 'hidden' }}">
                    <div
                        class="p-6 border-b border-gray-100 dark:border-brand-border bg-gray-50/50 dark:bg-brand-darker flex justify-between items-center">
                        <h3 class="font-bold text-gray-800 dark:text-white">Motivasi & Target Simpanan Anggota</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 text-xs uppercase tracking-wider">
                                    <th class="px-6 py-4 font-semibold">Anggota</th>
                                    <th class="px-6 py-4 font-semibold">Produk / Tujuan</th>
                                    <th class="px-6 py-4 font-semibold">Progres Dana</th>
                                    <th class="px-6 py-4 font-semibold">Status Aktifitas</th>
                                    <th class="px-6 py-4 font-semibold text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody
                                class="text-sm text-gray-700 dark:text-gray-300 divide-y divide-gray-100 dark:divide-gray-700">
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                    <td class="px-6 py-4">
                                        <p class="font-bold text-gray-900 dark:text-white">Keluarga Bapak Ilham</p>
                                        <p class="text-xs text-gray-500">ID: AGT-0422</p>
                                    </td>
                                    <td class="px-6 py-4 font-medium">Tabungan Qurban 2026</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-between text-xs mb-1">
                                            <span>Rp 1.5 Jt</span>
                                            <span>Target: Rp 3.5 Jt</span>
                                        </div>
                                        <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-1.5">
                                            <div class="bg-brand-yellow h-1.5 rounded-full" style="width: 42%"></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-1 bg-red-50 text-brand-red dark:bg-red-900/30 text-xs rounded-full font-medium">Pasif
                                            > 2 Bulan</span></td>
                                    <td class="px-6 py-4 text-right flex justify-end gap-2">
                                        <button
                                            class="p-2 bg-green-50 hover:bg-green-100 dark:bg-green-900/30 dark:hover:bg-green-900/50 text-green-600 dark:text-green-400 rounded-lg transition"
                                            title="Kirim Motivasi Menabung WA">
                                            <i data-lucide="message-circle" class="w-4 h-4"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="h-8"></div>
    </div>
    @push('scripts')
        <script>
            $(document).on('click', '.reminder-tab', function () {

                const tab = $(this).data('tab');

                // kirim ke Livewire agar tersimpan
                Livewire.dispatch('setTab', { target: tab });
            });
        </script>
    @endpush


</div>