<?php

namespace App\Asaas;

use Illuminate\Support\Facades\Http;

class Api
{

    const URL = 'https://api-sandbox.asaas.com';

    public function getHeader()
    {
        return Http::withHeaders([
            'accept' => 'application/json',
            'access_token' => env('TOKEN_ASAAS'),
            'content-type' => 'application/json',
        ]);
    }

    public function createNewPayments($payload)
    {
        $uri = '/v3/payments';
        
        return $this->getHeader()->post(self::URL . $uri, $payload);
    }

    public function getImageQRCode($id)
    {
        $uri = "/v3/payments/{$id}/pixQrCode";

        return $this->getHeader()->get(self::URL . $uri);
    }





}

