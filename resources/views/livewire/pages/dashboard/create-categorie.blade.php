<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class () extends Component {
    // public $products;

    public function mount()
    {
        // $this->products = Item::all();
    }
} ?>

<x-slot name="header">
    <div class="flex gap-2">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('categories') }}" wire:navigate>
            {{ __('Categories') }}
        </a>
        <span class="text-lg">/</span>
        <span class="text-lg">Créer une catégorie</span>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form class="flex" wire:submit="save">
            @csrf
            <x-text-input placeholder="Nom de la categories" type="text" wire:model="categories" />
            <input type="file" wire:model="categories">
        </form>
        <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
            <!-- <div class="p-6 text-gray-900"> -->
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
