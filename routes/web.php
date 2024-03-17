<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;

Route::get('/novocliente', [ControladorCliente::class, 'create']);

Route::get('/', [ControladorCliente::class, 'index']);

Route::post('/cliente', [ControladorCliente::class, 'store']);