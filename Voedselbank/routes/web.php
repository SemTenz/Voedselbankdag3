<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoedselPakketController;
use App\Http\Controllers\GezinnenController;
use App\Http\Controllers\EetwensController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/gezin', [GezinnenController::class, 'index'])->name('gezin.index');
    Route::get('/gezinnen', [GezinnenController::class, 'index']);
    Route::get('/voedselpakket', [VoedselPakketController::class, 'index'])->name('voedselpakket.index');
    Route::get('/voedselpakket/{voedselpakket}/edit', [VoedselPakketController::class, 'edit'])->name('voedselpakket.edit');
    Route::put('/voedselpakket/{voedselpakket}', [VoedselPakketController::class, 'update'])->name('voedselpakket.update');

    Route::get('/gezinnen/search', [EetwensController::class, 'search'])->name('eetwens.search');
});

require __DIR__.'/auth.php';
