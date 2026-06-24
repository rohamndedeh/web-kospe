<?php

namespace App\Jobs;

use App\Models\Transaksi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class GenerateKwitansiJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $id = $this->id;
        // 1. Ambil data donasi (Contoh data Salwa Salsabila) [cite: 49]
        $donasi = Transaksi::findOrFail($id);

        // 2. Load View Blade kwitansi yang sudah kita buat
        $pdf = Pdf::loadView('admin.report.kwitansiPDF', compact('donasi'));

        // 3. Konfigurasi DomPDF untuk server HestiaCP [cite: 45]
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true, // Penting untuk meload gambar
            'chroot' => [
                base_path(),
                base_path('../public_html'), // Akses folder publik [cite: 45]
            ],
        ]);

        // 4. Set ukuran kertas landscape seperti format asli
        $pdf->setPaper('a4', 'landscape');

        // 5. Generate Nama File Unik
        $fileName = 'kwitansi-'.$donasi->nomor.'-'.time().'.pdf';
        $filePath = 'public/kwitansi/'.$fileName;

        // 6. Simpan ke Storage (private/storage/app/public/kwitansi)
        Storage::put($filePath, $pdf->output());

        // 7. Return path untuk keperluan pengiriman WhatsApp atau download langsung
        return response()->json([
            'success' => true,
            'message' => 'Kwitansi berhasil disimpan',
            'file_path' => Storage::url($filePath),
            'full_path' => storage_path('app/'.$filePath),
        ]);
    }
}
