<?php

namespace App\Jobs;

use App\Models\Transaksi;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class MarkTransaksiPaidJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(
        public int $transaksiId
    ) {}

    public function handle()
    {
        DB::transaction(function () {
            $trx = Transaksi::lockForUpdate()->findOrFail($this->transaksiId);

            if ($trx->status !== 'UNPAID') {
                throw new Exception('Transaksi tidak valid untuk PAID');
            }

            $trx->update([
                'status' => 'PAID',
                'paid_at' => now(),
            ]);

            PostToJurnalJob::dispatch(
                $this->transaksiId
            );
        });
    }
}
