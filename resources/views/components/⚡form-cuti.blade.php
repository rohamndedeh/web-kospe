<?php

use Livewire\Component;
use App\Models\IzinCuti;
use App\Mail\NotifikasiIzinAtasan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

new class extends Component {

    public $idstaf;
    public $divisi;
    public $type = 'Cuti Tahunan';
    public $jml_hari = 0;
    public $sisa_cuti_asli = 12; // Jatah asli dari database
    public $sisa_cuti_tampilan = 12; // Yang ditampilkan di layar
    public $tgl_start;
    public $tgl_end;
    public $ket;
    public $judul = 'Form Permohonan Cuti';

    protected $rules = [
        'divisi' => 'required',
        'ket' => 'required',
        'tgl_start' => 'required|date',
        'tgl_end' => 'required|date|after_or_equal:tgl_start'
    ];

    protected $messages = [
        'divisi.required' => 'Divisi wajib dipilih',
        'ket.required' => 'Keterangan wajib diisi',
        'tgl_start.required' => 'Tanggal mulai wajib diisi',
        'tgl_end.after_or_equal' => 'Tanggal selesai harus sama atau setelah tanggal mulai',
    ];

    public $cuti = [
        'Cuti Tahunan',
        'Cuti Besar',
        'Cuti Sakit',
        'Cuti Melahirkan',
        'Cuti Karena Alasan Penting',
        'Cuti di Luar Tanggungan Negara',
    ];

    public function submit()
    {
        $this->validate();
        $idstaf = $this->idstaf;
        switch ($idstaf) {
            case '01010010':
                $nama = 'Siti Kholifah';
                break;
            case '01010011':
                $nama = 'Abdul Rohman';
                break;
            case '01010012':
                $nama = 'Muhammad Fikri Akbar';
                break;
            case '01010013':
                $nama = 'Dian Lestari Setyaningrum';
                break;
            case '01010014':
                $nama = 'Yuliani Mantili';
                break;
            case '01010015':
                $nama = 'Adi Rohadi';
                break;
        }

        $validator = Validator::make($this->all(), $this->rules, $this->messages);

        if ($validator->fails()) {
            session()->flash('error', $validator->errors()->first());
            return;
        }

        $token = Str::uuid();

        $izin = IzinCuti::create([
            'idstaf' => $this->idstaf,
            'nama' => $nama,
            'divisi' => $this->divisi,
            'type' => $this->type,
            'jml_hari' => $this->jml_hari,
            'tgl_start' => $this->tgl_start,
            'tgl_end' => $this->tgl_end,
            'sisa_cuti' => $this->sisa_cuti_tampilan,
            'ket' => $this->ket,
            'approval_token' => $token,
        ]);

        $dataIzin = [
            'id' => $izin->id,
            'staff_id' => $idstaf,
            'nama_staf' => $nama, // Pastikan Anda punya variabel ini
            'type' => $this->type,
            'divisi' => $this->divisi,
            'durasi' => $this->jml_hari,
            'periode' => $this->tgl_start . ' - ' . $this->tgl_end,
            'alasan' => $this->ket,
            'sisa_cuti' => $this->sisa_cuti_tampilan,
            'approval_token' => $token,
        ];

        session()->flash('success', 'Permohonan cuti berhasil diajukan!');

        try {
            Mail::to('adckospe@gmail.com')->send(new NotifikasiIzinAtasan($dataIzin));
        } catch (\Exception $e) {
            // Log jika email gagal kirim agar aplikasi tidak crash
            \Log::error("Gagal kirim email: " . $e->getMessage());
        }

        $this->dispatch('pendaftaranBerhasil');
        $this->reset();
    }

    public function updatedJmlHari($value)
    {
        $input = is_numeric($value) ? (int) $value : 0;

        // Kalkulasi otomatis: Sisa asli dikurangi input baru
        $this->sisa_cuti_tampilan = $this->sisa_cuti_asli - $input;

        // Validasi jika minus
        if ($this->sisa_cuti_tampilan < 0) {
            $this->addError('jml_hari', "Jatah tidak mencukupi!");
        } else {
            $this->resetErrorBag('jml_hari');
        }
    }

    public function updatedIdstaf($value)
    {
        if ($value) {
            // Hitung total hari cuti yang sudah DISETUJUI tahun ini
            $cutiTerpakai = IzinCuti::where('idstaf', $value)
                ->whereYear('created_at', now()->year)
                ->where('type', 'Cuti Tahunan')
                ->sum('jml_hari');
            $this->sisa_cuti_asli = 12 - $cutiTerpakai;
            $this->sisa_cuti_tampilan = $this->sisa_cuti_asli;
        }
    }

    public function render()
    {
        $jml = IzinCuti::where('idstaf', $this->idstaf)->where('type', $this->type)->sum('jml_hari');

        return $this->view([
            'cuti' => $this->cuti
        ]);
    }
};
?>

