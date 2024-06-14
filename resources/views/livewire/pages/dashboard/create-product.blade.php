<?php

use Livewire\WithFileUploads;
use App\Models\Item;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component {
    use WithFileUploads;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $price = 0;

    // #[Validate('required')]
    public $description = '';

    #[Validate('image')]
    public $image;

    public function save()
    {
        $validated = $this->validate();

        $path = $this->image->store(path: 'public/items');
        $validated['image'] = $path;

        $validated['kiosk_id'] = Auth::user()->kiosk->id;

        // dd($validated);

        Item::create($validated);

        return $this->redirectRoute('products');
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
            <textarea class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                placeholder="Description du produit" wire:model="description"></textarea>
            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag
                            and drop</p>
                        <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                    </div>
                    <input wire:model="image" id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
            @error('photo')
            <span class="error">{{ $message }}</span>
            @enderror
            <x-primary-button type="submit">Créer</x-primary-button>
        </form>
        <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> -->
        <!-- <div class="p-6 text-gray-900"> -->
        <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
