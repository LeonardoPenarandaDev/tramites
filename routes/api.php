<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColombiaMayorController;

Route::post('/colombia-mayor/consultar', [ColombiaMayorController::class, 'consultar'])
    ->name('api.colombia-mayor.consultar');