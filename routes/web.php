<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContaController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/index-conta', [ContaController::class, 'index'])->name('index.conta');
Route::get('/create-conta', [ContaController::class, 'create'])->name('create.conta');
Route::post('/store-conta', [ContaController::class, 'store'])->name('store.conta');
Route::get('/show-conta', [ContaController::class, 'show'])->name('show.conta');
Route::get('edit-conta', [ContaController::class, 'edit'])->name('edit.conta');
Route::put('/update-conta', [ContaController::class, 'update'])->name('update.conta');
Route::delete('destroy-conta', [ContaController::class, 'destroy'])->name('destroy.conta');