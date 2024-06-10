<?php

use App\Models\Item;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class () extends Component {
    public $products;

    public function mount()
    {
        $this->products = Item::all();
    }
}; ?>

<x-slot name="header">
    <div class="flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produits') }}
        </h2>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="flex">
            <x-text-input placeholder="Rechercher des produits" type="text" class="mt-1 block w-full"/>
        </div>
        <div class="mt-6 gap-6 grid grid-cols-6 justify-between">
            <article href="{{ route('create-product') }}" wire:navigate class="w-40 h-40 flex justify-center items-center border bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <img src="{{URL::asset('assets/plus.png')}}" width="50px">
            </article>
            @foreach ($products as $product)
                <livewire:pages.dashboard.card type="item" :data="$product"/>
            @endforeach
        </div>
    </div>
</div>
