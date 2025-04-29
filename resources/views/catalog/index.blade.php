@extends('layouts.app')
@section('title', __('Каталог'))
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <aside class="md:w-1/4">
            <livewire:catalog-filters :categories="$categories" :brands="$brands" :selectedCategory="$selectedCategory" :selectedBrand="$selectedBrand" />
        </aside>
        <section class="flex-1">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products as $product)
                    <div class="bg-white rounded shadow p-4 flex flex-col">
                        <a href="{{ route('product.show', $product->slug) }}">
                            <img src="{{ $product->main_image_url }}" alt="{{ $product->name }}" class="h-40 w-full object-cover mb-2 rounded">
                            <div class="font-semibold mb-1">{{ $product->name }}</div>
                        </a>
                        <div class="text-gray-700 mb-2">{{ $product->priceFormatted() }}</div>
                        <button @click.prevent="window.livewire.emit('cart:add', {{ $product->id }})" class="mt-auto bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">@lang('В корзину')</button>
                    </div>
                @endforeach
            </div>
            <div class="mt-8">
                {{ $products->links() }}
            </div>
        </section>
    </div>
</div>
@endsection
