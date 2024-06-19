<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Models\Category;
use App\Models\Item;
use App\Models\Menu;

new #[Layout('layouts.app')] class () extends Component {
    public $products;
    public $categorie;
    public $kiosk_id;

    public function mount($id)
    {
        $this->kiosk_id = Auth::user()->kiosk->id;
        $this->categorie = Category::findOrFail($id);
        $this->products = Item::query()->where('kiosk_id', $this->kiosk_id)->get();
    }

    public function addItem(Item $product)
    {
        $menu = Menu::create([
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'kiosk_id' => $this->kiosk_id
        ]);

        $menu->items()->save($product, [ 'priority' => 1 ]);
        $menu->categories()->save($this->categorie);

        return $this->redirectRoute("categorie", [ 'id' => $this->categorie->id ]);
    }

    public function removeItem(Menu $menu)
    {
        $menu->delete();

        return $this->redirectRoute("categorie", [ 'id' => $this->categorie->id ]);
    }
} ?>

<x-slot name="header">
    <div class="flex gap-2">
        <a class="font-semibold text-xl text-gray-800 leading-tight" href="{{ route('categories') }}" wire:navigate>
            {{ __('Categories') }}
        </a>
        <span class="text-lg">/</span>
        <span class="text-lg">Modifier une catégorie</span>
    </div>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mb-6 gap-6 flex flex-wrap">
            @foreach ($categorie->menus as $menu)
            <article
                class="w-40 h-40 flex flex-col border bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <div class="flex items-center justify-between p-1">
                    <h1 class=" text-xl">{{$menu['name']}}</h1>
                    <button wire:click="removeItem({{ $menu }})"
                        class="w-6 h-6 bg-red-600 rounded-md flex justify-center items-center">
                        <img src="{{URL::asset('assets/subtract.png')}}" width="20px" class="h-5">
                    </button>
                </div>
                <div style="background-image: url({{Storage::url($menu['image'])}})"
                    class="flex h-4/6 bg-contain bg-no-repeat w-full items-center justify-center bg-center"></div>
            </article>
            @endforeach
        </div>
        <div class="h-px w-full bg-gray-300"></div>
        <div class="mt-6 gap-6 flex flex-wrap">
            @foreach ($products as $product)
            <article
                class="w-40 h-40 flex flex-col border bg-white border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <div class="flex items-center justify-between p-1">
                    <h1 class=" text-xl">{{$product['name']}}</h1>
                    <button wire:click="addItem({{ $product }})"
                        class="w-6 h-6 bg-green-600 rounded-md flex justify-center items-center">
                        <img src="{{URL::asset('assets/white-plus.png')}}" width="20px" class="h-5">
                    </button>
                </div>
                <div style="background-image: url({{Storage::url($product['image'])}})"
                    class="flex h-4/6 bg-contain bg-no-repeat w-full items-center justify-center bg-center"></div>
            </article>
            @endforeach
        </div>
    </div>
</div>
