<?php

namespace App\Jobs;

use App\Models\Watzap;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendImgWhatsapp implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $historyId;

    // Tentukan jumlah percobaan jika gagal
    public $tries = 3;

    // Tentukan waktu tunggu antar percobaan (dalam detik)
    public $backoff = 10;

    public function __construct($historyId)
    {
        $this->historyId = $historyId;
    }

    public function handle()
    {
        $history = Watzap::find($this->historyId);
        if (! $history) {
            return;
        }

        // Update status di DB menjadi processing
        $history->update(['status' => 'processing']);

        try {
            // $dataSending = array();
            // $dataSending["api_key"] = "YLBRJP9HF4D5K9J0";
            // $dataSending["number_key"] = "PDCyrlIz5xvva1vQ";
            // $dataSending["phone_no"] = $history->receiver_hp;
            // $dataSending["message"] = $history->message;
            // $dataSending["wait_until_send"] = "0"; //This is an optional parameter, if you use this parameter the response will appear after sending the message is complete
            // $dataSending["url"] = $history->image_url;
            // $dataSending["separate_caption"] = "0";
            $curl = curl_init();
            curl_setopt_array($curl, [
                // CURLOPT_URL => 'https://api.watzap.id/v1/send_message','
                CURLOPT_PORT => '3000',
                CURLOPT_URL => 'http://103.127.138.72:3000/send',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => "sessionId=cs1&to=$history->receiver_hp&text=$history->message&imageUrl=$history->qr_url",
                CURLOPT_HTTPHEADER => [
                    'Authorization: Basic YWRtaW46cGFzc3dvcmQtYW5kYQ==',
                    'Content-Type: application/x-www-form-urlencoded',
                ],
            ]);
            $response = curl_exec($curl);
            curl_close($curl);

            $result = json_decode($response, true);
            // // Logika pengecekan berdasarkan dokumentasi Watzap (biasanya status 200)
            // if ($result['status'] == '200') {
            //     $history->update([
            //         'status'    => 'success',
            //         'error_log' => $response // Simpan respon utuh untuk audit
            //     ]);
            // } else {
            //     // Jika API merespon tapi menyatakan gagal (misal: kuota habis atau nomor tidak valid)
            //     $history->update([
            //         'status'    => 'failed',
            //         'error_log' => 'API Error: ' . $result['message'] . ' - ' . json_encode($result)
            //     ]);
            // }
        } catch (\Exception $e) {
            // Menangani gagal koneksi (timeout, internet mati, atau exception di atas)
            $history->update([
                'status' => 'failed',
                'error_log' => 'System Error: ' . $e->getMessage(),
            ]);

            // Lempar kembali agar Redis melakukan retry sesuai config $tries
            throw $e;
        }
    }
}
