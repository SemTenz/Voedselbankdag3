<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Klantcontroller;
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

Route::get('/klant', [Klantcontroller::class, 'index'])->name('klant.index');

Route::get('/gezinnen/search', [Klantcontroller::class, 'search'])->name('klant.search');

Route::get('/klant{id}', [Klantcontroller::class, 'edit'])->name('klant.edit');
Route::put('/klant{id}', [Klantcontroller::class, 'update'])->name('klant.update');
require __DIR__ . '/auth.php';
