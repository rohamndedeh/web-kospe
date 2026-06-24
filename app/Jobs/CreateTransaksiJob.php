<?php

namespace App\Jobs;

use App\Models\Transaksi;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class CreateTransaksiJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public array $payload) {}

    public function handle()
    {
        DB::transaction(function () {
            if ($this->payload['trx_type'] == 'bisnis') {
                $tagihan = $this->payload['durasi_belajar'] * 300000;
            } else {
                $tagihan = 0;
            }
            Transaksi::create([
                'donatur_id'        => $this->payload['donatur_id'],
                'donatur_name'      => $this->payload['donatur_name'],
                'kampanye_id'       => $this->payload['kampanye_id'],
                'kampanye_name'     => $this->payload['kampanye_name'],
                'trx_id'            => $this->payload['trx_id'],
                'trx_type'          => $this->payload['trx_type'],
                'trx_kategori'      => $this->payload['trx_kategori'],
                'trx_metode'        => $this->payload['trx_metode'],
                'trx_channel'       => $this->payload['trx_channel'],
                'nominal'           => $this->payload['nominal'],
                'tagihan'           => $tagihan,
                'trx_reff'          => $this->payload['trx_reff'],
                'bank_va'           => $this->payload['bank_va'],
                'qr_url'            => $this->payload['qr_url'],
                'durasi_belajar'    => $this->payload['durasi_belajar'],
                'affiliate_id'      => session('affiliate_id') ?? 0,
                'trx_tgl'           => now(),
            ]);
        });
    }
}
