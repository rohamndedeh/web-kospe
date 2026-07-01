<?php

use Livewire\Component;

new class extends Component {
    public $mitra;
    public $marketing;

    public function render()
    {
        $marketing = session('marketing');
        return $this->view([
            'marketing' => $marketing
        ]);
    }
};
?>

<div>
    <!-- 8. CTA Hubungi Kami -->
    {{-- <section class="py-16 bg-gradient-to-r from-brand-red to-brand-orange text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Butuh Bantuan Lebih Lanjut?</h2>
            <p class="mb-8 text-lg text-white/90">Tim kami siap membantu Anda menjawab segala pertanyaan mengenai produk
                dan layanan KOSPE.</p>
            <div class="flex flex-col md:flex-row justify-center gap-6">
                <a href="https://wa.me/{{ session('hp') ?? '628118807177' }}"
                    class="flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 px-6 py-3 rounded-lg font-bold shadow-lg transition">
                    <i data-lucide="message-circle" class="w-5 h-5"></i> WhatsApp
                </a>

                <a href="{{ route('daftar-anggota') }}"
                    class="flex items-center justify-center gap-2 bg-transparent border-2 border-white hover:bg-white hover:text-brand-red px-6 py-3 rounded-lg font-bold transition">
                    <i data-lucide="user" class="w-5 h-5"></i> Daftar Anggota
                </a>
            </div>

            <div class="mt-8 pt-8 border-t border-white/20">
                <p class="flex items-center justify-center gap-2">
                    <i data-lucide="map-pin" class="w-5 h-5"></i>
                    Kantor Pusat : Prima Harapan Regensi, Ruko Hybridhome Blok SB1 No.1, Bekasi Utara Kota Bekasi
                </p>
            </div>
        </div>
    </section> --}}

    <!-- 9. Big Footer -->
    <footer class="bg-gray-900 text-gray-300 pt-16 pb-8 border-t-4 border-brand-yellow">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Column 1 -->
                <div class="text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start gap-2 mb-4">
                        <div
                            class="w-10 h-10 bg-brand-red rounded flex items-center justify-center text-white font-bold">
                            K
                        </div>
                        <span class="text-2xl font-bold text-white">KOSPE</span>
                    </div>
                    <p class="text-sm leading-relaxed mb-4">
                        Koperasi Syariah Pesantren berkomitmen untuk memajukan ekonomi umat melalui sistem keuangan yang
                        syar'i, adil, dan transparan.
                    </p>
                    <p class="text-sm text-gray-500">&copy; 2026 KOSPE. All rights reserved.</p>
                </div>

                <!-- Column 2 -->
                <div class="text-center md:text-left">
                    <h4 class="text-white font-bold text-lg mb-6">Tautan Cepat</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('profil') }}" class="hover:text-brand-orange transition">Tentang Kami</a>
                        </li>
                        <li><a href="#" class="hover:text-brand-orange transition">Produk & Layanan</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition">Pembiayaan</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition">Berita & Artikel</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition">MyKoSPE</a></li>
                        <li><a href="#" class="hover:text-brand-orange transition">Karir</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="text-center md:text-left">
                    <h4 class="text-white font-bold text-lg mb-6">Ikuti Kami</h4>
                    <div class="flex justify-center md:justify-start gap-4">
                        <a href="https://web.facebook.com/koperasisyariah.pe.id/"
                            class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-red transition"><i
                                data-lucide="facebook" class="w-5 h-5"></i></a>
                        <a href="https://www.instagram.com/kospe.id/"
                            class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-orange transition"><i
                                data-lucide="instagram" class="w-5 h-5"></i></a>
                        <a href="https://www.youtube.com/@koperasisyariahpe"
                            class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-brand-red transition"><i
                                data-lucide="youtube" class="w-5 h-5"></i></a>
                        <a href="https://www.tiktok.com/@kospe.id"
                            class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-black transition"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-tiktok" viewBox="0 0 16 16">
                                <path
                                    d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                            </svg></a>
                    </div>
                </div>
                <div class="text-center md:text-left">
                    @if (session('marketing'))
                        <h4 class="text-white font-bold text-lg mb-6">Mitra KoSPE Anda</h4>
                        <img class="w-32 pb-4 mx-auto md:mx-0" src="https://cdn-icons-png.flaticon.com/512/428/428573.png"
                            alt="">
                        <p class="text-sm leading-relaxed mb-1">
                            {{ session('marketing') }}
                        </p>
                        <p class="text-sm text-gray-500">Id KoSPE : {{ session('id_kospe') }}</p>
                    @endif
                </div>
            </div>
        </div>
    </footer>

    <!-- 10. Floating WhatsApp Admin -->
    <a href="https://api.whatsapp.com/send/?phone={{ session('hp') ?? '628118807177' }}&text=saya+mau+daftar+jadi+anggota"
        class="fixed bottom-6 right-6 z-50 bg-green-500 text-white p-4 rounded-full shadow-2xl hover:bg-green-600 transition transform hover:scale-110 animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
            viewBox="0 0 16 16">
            <path
                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
        </svg>
    </a>

    <!-- 11. Notifikasi Melayang Kiri Bawah -->
    <div id="notification-toast"
        class="fixed bottom-6 left-16 md:left-20 z-40 bg-white border-l-4 border-brand-orange p-3 rounded shadow-xl flex items-center gap-3 max-w-[250px] transform translate-y-20 opacity-0 transition-all duration-500">
        <div class="bg-gray-100 rounded-full p-2">
            <i data-lucide="user" class="w-4 h-4 text-gray-600"></i>
        </div>
        <div class="text-xs">
            <p class="font-bold text-gray-800" id="notif-name">Ahmad Fulan</p>
            <p class="text-gray-500">Baru saja mendaftar <span class="text-brand-red" id="notif-product">Haji
                    Khusus</span>
            </p>
        </div>
    </div>

    <!-- 12. Floating Social Media (Vertical Left) -->
    <div
        class="fixed top-1/2 left-0 transform -translate-y-1/2 z-50 flex flex-col gap-1 floating-social hidden md:flex">
        <a href="https://www.facebook.com/koperasisyariah.pe.id/"
            class="bg-[#1877F2] text-white p-3 w-12 hover:w-32 h-12 flex items-center gap-3 overflow-hidden transition-all duration-300 rounded-r">
            <i data-lucide="facebook" class="w-6 h-6 flex-shrink-0"></i>
            <span class="whitespace-nowrap font-bold text-sm">Facebook</span>
        </a>
        <a href="https://www.instagram.com/kospe.id/"
            class="bg-[#E4405F] text-white p-3 w-12 hover:w-32 h-12 flex items-center gap-3 overflow-hidden transition-all duration-300 rounded-r">
            <i data-lucide="instagram" class="w-6 h-6 flex-shrink-0"></i>
            <span class="whitespace-nowrap font-bold text-sm">Instagram</span>
        </a>
        <a href="https://api.whatsapp.com/send/?phone=628118807177&text=saya+mau+daftar+jadi+anggota"
            class="bg-[#0ad146] text-white p-3 w-12 hover:w-32 h-12 flex items-center gap-3 overflow-hidden transition-all duration-300 rounded-r">
            <i data-lucide="message-circle" class="w-6 h-6 flex-shrink-0"></i> <!-- WhatsApp Icon -->
            <span class="whitespace-nowrap font-bold text-sm">WhatsApp</span>
        </a>
        <a href="https://studio.youtube.com/channel/UCK3w0vt-qPL_ygNNswh0F4w"
            class="bg-[#FF0000] text-white p-3 w-12 hover:w-32 h-12 flex items-center gap-3 overflow-hidden transition-all duration-300 rounded-r">
            <i data-lucide="youtube" class="w-6 h-6 flex-shrink-0"></i>
            <span class="whitespace-nowrap font-bold text-sm">YouTube</span>
        </a>
    </div>
    @push('scripts')
        <script>
            setTimeout(function () {
                $('#loader').fadeOut('slow');
                // Show Popup after loader
                setTimeout(function () {
                    $('#promo-popup').removeClass('hidden').fadeIn();
                    $('#popup-content').removeClass('scale-0').addClass('scale-100');
                }, 1000);
            }, 1500);

            // 13. Popup Logic
            $('#close-popup').click(function () {
                $('#popup-content').removeClass('scale-100').addClass('scale-0');
                setTimeout(function () {
                    $('#promo-popup').fadeOut();
                }, 300);
            });

            // 1. Banner Promo Slider
            let currentPromo = 0;
            const promoItems = $('.promo-item');
            setInterval(function () {
                $(promoItems[currentPromo]).fadeOut(500, function () {
                    currentPromo = (currentPromo + 1) % promoItems.length;
                    $(promoItems[currentPromo]).fadeIn(500);
                });
            }, 10000);

            // 3. Hero Swiper
            var swiper = new Swiper(".heroSwiper", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            var mitraSwiper = new Swiper(".mitraSwiper", {
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                slidesPerView: 2,
                breakpoints: {
                    640: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 5,
                    },
                },
                spaceBetween: 20,
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            // 6. Tab Navbar
            $('.tab-btn').click(function () {
                // Remove active class from all buttons
                $('.tab-btn').removeClass('active bg-brand-red text-white').addClass('bg-white text-gray-600 border border-gray-300');
                // Add active class to clicked button
                $(this).removeClass('bg-white text-gray-600 border border-gray-300').addClass('bg-brand-red text-white');

                // Hide all content
                $('.tab-content').addClass('hidden');
                // Show target content
                $($(this).data('target')).removeClass('hidden').addClass('block animate-fade-in');
            });

            // 7. FAQ Accordion
            $('.faq-btn').click(function () {
                const content = $(this).next();
                const icon = $(this).find('i');

                // Close other items
                $('.faq-content').not(content).slideUp();
                $('.faq-btn i').not(icon).removeClass('rotate-180');

                // Toggle current
                content.slideToggle();
                icon.toggleClass('rotate-180');
            });

            const mobileMenu = $('#mobile-menu');
            const body = $('body');

            $('#mobile-menu-btn').click(function () {
                mobileMenu.removeClass('hidden');
                setTimeout(function () {
                    mobileMenu.removeClass('translate-x-full opacity-0').addClass('translate-x-0 opacity-100');
                }, 10);
                body.addClass('overflow-hidden');
            });

            $('#close-mobile-menu').click(function () {
                mobileMenu.removeClass('translate-x-0 opacity-100').addClass('translate-x-full opacity-0');
                setTimeout(function () { mobileMenu.addClass('hidden'); }, 300);
                body.removeClass('overflow-hidden');
            });
        </script>
    @endpush
</div>