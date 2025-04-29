@extends('layouts.app')
@section('title', $product->name)
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <div class="md:w-1/2">
            <div x-data="{ image: '{{ $product->main_image_url }}' }">
                <img :src="image" class="w-full h-96 object-cover rounded mb-4" alt="{{ $product->name }}">
                <div class="flex space-x-2">
                    @foreach($product->galleryImages() as $img)
                        <img @click="image = '{{ $img }}'" src="{{ $img }}" class="w-16 h-16 object-cover rounded border cursor-pointer {{ $loop->first ? 'border-blue-500' : 'border-gray-200' }}">
                    @endforeach
                </div>
            </div>
        </div>
        <div class="md:w-1/2">
            <h1 class="text-2xl font-bold mb-2">{{ $product->name }}</h1>
            <div class="text-gray-700 mb-4">{{ $product->priceFormatted() }}</div>
            <form x-data="{ option: '{{ $product->defaultOption() }}' }" @submit.prevent="window.livewire.emit('cart:add', {{ $product->id }}, option)">
                @if($product->options->count())
                    <label class="block mb-2 font-medium">@lang('Опции')</label>
                    <select x-model="option" class="mb-4 border rounded px-3 py-2 w-full">
                        @foreach($product->options as $opt)
                            <option value="{{ $opt->id }}">{{ $opt->name }}</option>
                        @endforeach
                    </select>
                @endif
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">@lang('В корзину')</button>
            </form>
            <div class="mt-6">
                <h2 class="font-semibold mb-2">@lang('Описание')</h2>
                <div class="text-gray-800">{!! nl2br(e($product->description)) !!}</div>
            </div>
        </div>
    </div>
</div>
<livewire:product-modal :product="$product" />
@endsection
