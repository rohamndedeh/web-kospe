<?php

namespace App\Jobs;

use App\Models\KampanyeCaategory;
use App\Models\Transaksi;
use App\Services\JournalService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class PostToJurnalJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public int $transaksiId
    ) {}

    public function handle()
    {
        Log::info('Start PostToJurnalJob: ' . $this->transaksiId);
        $trx = Transaksi::findOrFail($this->transaksiId);
        $kat = KampanyeCaategory::where('kode', $trx->trx_type)->first();

        $nominalTotal = $trx->nominal;

        $noTransaksi = $trx->trx_id;
        $tanggal = now();

        $kas = $trx->trx_channel == 'api_tripay' ? '1102' : '1101';
        if ($trx->trx_metode == 'transfer') {
            $kas = '1102';
        }

        if ($trx->trx_kategori == 'in') {
            $jurnalPayload = [
                [
                    'tgl_jurnal'    => $tanggal,
                    'trx_id'        => $noTransaksi . '-1',
                    'coa_kode'      => $kas, // Kas / Bank
                    'posisi'        => 'D',
                    'debit'         => $nominalTotal,
                    'kredit'        => 0,
                    'keterangan'    => 'Penerimaan ' . $kat->category,
                    'tipe'          => 'asset',
                ],
                [
                    'tgl_jurnal'    => $tanggal,
                    'trx_id'        => $noTransaksi . '-2',
                    'coa_kode'      => $kat->coa, // Dana Wakaf Tunai
                    'posisi'        => 'K',
                    'debit'         => 0,
                    'kredit'        => $nominalTotal,
                    'keterangan'    => 'Dana ' . $kat->category,
                    'tipe'          => 'dana',
                ]
            ];
        } else {
            $jurnalPayload = [
                [
                    'tgl_jurnal'    => $tanggal,
                    'trx_id'        => $noTransaksi . '-2',
                    'coa_kode'      => $kat->coa, // Dana Wakaf Tunai
                    'posisi'        => 'D',
                    'debit'         => 0,
                    'kredit'        => $nominalTotal,
                    'keterangan'    => 'Penyaluran ' . $trx->category->category,
                    'tipe'          => 'beban',
                ],
                [
                    'tgl_jurnal'    => $tanggal,
                    'trx_id'        => $noTransaksi . '-1',
                    'coa_kode'      => $kas, // Kas / Bank
                    'posisi'        => 'K',
                    'debit'         => $nominalTotal,
                    'kredit'        => 0,
                    'keterangan'    => 'Pengeluaran ' . $trx->category->category,
                    'tipe'          => 'asset',
                ]
            ];
        }

        JournalService::postFromPaidTransaction(
            $trx,
            $jurnalPayload
        );
    }
}
