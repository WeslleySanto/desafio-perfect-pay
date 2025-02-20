<?php

use App\Http\Controllers\PagamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [PagamentoController::class, 'index'])->name('pagamentos');
Route::post('/finalizar-pagamento', [PagamentoController::class, 'finalizarPagamento'])->name('finalizar');
