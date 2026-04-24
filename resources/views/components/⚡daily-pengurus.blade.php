<?php

use Livewire\Component;
use App\Models\DailyReport;

new class extends Component {

    public $idstaf;
    public $divisi = 'Pengurus';
    public $ket;

    protected $rules = [
        'divisi' => 'required',
        'ket' => 'required',
    ];

    public function submit()
    {
        $this->validate();
        $idstaf = $this->idstaf;
        switch ($idstaf) {
            case '01010001':
                $nama = 'Bagus Hernowo';
                break;
            case '01010002':
                $nama = ' Aminto Setiawan';
                break;
            case '01010003':
                $nama = 'Dedy Saputra';
                break;
            case '01010009':
                $nama = 'Aries Dwi Cahyono';
                break;
            case '01010005':
                $nama = 'Herdy Leonardy';
                break;
        }

        DailyReport::create([
            'idstaf' => $this->idstaf,
            'nama' => $nama,
            'divisi' => $this->divisi,
            'hp' => '-',
            'prospek' => '-',
            'ket' => $this->ket,
        ]);

        session()->flash('success', 'Daily Report berhasil Tersimpan ✅');
        $this->dispatch('pendaftaranBerhasil');
        $this->reset();
    }
};
?>

<div>
    <!-- Main Form Container -->
    <main class="container mx-auto px-4 mt-8 max-w-4xl mb-12">

        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Daily Activity Report</h1>
        </div>
        @if (session()->has('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="registrationForm" class="space-y-8" wire:submit="submit" wire:key="formReport">

            <!-- SECTION 1: Data Pribadi -->
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Pengurus <span
                                class="text-red-500">*</span></label>
                        <select required wire:model="idstaf"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                            <option value="">Pilih</option>
                            <option value="01010001">Bagus Hernowo</option>
                            <option value="01010002">Aminto Setiawan</option>
                            <option value="01010003">Dedy Saputra</option>
                            <option value="01010009">Aries Dwi Cahyono</option>
                            <option value="01010005">Herdy Leonardy</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Divisi
                            <span class="text-red-500">*</span></label>
                        <select required wire:model="divisi"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                            <option value="Pengurus">Pengurus</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Rincian Aktivitas <span
                                class="text-red-500">*</span></label>
                        <textarea required rows="3" wire:model="ket"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition resize-none"
                            placeholder=""></textarea>
                    </div>
                </div>
            </div>
            <!-- Persetujuan & Submit -->
            <div class="bg-transparent pt-4">
                <div class="flex flex-col sm:flex-row justify-end gap-4">
                    <button type="submit"
                        class="px-10 py-3.5 bg-brand-red text-white font-bold rounded-xl hover:bg-red-700 transition shadow-lg shadow-red-200 flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                        <i data-lucide="send" class="w-5 h-5"></i> Kirim Report
                    </button>
                </div>
            </div>

        </form>
    </main>

    <!-- Success Modal (Hidden by default) -->
    <div id="successModal"
        class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8 text-center transform scale-0 transition-transform duration-300"
            id="modalContent">
            <div
                class="w-20 h-20 bg-green-100 text-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                <i data-lucide="check-circle" class="w-10 h-10"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Report Berhasil!</h3>
            <p class="text-gray-600 mb-8 leading-relaxed">Data Anda sudah masuk ke sistem kami.</p>
            <div class="flex gap-2">
                <a href="{{ route('home') }}" wire:navigate
                    class="block w-full bg-brand-red text-white font-bold py-3 rounded-xl hover:bg-red-700 transition">
                    Kembali ke Beranda
                </a>
                <a href="#" id="close"
                    class="block w-full text-red-700 font-bold py-3 rounded-xl hover:bg-red-50 transition">
                    Close
                </a>
            </div>
        </div>
    </div>
    @script
    <script>

        const btn = $(this).find('button[type="submit"]');
        const originalHtml = btn.html();
        $wire.on('pendaftaranBerhasil', () => {
            btn.html(originalHtml).prop('disabled', false);
            console.log('ok')

            // Show Modal
            $('#successModal').removeClass('hidden').addClass('flex');
            setTimeout(() => {
                $('#modalContent').removeClass('scale-0').addClass('scale-100');
            }, 50);
        });

        $('#close').click(function (e) {
            e.preventDefault()
            $('#successModal').removeClass('flex').addClass('hidden');
            setTimeout(() => {
                $('#modalContent').removeClass('scale-100').addClass('scale-0');
            }, 50);
        })


    </script>
    @endscript
</div>