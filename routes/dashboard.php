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

    Volt::route('categorie/{id}', 'pages.dashboard.categorie')
        ->name('categorie');

    Volt::route('menus', 'pages.dashboard.menus')
        ->name('menus');

    Volt::route('menus/create', 'pages.dashboard.create-menu')
        ->name('create-menu');
});
