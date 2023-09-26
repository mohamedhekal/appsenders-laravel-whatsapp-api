<?php

namespace WhatsAppAPI;

use Illuminate\Support\Facades\Http;

class WhatsApp
{
    public static function sendMessage($to, $message, $fileUrl = null)
    {
        $data = [
            'appkey' => config('whatsapp.appkey'),
            'authkey' => config('whatsapp.authkey'),
            'to' => $to,
            'message' => $message
        ];

        if (!is_null($fileUrl)) {
            $data['file'] = $fileUrl;
        }

        $response = Http::asForm()->post(config('whatsapp.api_url'), $data);
        return $response->json();
    }
}
