<div class="container mx-auto py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full md:w-1/2 h-96 object-cover rounded">
        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-2">{{ $product->name }}</h1>
            <p class="text-lg mb-4">${{ number_format($product->price, 2) }}</p>
            <div class="mb-4">{!! nl2br(e($product->description)) !!}</div>
            <form wire:submit.prevent="addToCart" class="flex items-center gap-4">
                <input type="number" wire:model="quantity" min="1" class="border rounded px-2 py-1 w-20">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">{{ __('Add to Cart') }}</button>
            </form>
            @if (session()->has('success'))
                <div class="mt-4 text-green-600">{{ session('success') }}</div>
            @endif
        </div>
    </div>
</div>
