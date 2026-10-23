<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresensiController;

Route::get('/', function () {
    return redirect()->route('presensi.index');
});

Route::prefix('presensi')->name('presensi.')->group(function () {
    Route::get('/', [PresensiController::class, 'index'])->name('index');
    Route::get('/create', [PresensiController::class, 'create'])->name('create');
    Route::post('/', [PresensiController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [PresensiController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PresensiController::class, 'update'])->name('update');
    Route::delete('/{id}', [PresensiController::class, 'destroy'])->name('destroy');
});