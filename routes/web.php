<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-conta', [ContaController::class, 'index'])->name('index.conta');
