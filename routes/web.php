<?php

use App\Http\Controllers\KioskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


Route::get('/kiosk/{token}', [KioskController::class, 'start_kiosk'])->name('start_kiosk');
Route::get('/kiosk/{token}/{id}', [KioskController::class, 'kiosk_select'])->name('kiosk_select');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');  

Route::get('/', [UserController::class, 'index'])->name('user.index');

require __DIR__.'/auth.php';
