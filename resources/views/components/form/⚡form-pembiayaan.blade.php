<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <div class="bg-gray-900 text-white py-14 relative overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1200&auto=format&fit=crop"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay" alt="Business Meeting">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-gray-900 via-gray-900/90 to-transparent"></div>
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-brand-orange rounded-full mix-blend-screen filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/3">
        </div>

        <div
            class="container mx-auto px-4 max-w-6xl relative z-10 flex flex-col md:flex-row justify-between items-center gap-6 animate-fade-in-up">
            <div>
                <span
                    class="inline-block py-1 px-3 rounded-full bg-brand-orange/20 border border-brand-orange text-brand-orange text-xs font-bold uppercase tracking-widest mb-3">Layanan
                    Pembiayaan Syariah</span>
                <h1 class="text-3xl md:text-5xl font-bold mb-2 text-white">Form Pengajuan Pembiayaan</h1>
                <p class="text-gray-300 text-sm md:text-base max-w-xl leading-relaxed">Wujudkan rencana bisnis,
                    pendidikan,
                    hingga renovasi rumah Anda dengan solusi permodalan yang adil dan bebas riba dari KOSPE.</p>
            </div>
        </div>
    </div>

    <main class="container mx-auto px-4 mt-8 max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <div class="lg:col-span-8">
                <form id="financingForm" class="space-y-6">

                    <!-- 1. Data Pemohon -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-gray-100 text-gray-600 rounded-lg"><i data-lucide="user"
                                    class="w-5 h-5"></i></div>
                            Data Pribadi Pemohon
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Sesuai KTP">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">NIK (Nomor KTP) <span
                                        class="text-brand-red">*</span></label>
                                <input type="number" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="16 Digit NIK">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tempat Lahir <span
                                        class="text-brand-red">*</span></label>
                                <input type="text" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Kota kelahiran">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Lahir <span
                                        class="text-brand-red">*</span></label>
                                <input type="date" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm text-gray-600">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Status Pernikahan <span
                                        class="text-brand-red">*</span></label>
                                <select required id="status-pernikahan"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm text-gray-700">
                                    <option value="">Pilih Status...</option>
                                    <option value="belum_menikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                    <option value="cerai">Cerai Hidup / Mati</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Induk Anggota (ID)
                                    <span class="text-gray-400 font-normal">(Opsional)</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Contoh: AGT-00123">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor WhatsApp Aktif <span
                                        class="text-brand-red">*</span></label>
                                <input type="tel" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="0812...">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Email <span
                                        class="text-gray-400 font-normal">(Opsional)</span></label>
                                <input type="email"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="email@anda.com">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Alamat Lengkap <span
                                    class="text-brand-red">*</span></label>
                            <textarea required rows="3"
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm resize-none"
                                placeholder="Alamat sesuai KTP (Nama jalan, RT/RW, Kec, Kota/Kab)"></textarea>
                        </div>
                    </div>

                    <!-- 2. Data Pekerjaan / Usaha -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-blue-50 text-blue-600 rounded-lg"><i data-lucide="briefcase"
                                    class="w-5 h-5"></i>
                            </div>
                            Data Pekerjaan & Usaha
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Profesi Utama <span
                                        class="text-brand-red">*</span></label>
                                <select required id="jenis-profesi"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm text-gray-700">
                                    <option value="">Pilih Profesi...</option>
                                    <option value="wiraswasta">Wirausaha / Pedagang</option>
                                    <option value="karyawan_swasta">Karyawan Swasta</option>
                                    <option value="pns">PNS / TNI / Polri</option>
                                    <option value="profesional">Profesional (Dokter, Pengacara, dll)</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Instansi / Usaha
                                    <span class="text-brand-red">*</span></label>
                                <input type="text" required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Tempat bekerja atau nama toko">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Lama Bekerja / Berusaha
                                    <span class="text-brand-red">*</span></label>
                                <select required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm text-gray-700">
                                    <option value="">Pilih durasi...</option>
                                    <option value="<1">
                                        < 1 Tahun</option>
                                    <option value="1-3">1 - 3 Tahun</option>
                                    <option value="3-5">3 - 5 Tahun</option>
                                    <option value=">5">> 5 Tahun</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Jabatan / Posisi <span
                                        class="text-gray-400 font-normal">(Opsional)</span></label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Contoh: Staff / Pemilik">
                            </div>
                        </div>
                    </div>

                    <!-- 3. Data Penghasilan Perbulan -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-green-50 text-green-600 rounded-lg"><i data-lucide="wallet"
                                    class="w-5 h-5"></i>
                            </div>
                            Data Penghasilan Perbulan
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Penghasilan Pemohon <span
                                        class="text-brand-red">*</span></label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="text" id="penghasilan-pemohon" required
                                        class="input-rupiah w-full pl-12 pr-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm font-bold text-gray-700"
                                        placeholder="0">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Penghasilan
                                    Tambahan</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="text" id="penghasilan-tambahan"
                                        class="input-rupiah w-full pl-12 pr-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm font-bold text-gray-700"
                                        placeholder="0">
                                </div>
                            </div>
                            <div class="col-span-1 md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Keterangan Usaha
                                    Tambahan</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="Contoh: Jualan online, Guru Les">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Penghasilan Suami /
                                    Istri</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="text" id="penghasilan-suami-istri"
                                        class="input-rupiah w-full pl-12 pr-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm font-bold text-gray-700"
                                        placeholder="0">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Jumlah Anak
                                    (Tanggungan)</label>
                                <input type="number"
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm"
                                    placeholder="0">
                            </div>

                            <!-- Garis Pemisah -->


                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Pengeluaran Rutin / Bulan
                                    <span class="text-brand-red">*</span></label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="text" id="pengeluaran-rutin" required
                                        class="input-rupiah w-full pl-12 pr-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm font-bold text-gray-700"
                                        placeholder="0">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Angsuran di Tempat
                                    Lain</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="text" id="angsuran-lain"
                                        class="input-rupiah w-full pl-12 pr-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm font-bold text-gray-700"
                                        placeholder="0">
                                </div>
                            </div>

                            <!-- Hasil Perhitungan -->


                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div class="bg-gray-100 p-4 rounded-xl border border-gray-200">
                                <label
                                    class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1">Total
                                    Penghasilan (Kotor)</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-0 top-1/2 -translate-y-1/2 text-gray-600 font-bold">Rp</span>
                                    <input type="text" id="total-penghasilan" readonly
                                        class="w-full pl-7 py-1 bg-transparent border-none outline-none text-xl font-bold text-gray-800 cursor-not-allowed"
                                        placeholder="0">
                                </div>
                            </div>
                            <div class="bg-orange-50 p-4 rounded-xl border border-brand-orange/30">
                                <label
                                    class="block text-xs font-semibold text-brand-orange uppercase tracking-wider mb-1">Sisa
                                    Penghasilan (Bersih)</label>
                                <div class="relative">
                                    <span
                                        class="absolute left-0 top-1/2 -translate-y-1/2 text-brand-orange font-bold">Rp</span>
                                    <input type="text" id="sisa-penghasilan" readonly
                                        class="w-full pl-7 py-1 bg-transparent border-none outline-none text-xl font-bold text-brand-orange cursor-not-allowed"
                                        placeholder="0">
                                </div>
                                <p class="text-[10px] text-gray-500 mt-1">*Sebagai acuan kapasitas angsur (DSR)</p>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Detail Pengajuan Pembiayaan -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-yellow-50 text-brand-orange rounded-lg"><i data-lucide="coins"
                                    class="w-5 h-5"></i>
                            </div>
                            Detail Pembiayaan
                        </h2>

                        <div class="mb-3">
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Tujuan / Produk Pembiayaan
                                <span class="text-brand-red">*</span></label>
                            <select required
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm text-gray-700">
                                <option value="">Pilih Tujuan Pembiayaan...</option>
                                <option value="modal_usaha">Modal Usaha / Pembelian Barang Dagang (Murabahah)
                                </option>
                                <option value="modal_kerja">Kerjasama Modal Kerja (Mudharabah/Musyarakah)</option>
                                <option value="renovasi">Renovasi Rumah (Murabahah/Ijarah)</option>
                                <option value="multijasa">Multijasa: Pendidikan, Kesehatan, Pernikahan (Ijarah)
                                </option>
                                <option value="kendaraan">Pembelian Kendaraan (Murabahah)</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Nominal Plafon Diajukan
                                    <span class="text-brand-red">*</span></label>
                                <div class="relative">
                                    <span
                                        class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-bold">Rp</span>
                                    <input type="text" id="input-plafon" required
                                        class="w-full pl-12 pr-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm font-bold text-brand-orange"
                                        placeholder="0">
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Jangka Waktu (Tenor) <span
                                        class="text-brand-red">*</span></label>
                                <select required
                                    class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm text-gray-700">
                                    <option value="">Pilih Tenor...</option>
                                    <option value="6">6 Bulan</option>
                                    <option value="12">12 Bulan (1 Tahun)</option>
                                    <option value="24">24 Bulan (2 Tahun)</option>
                                    <option value="36">36 Bulan (3 Tahun)</option>
                                    <option value="48">48 Bulan (4 Tahun)</option>
                                    <option value="60">60 Bulan (5 Tahun)</option>
                                </select>
                            </div>

                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Deskripsi Kebutuhan Detail
                                <span class="text-brand-red">*</span></label>
                            <textarea required rows="3"
                                class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/50 focus:border-brand-orange outline-none transition text-sm resize-none"
                                placeholder="Ceritakan singkat rencana penggunaan dana ini. Contoh: Untuk membeli 2 buah mesin jahit baru dan kain bahan stok lebaran."></textarea>
                        </div>

                    </div>

                    <!-- 4. Upload Dokumen Persyaratan -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-green-50 text-green-600 rounded-lg"><i data-lucide="folder-open"
                                    class="w-5 h-5"></i></div>
                            Unggah Dokumen Wajib
                        </h2>

                        <div
                            class="bg-orange-50 border-l-4 border-brand-orange p-4 rounded-r-xl mb-6 text-sm text-gray-700">
                            Dokumen asli akan diminta saat tim survei berkunjung ke lokasi Anda. Pastikan foto dokumen
                            terbaca
                            dengan jelas.
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- KTP -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto KTP Pemohon <span
                                        class="text-brand-red">*</span></label>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="ktp-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="ktp-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="upload-cloud"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-orange transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Klik/Tarik file KTP</span>
                                    </div>
                                    <img id="ktp-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="ktp-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- Kartu Keluarga -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto Kartu Keluarga (KK)
                                    <span class="text-brand-red">*</span></label>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="kk-upload" accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="kk-placeholder" class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="users"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-orange transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Klik/Tarik file KK</span>
                                    </div>
                                    <img id="kk-preview" class="file-preview absolute inset-0 z-10" alt="Preview">
                                    <button type="button" id="kk-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- KTP Pasangan (Conditional) -->
                            <div id="upload-pasangan" class="hidden">
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Foto KTP Pasangan <span
                                        class="text-brand-red">*</span></label>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="ktp-pasangan-upload"
                                        accept="image/jpeg, image/png, image/jpg"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20">
                                    <div id="ktp-pasangan-placeholder"
                                        class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="credit-card"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-orange transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Unggah KTP Suami/Istri</span>
                                    </div>
                                    <img id="ktp-pasangan-preview" class="file-preview absolute inset-0 z-10"
                                        alt="Preview">
                                    <button type="button" id="ktp-pasangan-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>

                            <!-- SKU / Slip Gaji / RAB -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">SKU / Slip Gaji / Dokumen
                                    RAB <span class="text-brand-red">*</span></label>
                                <p class="text-[10px] text-gray-500 mb-1">Upload salah satu dokumen finansial/Rencana
                                    Anggaran.</p>
                                <div
                                    class="file-drop-area relative bg-gray-50 rounded-xl flex flex-col items-center justify-center h-32 cursor-pointer overflow-hidden group">
                                    <input type="file" id="dokumen-finansial-upload"
                                        accept="image/jpeg, image/png, image/jpg, application/pdf"
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-20" required>
                                    <div id="dokumen-finansial-placeholder"
                                        class="flex flex-col items-center text-center p-2">
                                        <i data-lucide="file-spreadsheet"
                                            class="w-6 h-6 text-gray-400 mb-1 group-hover:text-brand-orange transition"></i>
                                        <span class="text-xs font-medium text-gray-600">Unggah File (Img/PDF)</span>
                                    </div>
                                    <img id="dokumen-finansial-preview" class="file-preview absolute inset-0 z-10"
                                        alt="Preview">
                                    <button type="button" id="dokumen-finansial-remove"
                                        class="hidden absolute top-2 right-2 z-30 bg-brand-red text-white rounded-full p-1 shadow hover:bg-red-700"><i
                                            data-lucide="x" class="w-3 h-3"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Persetujuan -->
                    <div class="bg-gray-100 p-5 rounded-xl border border-gray-200">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" required
                                class="mt-1 w-5 h-5 text-brand-orange rounded border-gray-400 focus:ring-brand-orange">
                            <span class="text-sm text-gray-700 leading-relaxed">
                                Saya menyatakan bahwa seluruh data dan dokumen yang saya berikan adalah benar. Saya
                                memahami bahwa
                                pengajuan ini akan melalui proses BI Checking (SLIK) dan survei lapangan oleh tim KOSPE
                                sebelum
                                disetujui.
                            </span>
                        </label>
                    </div>

                    <!-- 5. Tanda Tangan Digital -->
                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">
                        <h2
                            class="text-lg font-bold text-gray-800 mb-6 flex items-center gap-2 border-b border-gray-100 pb-3">
                            <div class="p-1.5 bg-brand-orange/10 text-brand-orange rounded-lg"><i data-lucide="pen-tool"
                                    class="w-5 h-5"></i></div>
                            Tanda Tangan Digital
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Tanda Tangan Pemohon -->
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">TTD Pemohon <span
                                        class="text-brand-red">*</span></label>
                                <div
                                    class="border-2 border-dashed border-gray-300 rounded-xl bg-gray-50 relative overflow-hidden">
                                    <canvas id="sig-pemohon" class="w-full h-40 cursor-crosshair touch-none"></canvas>
                                </div>
                                <div class="flex justify-end mt-2">
                                    <button type="button" id="clear-pemohon"
                                        class="text-xs text-brand-red font-semibold hover:underline flex items-center gap-1">
                                        <i data-lucide="rotate-ccw" class="w-3 h-3"></i> Ulangi Tanda Tangan
                                    </button>
                                </div>
                            </div>

                            <!-- Tanda Tangan Pasangan (Selalu Tampil) -->
                            <div id="container-sig-pasangan" class="block">
                                <label id="label-sig-pasangan"
                                    class="block text-sm font-semibold text-gray-700 mb-2">TTD Pasangan <span
                                        class="text-gray-400 font-normal">(Bagi yang sudah
                                        menikah)</span></label>
                                <div
                                    class="border-2 border-dashed border-gray-300 rounded-xl bg-gray-50 relative overflow-hidden">
                                    <canvas id="sig-pasangan" class="w-full h-40 cursor-crosshair touch-none"></canvas>
                                </div>
                                <div class="flex justify-end mt-2">
                                    <button type="button" id="clear-pasangan"
                                        class="text-xs text-brand-red font-semibold hover:underline flex items-center gap-1">
                                        <i data-lucide="rotate-ccw" class="w-3 h-3"></i> Ulangi Tanda Tangan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-2 pb-8">
                        <button type="submit"
                            class="w-full md:w-auto px-10 py-4 bg-brand-orange text-white font-bold rounded-xl hover:bg-orange-700 transition shadow-lg shadow-orange-200 flex items-center justify-center gap-2 transform hover:-translate-y-0.5 text-lg">
                            <i data-lucide="send" class="w-5 h-5"></i> Ajukan Pembiayaan
                        </button>
                    </div>
                </form>
            </div>
            <div class="lg:col-span-4">
                <div class="bg-white rounded-2xl shadow-md border border-gray-100 p-6 relative overflow-hidden">
                    <h3
                        class="font-bold text-lg border-b border-gray-100 pb-3 mb-4 flex items-center gap-2 text-gray-800">
                        <i data-lucide="file-check-2" class="w-5 h-5 text-brand-orange"></i> Syarat & Ketentuan Umum
                    </h3>

                    <ul class="space-y-4 mb-2">
                        <li class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-sm text-gray-600">Usia pemohon minimal 21 tahun atau sudah menikah.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-sm text-gray-600">Usaha telah berjalan minimal 1 tahun (untuk Modal
                                Usaha).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-sm text-gray-600">Tidak memiliki riwayat kredit macet (Kolektibilitas
                                lancar).</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-sm text-gray-600">Bersedia disurvei tempat usaha / tempat tinggal.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div
                                class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center flex-shrink-0 mt-0.5">
                                <i data-lucide="check" class="w-3 h-3"></i>
                            </div>
                            <span class="text-sm text-gray-600">Menyediakan agunan / jaminan jika nominal pembiayaan di
                                atas
                                plafon tanpa agunan.</span>
                        </li>
                    </ul>
                </div>
                <div
                    class="bg-gradient-to-br from-brand-red to-red-900 rounded-2xl shadow-lg border border-red-800 p-6 flex flex-col items-start gap-4 text-white">
                    <div class="bg-white/20 p-3 rounded-full flex-shrink-0">
                        <i data-lucide="headset" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-lg">Butuh Konsultasi Akad?</h4>
                        <p class="text-sm text-red-100 mb-4 mt-1">Tim analis pembiayaan kami siap membantu mencarikan
                            skema syariah
                            terbaik untuk kebutuhan Anda.</p>
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-white text-brand-red text-sm font-bold px-4 py-2 rounded-lg hover:bg-gray-100 transition shadow">
                            <i data-lucide="message-circle" class="w-4 h-4"></i> Chat Tim Analis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="successModal"
        class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-3xl shadow-2xl max-w-md w-full p-8 text-center transform scale-0 transition-transform duration-300 border-t-8 border-t-brand-orange"
            id="modalContent">
            <div
                class="w-20 h-20 bg-orange-50 text-brand-orange rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="check-circle-2" class="w-10 h-10"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Alhamdulillah!</h3>
            <h4 class="text-lg font-semibold text-brand-orange mb-4">Pengajuan Diterima</h4>
            <p class="text-gray-600 mb-6 leading-relaxed text-sm">Formulir pengajuan pembiayaan Anda telah berhasil
                disubmit. Tim KOSPE akan melakukan verifikasi berkas dan menghubungi Anda maksimal 2x24 jam untuk
                penjadwalan survei.</p>
            <div class="bg-gray-50 border border-gray-200 rounded-lg p-3 mb-6">
                <p class="text-xs text-gray-500 mb-1">Nomor Pengajuan (Tracking ID):</p>
                <p class="font-mono font-bold text-gray-800 tracking-wider text-lg">FIN-7781-REQ</p>
            </div>
            <a href="index.html"
                class="block w-full bg-brand-orange text-white font-bold py-3.5 rounded-xl hover:bg-orange-600 transition shadow-md">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            try {
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            } catch (e) {
                console.error("Lucide Error:", e);
            }

            // --- INISIALISASI SIGNATURE PAD (Dengan Penanganan Error) ---
            let signaturePadPemohon = null;
            let signaturePadPasangan = null;

            try {
                if (typeof SignaturePad !== 'undefined') {
                    const canvasPemohon = document.getElementById('sig-pemohon');
                    const canvasPasangan = document.getElementById('sig-pasangan');

                    if (canvasPemohon) {
                        signaturePadPemohon = new SignaturePad(canvasPemohon, {
                            backgroundColor: 'rgba(255, 255, 255, 0)',
                            penColor: 'rgb(17, 24, 39)'
                        });
                    }

                    if (canvasPasangan) {
                        signaturePadPasangan = new SignaturePad(canvasPasangan, {
                            backgroundColor: 'rgba(255, 255, 255, 0)',
                            penColor: 'rgb(17, 24, 39)'
                        });
                    }

                    // Handle Resize Canvas untuk HDPI Displays agar tinta tidak pecah
                    function resizeCanvas() {
                        const ratio = Math.max(window.devicePixelRatio || 1, 1);

                        [canvasPemohon, canvasPasangan].forEach(canvas => {
                            if (canvas && canvas.offsetWidth > 0) {
                                canvas.width = canvas.offsetWidth * ratio;
                                canvas.height = canvas.offsetHeight * ratio;
                                canvas.getContext("2d").scale(ratio, ratio);
                            }
                        });

                        if (signaturePadPemohon) signaturePadPemohon.clear();
                        if (signaturePadPasangan) signaturePadPasangan.clear();
                    }

                    window.addEventListener("resize", resizeCanvas);
                    // Beri sedikit delay agar DOM selesai dirender sebelum mengukur canvas
                    setTimeout(resizeCanvas, 300);

                    // Tombol Clear Tanda Tangan
                    $('#clear-pemohon').click(function () {
                        if (signaturePadPemohon) signaturePadPemohon.clear();
                    });
                    $('#clear-pasangan').click(function () {
                        if (signaturePadPasangan) signaturePadPasangan.clear();
                    });
                }
            } catch (err) {
                console.error("SignaturePad Initialization Error: ", err);
            }

            // Logic Menampilkan Upload KTP Pasangan & Ganti Label TTD jika Status = Menikah
            $('#status-pernikahan').change(function () {
                if ($(this).val() === 'menikah') {
                    $('#upload-pasangan').slideDown();
                    $('#ktp-pasangan-upload').prop('required', true);
                    $('#label-sig-pasangan').html('Tanda Tangan Pasangan <span class="text-brand-red">*</span>');
                } else {
                    $('#upload-pasangan').slideUp();
                    $('#ktp-pasangan-upload').prop('required', false);
                    $('#label-sig-pasangan').html('Tanda Tangan Pasangan <span class="text-gray-400 font-normal">(Bagi yang sudah menikah)</span>');
                }
            });

            // Format IDR Helper untuk input uang
            function formatIDR(angka) {
                if (!angka) return '';
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

            function parseIDR(str) {
                if (!str) return 0;
                return parseInt(str.replace(/[^,\d]/g, '')) || 0;
            }

            // Input formatting untuk class input-rupiah & Plafon
            $('#input-plafon, .input-rupiah').on('keyup change', function (e) {
                let val = $(this).val();
                $(this).val(formatIDR(val));

                if ($(this).hasClass('input-rupiah')) {
                    calculatePenghasilan();
                }
            });

            // Kalkulasi Otomatis Form Data Penghasilan
            function calculatePenghasilan() {
                let pPemohon = parseIDR($('#penghasilan-pemohon').val());
                let pTambahan = parseIDR($('#penghasilan-tambahan').val());
                let pSuamiIstri = parseIDR($('#penghasilan-suami-istri').val());

                let totalPenghasilan = pPemohon + pTambahan + pSuamiIstri;
                if (totalPenghasilan > 0) {
                    $('#total-penghasilan').val(formatIDR(totalPenghasilan.toString()));
                } else {
                    $('#total-penghasilan').val('');
                }

                let pengeluaranRutin = parseIDR($('#pengeluaran-rutin').val());
                let angsuranLain = parseIDR($('#angsuran-lain').val());

                let sisa = totalPenghasilan - pengeluaranRutin - angsuranLain;
                if (totalPenghasilan > 0 || pengeluaranRutin > 0 || angsuranLain > 0) {
                    $('#sisa-penghasilan').val(formatIDR(sisa.toString()));
                } else {
                    $('#sisa-penghasilan').val('');
                }
            }

            // Reusable Image Upload Preview
            function setupImagePreview(inputId, previewId, placeholderId, removeBtnId) {
                const input = $('#' + inputId);
                const preview = $('#' + previewId);
                const placeholder = $('#' + placeholderId);
                const removeBtn = $('#' + removeBtnId);
                const dropArea = input.closest('.file-drop-area');

                input.on('change', function (e) {
                    const file = e.target.files[0];
                    if (file) {
                        // Accept image or pdf
                        if (file.type.match('image.*')) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                preview.attr('src', e.target.result).show().css('padding', '0');
                                placeholder.hide();
                                removeBtn.show();
                                dropArea.addClass('border-brand-orange bg-white').removeClass('border-gray-300 bg-gray-50');
                            }
                            reader.readAsDataURL(file);
                        } else if (file.type === 'application/pdf') {
                            preview.attr('src', 'https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg').css('object-fit', 'contain').css('padding', '20px').show();
                            placeholder.hide();
                            removeBtn.show();
                            dropArea.addClass('border-brand-orange bg-white').removeClass('border-gray-300 bg-gray-50');
                        } else {
                            alert('Harap unggah file berupa gambar (JPG/PNG) atau PDF.');
                            input.val(''); // Reset
                        }
                    }
                });

                removeBtn.click(function (e) {
                    e.preventDefault();
                    input.val(''); // Reset input
                    preview.attr('src', '').hide();
                    placeholder.show();
                    $(this).hide();
                    dropArea.removeClass('border-brand-orange bg-white').addClass('border-gray-300 bg-gray-50');
                });

                // Drag and drop effects
                dropArea.on('dragover', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    $(this).addClass('drag-over');
                });

                dropArea.on('dragleave drop', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    $(this).removeClass('drag-over');
                });
            }

            // Init File Uploads
            setupImagePreview('ktp-upload', 'ktp-preview', 'ktp-placeholder', 'ktp-remove');
            setupImagePreview('kk-upload', 'kk-preview', 'kk-placeholder', 'kk-remove');
            setupImagePreview('ktp-pasangan-upload', 'ktp-pasangan-preview', 'ktp-pasangan-placeholder', 'ktp-pasangan-remove');
            setupImagePreview('dokumen-finansial-upload', 'dokumen-finansial-preview', 'dokumen-finansial-placeholder', 'dokumen-finansial-remove');

            // Form Submit Simulation
            $('#financingForm').on('submit', function (e) {
                e.preventDefault();

                // Validasi Tanda Tangan
                if (signaturePadPemohon && signaturePadPemohon.isEmpty()) {
                    alert("Mohon lengkapi Tanda Tangan Pemohon terlebih dahulu.");
                    return;
                }

                if ($('#status-pernikahan').val() === 'menikah' && signaturePadPasangan && signaturePadPasangan.isEmpty()) {
                    alert("Mohon lengkapi Tanda Tangan Pasangan terlebih dahulu karena status Anda Menikah.");
                    return;
                }

                // --- Proses Pengiriman (Submit) ---
                const btn = $(this).find('button[type="submit"]');
                const originalHtml = btn.html();

                // Set loading state
                btn.html('<i data-lucide="loader-2" class="w-5 h-5 animate-spin"></i> Mensubmit Data...').prop('disabled', true);
                if (typeof lucide !== 'undefined') lucide.createIcons();

                // Simulate API Call delay
                setTimeout(function () {
                    btn.html(originalHtml).prop('disabled', false);
                    if (typeof lucide !== 'undefined') lucide.createIcons();

                    // Show Success Modal
                    $('#successModal').removeClass('hidden').addClass('flex');
                    setTimeout(() => {
                        $('#modalContent').removeClass('scale-0').addClass('scale-100');
                    }, 50);

                }, 2000);
            });
        });
    </script>
@endpush