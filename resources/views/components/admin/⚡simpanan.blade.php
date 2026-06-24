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
                +
                <i data-lucide="sun" class="w-5 h-5 block dark:hidden"></i>

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
                    data-target="#tab-ultah"><i data-lucide="cake" class="w-4 h-4 inline-block mr-1"></i> Daftar Anggota
                </button>

            </div>

            <!-- Tab Contents -->
            <div class="p-0">

                <!-- TAB 1: ULANG TAHUN -->
                <div id="tab-ultah" class="tab-pane {{ $target == 'ultah' ? 'block animate-fade-in-up' : 'hidden' }}">
                    <div
                        class="p-6 border-b border-gray-100 dark:border-brand-border bg-gray-50/50 dark:bg-brand-darker flex justify-between items-center">
                        <h3 class="font-bold text-gray-800 dark:text-white">Daftar Anggota Koperasi Syariah Pesantren
                            Entrepreneuer</h3>
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
                                        <td class="px-6 py-4">{{  $a->tgllhr }} Tahun</td>
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