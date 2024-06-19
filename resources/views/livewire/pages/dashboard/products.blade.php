<?php

use App\Models\Item;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.app')] class () extends Component {
    public $products;

    public function mount()
    {
        $this->products = Item::query()->where('kiosk_id', Auth::user()->kiosk->id)->get();
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);

        // $this->authorize('delete', $item);

        $item->delete();

        return $this->redirectRoute("products");
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
            <x-text-input placeholder="Rechercher des produits" type="text" class="mt-1 block w-full" />
        </div>
        <div class="mt-6 gap-6 flex flex-wrap">
            <article href="{{ route('create-product') }}" wire:navigate
                class="w-40 h-40 flex justify-center items-center border bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <img src="{{URL::asset('assets/plus.png')}}" width="50px">
            </article>
            @foreach ($products as $product)
            <article
                class="w-40 h-40 flex flex-col border bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <div class="flex items-center justify-between p-1">
                    <h1 class=" text-xl">{{$product['name']}}</h1>
                    <button wire:click="delete({{ $product->id }})"
                        class="w-6 h-6 bg-red-600 rounded-md flex justify-center items-center">
                        <img src="{{URL::asset('assets/trash.png')}}" width="20px" class="h-5">
                    </button>
                </div>
                <div style="background-image: url({{Storage::url($product['image'])}})"
                    class="flex h-4/6 bg-contain bg-no-repeat w-full items-center justify-center bg-center"></div>
            </article>
            @endforeach
        </div>
    </div>
</div>
