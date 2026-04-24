<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhatsappService
{
  public function formatNumber($hp)
  {
    $hp = str_replace([' ', '-'], '', $hp);

    if (substr($hp, 0, 1) == '0') {
      $hp = '62' . substr($hp, 1);
    }

    return $hp;
  }

  public function sendMessage($phone, $message)
  {
    $phone = $this->formatNumber($phone);

    $payload = [
      'api_key'          => config('services.watzap.api_key'),
      'number_key'       => config('services.watzap.number_key'),
      'phone_no'         => $phone,
      'message'          => $message,
      // 'url'              => $urlImage,
      'separate_caption' => '0',
      'wait_until_send'  => '0',
    ];
    $endpoint = 'send_message';
    $response = Http::post(config('services.watzap.url' . $endpoint), $payload);

    Log::info('WA RESPONSE', [
      'phone' => $phone,
      'response' => $response->body()
    ]);

    return $response;
  }
}
