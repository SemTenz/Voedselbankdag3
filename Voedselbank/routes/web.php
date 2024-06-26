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

Route::middleware('checkusertype:manager')->group(function () {
    Route::get('/gezinnen', [GezinController::class, 'index'])->name('gezinnen.index');
    Route::get('/gezinnen/{gezinId}', [GezinController::class, 'show'])->name('gezinnen.show');
});


require __DIR__ . '/auth.php';