<div>
    <!-- Main Form Container -->
    <main class="container mx-auto px-4 mt-8 max-w-4xl mb-12">

        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">{{ $judul }}</h1>
        </div>
        @if (session()->has('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
                {{ session('error') }}
            </div>
        @endif

        @if($idstaf)
            <p
                class="text-center mt-2 text-xs font-medium {{ $sisa_cuti_tampilan > 0 ? 'text-brand-orange' : 'text-red-500' }}">
                Sisa kuota cuti tahun ini: <span class="font-bold text-base">{{ $sisa_cuti_tampilan }}</span> Hari
            </p>
        @endif

        <form id="registrationForm" class="space-y-8" wire:submit="submit" wire:key="formReport">

            <!-- SECTION 1: Data Pribadi -->
            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-200">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Karyawan <span
                                class="text-red-500">*</span></label>
                        <select required wire:model.live="idstaf"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                            <option value="">Pilih</option>
                            <option value="01010010">Siti Kholifah</option>
                            <option value="01010011">Abdul Rohman</option>
                            <option value="01010012">Muhammad Fikri Akbar</option>
                            <option value="01010013">Dian Lestari Setyaningrum</option>
                            <option value="01010014">Yuliani Mantili</option>
                            <option value="01010015">Adi Rohadi</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Divisi
                            <span class="text-red-500">*</span></label>
                        <select required wire:model="divisi" id="divisi"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                            <option value="">Pilih</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Operasional">Operasional</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Jenis Cuti
                            <span class="text-red-500">*</span></label>
                        <input type="hidden" wire:model="sisa_cuti" value="{{ $sisa_cuti_tampilan }}">
                        <select required wire:model="type" id="type"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                            <option value="0">Pilih</option>
                            @for ($i = 0; $i < count($cuti); $i++)
                                <option value="{{ $cuti[$i] }}">{{ $cuti[$i] }}</option>
                            @endfor
                        </select>
                    </div>
                    <div>

                        <label class="block text-sm font-semibold text-gray-700 mb-1">Jumlah (Hari/Bulan/Tahun) <span
                                class="text-red-500">*</span></label>
                        <input type="text" required wire:model.live="jml_hari"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition"
                            placeholder="1">
                        @error('jml_hari')
                            <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Mulai Tanggal <span
                                class="text-red-500">*</span></label>
                        <input type="date" required wire:model="tgl_start"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Selesai Tanggal <span
                                class="text-red-500">*</span></label>
                        <input type="date" required wire:model="tgl_end"
                            class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-xl focus:bg-white focus:ring-2 focus:ring-brand-orange/20 focus:border-brand-orange outline-none transition text-gray-700">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700">Rincian Alasan <span
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
            <h3 class="text-2xl font-bold text-gray-900 mb-2">Permohonan Berhasil!</h3>
            <p class="text-gray-600 mb-8 leading-relaxed">Data Anda sudah masuk ke sistem kami.</p>
            <div class="flex gap-2">
                <a href="{{ route('home') }}"
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