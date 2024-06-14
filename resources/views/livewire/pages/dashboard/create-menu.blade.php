<?php

use Livewire\WithFileUploads;
use App\Models\Category;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('layouts.app')] class extends Component {
    use WithFileUploads;

    #[Validate('required')]
    public $name = '';

    #[Validate('image')]
    public $photo;

    public function save()
    {
        $validated = $this->validate();

        $path = $this->photo->store(path: 'public/categories');
        $validated['photo'] = $path;

        $validated['kiosk_id'] = Auth::user()->kiosk->id;

        Category::create($validated);

        return $this->redirectRoute('categories');
    }
}; ?>

<x-slot name="header">
    <div class="flex gap-2">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('categories') }}" wire:navigate>
            {{ __('Menus') }}
        </a>
        <span class="text-lg">/</span>
        <span class="text-lg">Créer un menu</span>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form class="flex flex-col gap-4" wire:submit="save">
            @csrf
            <x-text-input placeholder="Nom du produit" type="text" wire:model="name" />
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
                    <input wire:model="photo" id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>
            @error('photo')
            <span class="error">{{ $message }}</span>
            @enderror
            <x-primary-button type="submit">Créer</x-primary-button>
        </form>
    </div>
</div>
