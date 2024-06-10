<?php

use Livewire\WithFileUploads;
use App\Models\Item;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class () extends Component {
    use WithFileUploads;

    #[Validate('required')]
    public $name = "";

    #[Validate('required')]
    public $price = 0;

    #[Validate('required')]
    public $description = "";

    #[Validate('image')]
    public $image;

    public function save()
    {
        $validated = $this->validate();

        $path = $this->image->store(path: 'items');
        $validated["image"] = $path;

        Item::create($validated);

        return $this->redirect(view("pages.dashboard.products"));
    }
}; ?>

<x-slot name="header">
    <div class="flex gap-2">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('products') }}" wire:navigate>
            {{ __('Produits') }}
        </a>
        <span class="text-lg">/</span>
        <span class="text-lg">Ajouter un produit</span>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form class="flex flex-col gap-4" wire:submit="save">
            @csrf
            <x-text-input placeholder="Nom du produit" type="text" wire:model="name" />
            <x-text-input placeholder="Prix du produit" type="number" step="0.01" wire:model="price" />
            <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" placeholder="Description du produit" wire:model="description"></textarea>
            <input type="file" wire:model="image">
            @error('photo') <span class="error">{{ $message }}</span> @enderror
            <x-primary-button type="submit">Créer</x-primary-button>
        </form>
        <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
            <!-- <div class="p-6 text-gray-900"> -->
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
