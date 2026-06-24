<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWhatsappJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $otp;
    protected $hp;

    // Tentukan jumlah percobaan jika gagal
    public $tries = 3;

    // Tentukan waktu tunggu antar percobaan (dalam detik)
    public $backoff = 10;

    public function __construct($otp, $hp)
    {
        $this->otp = $otp;
        $this->hp = $hp;
    }

    public function handle()
    {
        try {
            $curl = curl_init();
            $data = [
                'api_key'        => 'RCAB55LWXF3CB409',
                'number_key' => 'KVhQiuBcaqeTFeuV',
                'phone_no' => $this->hp,
                'message' =>  $this->otp,
                'wait_until_send' => '0'
            ];
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.watzap.id/v1/send_message',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Cookie: PHPSESSID=bmjmbcm51hf5v5uhn0b2pds8v3; X_URL_PATH=aHR0cHM6Ly9jb3JlLndhdHphcC5pZC98fHx8fHN1c3VrYWNhbmc%3D'
                ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
            $ress = json_decode($response, true);
        } catch (\Exception $e) {
            // Lempar kembali agar Redis melakukan retry sesuai config $tries
            throw $e;
        }
    }
}
