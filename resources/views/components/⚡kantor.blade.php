<?php

use Livewire\Component;

new class extends Component {
    //
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
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Kantor KoSPE</h1>
            <p class="text-xl text-white/90 max-w-2xl mx-auto">Silahkan hadir ke Kantor Kami, kami tunggu kedatangan
                Anda</p>

            <!-- Breadcrumb -->
            <div class="mt-8 flex justify-center items-center gap-2 text-sm text-white/80">
                <a href="{{ route('home') }}" class="hover:text-white">Beranda</a>
                <i data-lucide="chevron-right" class="w-4 h-4"></i>
                <span class="text-white font-bold">Kantor KoSPE</span>
            </div>
        </div>
    </header>
    <!-- 2. Main Layout (Alamat & Form Daftar Tamu) -->
    <section class="py-16 bg-white relative z-20 -mt-10 rounded-t-[3rem] shadow-[0_-10px_40px_rgba(0,0,0,0.1)]">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 max-w-6xl mx-auto">

                <!-- Kiri: Info Kontak & Google Maps -->
                <div class="lg:col-span-7 space-y-8">


                    <!-- Card Info -->
                    <div class="grid sm:grid-cols-2 gap-4">
                        <div
                            class="bg-gray-50 p-6 rounded-2xl border border-gray-100 flex items-start gap-4 hover:shadow-md transition">
                            <div class="bg-red-100 text-brand-red p-3 rounded-xl flex-shrink-0">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Alamat Lengkap</h4>
                                <p class="text-sm text-gray-600 leading-relaxed">Kantor Pusat KoSPE <br> Prima Harapan
                                    Regensi, Ruko Hybridhome Blok SB1 No.1, Bekasi Utara Kota Bekasi 17142 </p>
                            </div>
                        </div>

                        <div
                            class="bg-gray-50 p-6 rounded-2xl border border-gray-100 flex items-start gap-4 hover:shadow-md transition">
                            <div class="bg-orange-100 text-brand-orange p-3 rounded-xl flex-shrink-0">
                                <i data-lucide="clock" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">Jam Operasional</h4>
                                <p class="text-sm text-gray-600">Senin - Jumat: 09.00 - 15.00 WIB</p>
                                <p class="text-xs text-brand-red font-semibold mt-1">Sabu - Minggu & Libur Nasional
                                    Tutup</p>
                            </div>
                        </div>

                        <div
                            class="bg-gray-50 p-6 rounded-2xl border border-gray-100 flex items-start gap-4 hover:shadow-md transition sm:col-span-2">
                            <div class="bg-green-100 text-green-600 p-3 rounded-xl flex-shrink-0">
                                <i data-lucide="phone-call" class="w-6 h-6"></i>
                            </div>
                            <div class="flex-1 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <h4 class="font-bold text-gray-900 mb-1">Call Center</h4>
                                    <p class="text-sm text-gray-600">Telepon: 0811 880 7177</p>
                                    <p class="text-sm text-gray-600">WhatsApp: 0811 880 7177</p>
                                </div>
                                <a href="#"
                                    class="inline-flex items-center justify-center gap-2 px-6 py-2.5 bg-green-500 text-white font-bold rounded-lg hover:bg-green-600 transition shadow-md">
                                    <i data-lucide="message-circle" class="w-5 h-5"></i> Chat Admin
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Google Maps Embed -->
                    <div
                        class="rounded-2xl overflow-hidden shadow-md border border-gray-200 h-[300px] relative bg-gray-200">
                        <!-- Ini adalah placeholder iframe Maps, bisa diganti dengan link embed asli dari Google Maps -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3612251572213!2d107.01126467586805!3d-6.216002660885416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698f0014098945%3A0xaa956891af4b1e2b!2sKantor%20Pusat%20KoSPE!5e0!3m2!1sid!2sid!4v1772161689006!5m2!1sid!2sid"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <!-- Kanan: Form Daftar Tamu -->
                <div class="lg:col-span-5">
                    <div class="bg-white rounded-3xl shadow-2xl p-8 border border-gray-100 sticky top-24">
                        <div class="text-center mb-6">
                            <div
                                class="w-14 h-14 bg-brand-red/10 text-brand-red rounded-full flex items-center justify-center mx-auto mb-3">
                                <i data-lucide="book" class="w-7 h-7"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Buku Tamu Digital</h3>
                            <p class="text-sm text-gray-500 mt-1">Silakan isi formulir ini sebelum berkunjung untuk
                                pelayanan yang lebih cepat.</p>
                        </div>

                        <form id="guestForm" class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Nama Anda">
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Instansi / Perusahaan
                                    <span class="text-gray-400 font-normal">(Opsional)</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Asal instansi/lembaga">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor HP/WA <span
                                            class="text-brand-red">*</span></label>
                                    <input type="tel" required
                                        class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm"
                                        placeholder="0812...">
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-1">Tgl Kunjungan <span
                                            class="text-brand-red">*</span></label>
                                    <input type="date" required
                                        class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm text-gray-600">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Keperluan Kunjungan <span
                                        class="text-brand-red">*</span></label>
                                <select required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-sm text-gray-700">
                                    <option value="">Pilih keperluan...</option>
                                    <option value="cs">Layanan Anggota (CS)</option>
                                    <option value="pembiayaan">Konsultasi Pembiayaan</option>
                                    <option value="kerjasama">Kerjasama & Kemitraan</option>
                                    <option value="lainnya">Keperluan Lainnya</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Catatan Tambahan</label>
                                <textarea rows="2"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none text-sm"
                                    placeholder="Sampaikan pesan Anda..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-gradient-to-r from-brand-red to-brand-orange text-white font-bold py-3.5 rounded-xl hover:opacity-90 transition shadow-lg shadow-orange-200 transform hover:-translate-y-0.5 mt-2 flex justify-center items-center gap-2">
                                <i data-lucide="send" class="w-4 h-4"></i> Kirim Daftar Tamu
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>