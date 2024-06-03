<?php

use App\Http\Controllers\KioskController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');

Route::get('/kiosk/{token}', [KioskController::class, 'start_kiosk'])->name('start_kiosk');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');  

require __DIR__.'/auth.php';
