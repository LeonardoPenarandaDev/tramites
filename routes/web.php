<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColombiaMayorController;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/consulta-colombia-mayor', [ColombiaMayorController::class, 'index'])
    ->name('colombia-mayor.index');

Route::post('/colombia-mayor/consultar', [ColombiaMayorController::class, 'consultar'])
    ->name('colombia-mayor.consultar');

Route::get('/certificado-estratificacion', function () {
    return view('tramites.certificado-estratificacion');
})->name('certificado-estratificacion');