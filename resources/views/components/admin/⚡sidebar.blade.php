<?php

use Livewire\Component;

new class extends Component {
    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
};
?>

<div>
    <!-- Sidebar -->
    <aside id="sidebar"
        class="bg-white dark:bg-brand-card w-64 flex-shrink-0 border-r border-gray-200 dark:border-brand-border fixed md:static inset-y-0 left-0 transform -translate-x-full md:translate-x-0 z-50 sidebar-transition flex flex-col h-full">
        <!-- Logo -->
        <div
            class="h-20 flex items-center justify-center border-b border-gray-100 dark:border-brand-border px-4 transition-all">
            <a href="index.html" class="flex items-center gap-2 overflow-hidden whitespace-nowrap">
                <div
                    class="w-8 h-8 min-w-[2rem] bg-brand-red rounded-lg flex items-center justify-center text-white font-bold text-lg">
                    K</div>
                <span class="text-xl font-bold text-brand-red logo-text transition-opacity duration-300">KOSPE
                    Admin</span>
            </a>
        </div>

        <!-- Navigation -->
        <div class="flex-1 overflow-y-auto py-4 px-3 space-y-1">
            <p class="px-3 text-xs font-bold text-gray-400 uppercase tracking-wider mb-2 section-label">Utama</p>
            <a href="{{ route('dashboard') }}" wire:navigate
                class="{{ request()->routeIs('dashboard') ? 'active' : '' }} nav-item flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 transition group"
                title="Dashboard">
                <i data-lucide="layout-dashboard" class="w-5 h-5 flex-shrink-0"></i>
                <span class="nav-text">Dashboard</span>
            </a>
            <div class="menu-group {{ request()->routeIs('anggota', 'simpanan', 'pembiayaan') ? 'open' : '' }}">
                <button
                    class="nav-item flex items-center justify-between w-full gap-3 px-3 py-3 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 transition group submenu-toggle">
                    <div class="flex items-center gap-3">
                        <i data-lucide="users" class="w-5 h-5 flex-shrink-0"></i>
                        <span class="nav-text">Data Master</span>
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 nav-arrow transition-transform duration-200"></i>
                </button>
                <div class="submenu pl-10 space-y-1 mt-1">
                    <a href="{{ route('anggota') }}" wire:navigate
                        class="{{ request()->routeIs('anggota') ? 'active' : '' }} nav-item block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Data
                        Anggota</a>
                    <a href="{{ route('simpanan') }}" wire:navigate
                        class="{{ request()->routeIs('simpanan') ? 'active' : '' }} nav-item block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Data
                        Simpanan</a>
                    <a href="{{ route('pembiayaan') }}" wire:navigate
                        class="{{ request()->routeIs('pembiayaan') ? 'active' : '' }} nav-item block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Data
                        Pembiayaan</a>
                </div>
            </div>

            <a href="{{ route('reminder') }}" wire:navigate
                class="{{ request()->routeIs('reminder') ? 'active' : '' }} nav-item flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 transition group"
                title="Reminder">
                <i data-lucide="bell" class="w-5 h-5 flex-shrink-0"></i>
                <span class="nav-text">Sistem Remainder</span>
            </a>

            <p class="px-3 text-xs font-bold text-gray-400 uppercase tracking-wider mt-6 mb-2 section-label">
                Keuangan</p>

            <!-- Dropdown Menu: Transaksi -->
            <div class="menu-group">
                <button
                    class="nav-item flex items-center justify-between w-full gap-3 px-3 py-3 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 transition group submenu-toggle">
                    <div class="flex items-center gap-3">
                        <i data-lucide="wallet" class="w-5 h-5 flex-shrink-0"></i>
                        <span class="nav-text">Transaksi</span>
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 nav-arrow transition-transform duration-200"></i>
                </button>
                <div class="submenu pl-10 space-y-1 mt-1">
                    <a href="#"
                        class="block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Simpanan</a>
                    <a href="#"
                        class="block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Pembiayaan</a>
                    <a href="#"
                        class="block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Tarik
                        Tunai</a>
                </div>
            </div>

            <a href="#"
                class="nav-item flex items-center justify-between px-3 py-3 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 transition group"
                title="Pengajuan">
                <div class="flex items-center gap-3">
                    <i data-lucide="file-text" class="w-5 h-5 flex-shrink-0"></i>
                    <span class="nav-text">Pengajuan</span>
                </div>
                <span class="nav-text bg-brand-red text-white text-[10px] font-bold px-2 py-0.5 rounded-full">3</span>
            </a>

            <p class="px-3 text-xs font-bold text-gray-400 uppercase tracking-wider mt-6 mb-2 section-label">Sistem
            </p>

            <!-- Dropdown Menu: Pengaturan -->
            <div class="menu-group">
                <button
                    class="nav-item flex items-center justify-between w-full gap-3 px-3 py-3 rounded-lg text-sm font-medium text-gray-600 dark:text-gray-400 transition group submenu-toggle">
                    <div class="flex items-center gap-3">
                        <i data-lucide="settings" class="w-5 h-5 flex-shrink-0"></i>
                        <span class="nav-text">Pengaturan</span>
                    </div>
                    <i data-lucide="chevron-down" class="w-4 h-4 nav-arrow transition-transform duration-200"></i>
                </button>
                <div class="submenu pl-10 space-y-1 mt-1">
                    <a href="#"
                        class="block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Profil
                        Koperasi</a>
                    <a href="#"
                        class="block py-2 text-sm text-gray-500 dark:text-gray-400 hover:text-brand-red dark:hover:text-brand-red transition">Manajemen
                        User</a>
                </div>
            </div>
        </div>

        <!-- User Profile (Bottom Sidebar) -->
        <div
            class="p-4 border-t border-gray-200 dark:border-brand-border bg-gray-50 dark:bg-brand-darker transition-colors">
            <div class="flex items-center gap-3 overflow-hidden">
                <img src="https://i.pravatar.cc/150?img=68" alt="Admin"
                    class="w-10 h-10 flex-shrink-0 rounded-full border border-gray-300 dark:border-gray-600">
                <div class="flex-1 min-w-0 profile-text">
                    <p class="text-sm font-bold text-gray-900 dark:text-white truncate">Admin Pusat</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400 truncate">admin@kospe.id</p>
                </div>
                <button type="button" wire:click="logout"
                    class="text-gray-400 hover:text-brand-red transition profile-text" title="Keluar"><i
                        data-lucide="log-out" class="w-5 h-5"></i></button>
            </div>
        </div>
    </aside>
    @push('scripts')
        <script>
            // --- Sidebar & Mobile Menu Logic ---
            const sidebar = $('#sidebar');
            const mobileBtn = $('#mobile-menu-btn');
            const overlay = $('#sidebar-overlay');
            const desktopToggle = $('#desktop-sidebar-toggle');
            const body = $('body');
            const toggleIcon = $('#toggle-icon');

            // Mobile Toggle
            function toggleMobileSidebar() {
                const isClosed = sidebar.hasClass('-translate-x-full');
                if (isClosed) {
                    sidebar.removeClass('-translate-x-full');
                    overlay.removeClass('hidden');
                } else {
                    sidebar.addClass('-translate-x-full');
                    overlay.addClass('hidden');
                }
            }

            mobileBtn.click(toggleMobileSidebar);
            overlay.click(toggleMobileSidebar);

            // Desktop Sidebar Mini Toggle
            desktopToggle.click(function () {
                body.toggleClass('sidebar-mini');

                // Close all submenus when shrinking
                if (body.hasClass('sidebar-mini')) {
                    $('.submenu').slideUp(200);
                    $('.submenu-toggle i.nav-arrow').removeClass('rotate-180');
                    toggleIcon.removeClass('rotate-0').addClass('rotate-180'); // Rotate icon to point right
                } else {
                    toggleIcon.removeClass('rotate-180').addClass('rotate-0'); // Rotate icon to point left
                }
            });

            // Submenu Toggle Logic
            $('.submenu-toggle').click(function (e) {
                // If sidebar is mini, expand it first
                if (body.hasClass('sidebar-mini')) {
                    body.removeClass('sidebar-mini');
                    toggleIcon.removeClass('rotate-180').addClass('rotate-0');
                    // Slight delay to allow sidebar transition before expanding menu
                    setTimeout(() => {
                        $(this).next('.submenu').slideDown(200);
                        $(this).find('.nav-arrow').addClass('rotate-180');
                    }, 100);
                    return;
                }

                // Normal behavior
                e.preventDefault();
                const submenu = $(this).next('.submenu');
                const icon = $(this).find('.nav-arrow');

                // Close other submenus (Accordion style) - Optional
                // $('.submenu').not(submenu).slideUp(200);
                // $('.nav-arrow').not(icon).removeClass('rotate-180');

                submenu.slideToggle(200);
                icon.toggleClass('rotate-180');
            });


            // --- Dark Mode Logic ---
            const darkModeToggle = $('#dark-mode-toggle');

            // Check Local Storage or System Preference
            if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                $('html').addClass('dark');
            } else {
                $('html').removeClass('dark');
            }

            darkModeToggle.click(function () {
                $('html').toggleClass('dark');
                if ($('html').hasClass('dark')) {
                    localStorage.setItem('theme', 'dark');
                } else {
                    localStorage.setItem('theme', 'light');
                }

            });
        </script>
    @endpush
</div>