<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Pembiayaan;
use App\Services\WhatsappService;
use Carbon\Carbon;

class SendReminderPembiayaan extends Command
{
    protected $signature = 'reminder:pembiayaan';
    protected $description = 'Kirim reminder pembiayaan H-3, H-1, H0';

    public function handle()
    {
        $wa = new WhatsappService();

        $today = Carbon::today();

        $data = Pembiayaan::with('anggota')->get();

        foreach ($data as $item) {

            $jatuhTempo = Carbon::parse($item->jatuh_tempo);
            $selisih = $today->diffInDays($jatuhTempo, false);

            if ($selisih == 3 && !$item->reminder_h3_at) {
                $this->kirim($wa, $item, 'H-3');
                $item->update(['reminder_h3_at' => now()]);
            }

            if ($selisih == 1 && !$item->reminder_h1_at) {
                $this->kirim($wa, $item, 'H-1');
                $item->update(['reminder_h1_at' => now()]);
            }

            if ($selisih == 0 && !$item->reminder_h0_at) {
                $this->kirim($wa, $item, 'Hari Ini');
                $item->update(['reminder_h0_at' => now()]);
            }
        }

        $this->info('Reminder selesai.');
    }

    private function kirim($wa, $item, $jenis)
    {
        $msg = "Yth {$item->anggota->nama},\n\n"
            . "Pengingat {$jenis} jatuh tempo pembiayaan.\n"
            . "Tanggal: {$item->jatuh_tempo}\n"
            . "Jumlah: Rp " . number_format($item->cicilan_per_bulan, 0, ',', '.') . "\n\n"
            . "Mohon segera melakukan pembayaran.\n\n"
            . "KSP Kospe";

        $wa->send(
            $item->anggota->no_hp,
            $msg,
            'reminder.jpg'
        );
    }
}
