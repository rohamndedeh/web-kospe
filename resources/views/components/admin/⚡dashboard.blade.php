<?php

use Livewire\Component;

new class extends Component {
    public function render()
    {
        return $this->view()
            ->layout('layouts::admin');
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

    <!-- Content Scroll Area -->
    <div class="flex-1 overflow-y-auto p-6">

        <!-- Stats Widgets -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <!-- Card 1 -->
            <div
                class="bg-white dark:bg-brand-card p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border flex flex-col transition-all hover:-translate-y-1">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Total Aset</p>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Rp 12.5 M</h3>
                    </div>
                    <div class="p-2 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 rounded-lg">
                        <i data-lucide="banknote" class="w-6 h-6"></i>
                    </div>
                </div>
                <span class="text-xs text-green-600 dark:text-green-400 flex items-center gap-1 font-medium">
                    <i data-lucide="trending-up" class="w-3 h-3"></i> +12.5% bulan ini
                </span>
            </div>

            <!-- Card 2 -->
            <div
                class="bg-white dark:bg-brand-card p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border flex flex-col transition-all hover:-translate-y-1">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Anggota Aktif</p>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">5,234</h3>
                    </div>
                    <div class="p-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 rounded-lg">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>
                </div>
                <span class="text-xs text-blue-600 dark:text-blue-400 flex items-center gap-1 font-medium">
                    <i data-lucide="user-plus" class="w-3 h-3"></i> +45 pendaftar baru
                </span>
            </div>

            <!-- Card 3 -->
            <div
                class="bg-white dark:bg-brand-card p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border flex flex-col transition-all hover:-translate-y-1">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Pembiayaan Cair</p>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Rp 850 Jt</h3>
                    </div>
                    <div class="p-2 bg-brand-orange/10 dark:bg-brand-orange/20 text-brand-orange rounded-lg">
                        <i data-lucide="pie-chart" class="w-6 h-6"></i>
                    </div>
                </div>
                <span class="text-xs text-gray-500 dark:text-gray-400">Bulan Oktober 2025</span>
            </div>

            <!-- Card 4 -->
            <div
                class="bg-white dark:bg-brand-card p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border flex flex-col transition-all hover:-translate-y-1">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <p class="text-sm text-gray-500 dark:text-gray-400 mb-1">Menunggu Approval</p>
                        <h3 class="text-2xl font-bold text-brand-red">12</h3>
                    </div>
                    <div class="p-2 bg-red-100 dark:bg-red-900/30 text-brand-red rounded-lg">
                        <i data-lucide="alert-circle" class="w-6 h-6"></i>
                    </div>
                </div>
                <span class="text-xs text-brand-red font-medium">Butuh tindakan segera</span>
            </div>
        </div>

        <!-- Charts & Tables Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Chart -->
            <div
                class="lg:col-span-2 bg-white dark:bg-brand-card p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-lg text-gray-800 dark:text-white">Pertumbuhan Keuangan</h3>
                    <select
                        class="bg-gray-50 dark:bg-gray-700 border border-gray-200 dark:border-gray-600 text-xs rounded-lg px-3 py-2 focus:outline-none dark:text-gray-200">
                        <option>Tahun Ini</option>
                        <option>Bulan Ini</option>
                    </select>
                </div>
                <div class="h-72 w-full">
                    <canvas id="financeChart"></canvas>
                </div>
            </div>

            <!-- Recent Activity / Pending Approvals -->
            <div
                class="lg:col-span-1 bg-white dark:bg-brand-card p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border">
                <h3 class="font-bold text-lg text-gray-800 dark:text-white mb-4">Pengajuan Terbaru</h3>
                <div class="space-y-4">
                    <!-- Item 1 -->
                    <div
                        class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition cursor-pointer border border-transparent hover:border-gray-100 dark:hover:border-gray-600">
                        <div
                            class="w-10 h-10 rounded-full bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-400 flex items-center justify-center font-bold text-xs">
                            AM</div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-bold text-gray-900 dark:text-white truncate">Ahmad Muzaki</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400 truncate">Modal Usaha - Rp
                                15.000.000</p>
                        </div>
                        <span class="w-2 h-2 rounded-full bg-brand-red"></span>
                    </div>
                    <!-- Item 2 -->
                    <div
                        class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition cursor-pointer border border-transparent hover:border-gray-100 dark:hover:border-gray-600">
                        <div
                            class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 flex items-center justify-center font-bold text-xs">
                            BS</div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-bold text-gray-900 dark:text-white truncate">Budi Santoso</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400 truncate">Renovasi - Rp
                                25.000.000</p>
                        </div>
                        <span class="w-2 h-2 rounded-full bg-brand-red"></span>
                    </div>
                    <!-- Item 3 -->
                    <div
                        class="flex items-center gap-3 p-3 rounded-xl hover:bg-gray-50 dark:hover:bg-gray-700 transition cursor-pointer border border-transparent hover:border-gray-100 dark:hover:border-gray-600">
                        <div
                            class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 flex items-center justify-center font-bold text-xs">
                            SN</div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-bold text-gray-900 dark:text-white truncate">Siti Nurhaliza
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400 truncate">Haji - Pendaftaran Baru
                            </p>
                        </div>
                        <span class="w-2 h-2 rounded-full bg-gray-300 dark:bg-gray-600"></span>
                    </div>
                </div>
                <button class="w-full mt-4 text-sm text-brand-red font-bold hover:underline">Lihat Semua
                    Pengajuan</button>
            </div>
        </div>

        <!-- Recent Transactions Table -->
        <div
            class="mt-8 bg-white dark:bg-brand-card rounded-2xl shadow-sm border border-gray-100 dark:border-brand-border overflow-hidden">
            <div class="p-6 border-b border-gray-100 dark:border-brand-border flex justify-between items-center">
                <h3 class="font-bold text-lg text-gray-800 dark:text-white">Transaksi Terakhir</h3>
                <button class="text-gray-500 dark:text-gray-400 hover:text-brand-red"><i data-lucide="more-horizontal"
                        class="w-5 h-5"></i></button>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr
                            class="bg-gray-50 dark:bg-gray-700/50 text-gray-500 dark:text-gray-400 text-xs uppercase tracking-wider">
                            <th class="px-6 py-4 font-semibold">ID Transaksi</th>
                            <th class="px-6 py-4 font-semibold">Anggota</th>
                            <th class="px-6 py-4 font-semibold">Jenis</th>
                            <th class="px-6 py-4 font-semibold">Jumlah</th>
                            <th class="px-6 py-4 font-semibold">Tanggal</th>
                            <th class="px-6 py-4 font-semibold">Status</th>
                        </tr>
                    </thead>
                    <tbody
                        class="text-sm text-gray-700 dark:text-gray-300 divide-y divide-gray-100 dark:divide-gray-700">
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="px-6 py-4 font-mono text-xs opacity-70">#TRX-9001</td>
                            <td class="px-6 py-4 font-medium">Fitriani</td>
                            <td class="px-6 py-4"><span
                                    class="flex items-center gap-1 text-green-600 dark:text-green-400"><i
                                        data-lucide="arrow-down-left" class="w-3 h-3"></i> Setoran</span></td>
                            <td class="px-6 py-4 font-bold">Rp 500.000</td>
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400">24 Okt 2025</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs rounded-full font-bold">Berhasil</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="px-6 py-4 font-mono text-xs opacity-70">#TRX-9002</td>
                            <td class="px-6 py-4 font-medium">Joko Susilo</td>
                            <td class="px-6 py-4"><span
                                    class="flex items-center gap-1 text-red-600 dark:text-red-400"><i
                                        data-lucide="arrow-up-right" class="w-3 h-3"></i> Penarikan</span></td>
                            <td class="px-6 py-4 font-bold">Rp 1.200.000</td>
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400">24 Okt 2025</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 py-1 bg-yellow-100 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-400 text-xs rounded-full font-bold">Pending</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                            <td class="px-6 py-4 font-mono text-xs opacity-70">#TRX-9003</td>
                            <td class="px-6 py-4 font-medium">Koperasi Mart</td>
                            <td class="px-6 py-4"><span
                                    class="flex items-center gap-1 text-blue-600 dark:text-blue-400"><i
                                        data-lucide="shopping-cart" class="w-3 h-3"></i> Belanja</span></td>
                            <td class="px-6 py-4 font-bold">Rp 125.500</td>
                            <td class="px-6 py-4 text-gray-500 dark:text-gray-400">23 Okt 2025</td>
                            <td class="px-6 py-4"><span
                                    class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 text-xs rounded-full font-bold">Berhasil</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="h-8"></div> <!-- Bottom Spacer -->
    </div>

</div>