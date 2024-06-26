<?php

use App\Http\Controllers\GezinController;
use App\Http\Controllers\ProfileController;
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

// routes/web.php
Route::middleware('checkusertype:manager')->group(function () {
    Route::get('/gezinnen', [GezinController::class, 'index'])->name('gezinnen.index');
    Route::get('/gezinnen/{gezinId}', [GezinController::class, 'show'])->name('gezinnen.show');
    Route::get('/gezinnen/{gezinId}/edit/allergie/{persoonId}', [GezinController::class, 'editAllergie'])->name('gezinnen.editAllergie');
    Route::put('/gezinnen/{gezinId}/update/allergie/{persoonId}', [GezinController::class, 'updateAllergie'])->name('gezinnen.updateAllergie');
});


require __DIR__ . '/auth.php';
