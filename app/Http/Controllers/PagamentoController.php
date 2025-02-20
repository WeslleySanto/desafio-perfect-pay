<?php

namespace App\Http\Controllers;

use App\Asaas\Api;
use Illuminate\Http\Request;
use App\Asaas\CriarUmaNovaCobranca\BillingType;
use App\Asaas\CriarUmaNovaCobranca\Response\Errors;
use App\Asaas\CriarUmaNovaCobranca\Payload\Payload;
use App\Http\Requests\FinalizarPagamentoRequest;

class PagamentoController extends Controller
{

    public $api;

    const BOLETO = 'boleto';
    const CARTAO_CREDITO = 'cartao_credito';
    const PIX = 'pix';

    public function __construct()
    {
        $this->api = new Api();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pagamento.index');
    }

    public function finalizarPagamento(FinalizarPagamentoRequest $request)
    {
        // dd($request);
        $encodedImage = '';
        
        $payload = (new Payload())->make();
        
        //@todo implementar
        // if ($request['forma_pagamento'] == self::BOLETO) {
        //     $payload->setBillingType(BillingType::BOLETO);
        // }

        //@todo implementar
        // if ($request['forma_pagamento'] == self::CARTAO_CREDITO) {
        //     $payload->setBillingType(BillingType::CARTAO_CREDITO);
        // }

        if ($this->isMethodPaymentPix($request['forma_pagamento'])) {
            $payload->setBillingType(BillingType::PIX);
        }

        $createNewPayments = $this->api->createNewPayments($payload);

        $objectCreateNewPayments = $createNewPayments->object();

        if ($createNewPayments->ok()) {
            $id = $objectCreateNewPayments->id;

            if ($this->isMethodPaymentPix($request['forma_pagamento'])) {
                $getImageQRCode = $this->api->getImageQRCode($id);
                $encodedImage = $getImageQRCode->object()->encodedImage;
            }
        }

        // @todo implementar
        // if ($createNewPayments->badRequest() || $createNewPayments->unauthorized()) {
        // }

        return view('pagamento.finalizar-pagamento', compact('encodedImage'));
    }

    public function isMethodPaymentPix($methodPayment)
    {
        return $methodPayment == self::PIX;
    }

}
