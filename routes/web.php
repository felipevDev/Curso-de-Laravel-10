<?php

use App\Http\Controllers\Admin\{SuporteController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::delete('/suportes/{id}', [SuporteController::class, 'destroy'])->name('suportes.destroy');

Route::put('/suportes/{id}', [SuporteController::class, 'update'])->name('suportes.update');

Route::get('/suportes/{id}/edit', [SuporteController::class, 'edit'])->name('suportes.edit');

Route::get('/suportes/create', [SuporteController::class, 'create'])->name('suportes.create');

Route::get('/suportes/{id}', [SuporteController::class, 'show'])->name('suportes.show');

Route::post('/suportes', [SuporteController::class, 'store'])->name('suportes.store');

Route::get('suportes', [SuporteController::class, 'index'])->name('suportes.index');

Route::get('/contato',[SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
