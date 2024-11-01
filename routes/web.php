<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/index-conta', [ContaController::class, 'index'])->name('index.conta');
Route::get('/index-create', [ContaController::class, 'create'])->name('create.conta');