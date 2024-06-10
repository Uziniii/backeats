<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('auth')->group(function () {
    Volt::route('products', 'pages.dashboard.products')
        ->name('products');

    Volt::route('products/create', 'pages.dashboard.create-product')
        ->name('create-product');

    Volt::route('categories', 'pages.dashboard.categories')
        ->name('categories');

    Volt::route('categories/create', 'pages.dashboard.create-categorie')
        ->name('create-categorie');
});
