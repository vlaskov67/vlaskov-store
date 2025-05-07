<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
    @foreach($products as $product)
        <div class="bg-white rounded-lg shadow hover:shadow-lg transition flex flex-col">
            <a href="{{ route('product.show', $product) }}" class="block">
                <img src="{{ $product->main_image_url }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg">
            </a>
            <div class="p-4 flex-1 flex flex-col">
                <a href="{{ route('product.show', $product) }}" class="font-semibold text-lg text-gray-900 hover:text-blue-600 mb-2">{{ $product->name }}</a>
                <div class="text-gray-700 mb-4 flex-1">{{ Str::limit($product->short_description, 60) }}</div>
                <div class="flex items-center justify-between mt-auto">
                    <span class="text-xl font-bold text-blue-700">{{ number_format($product->price, 2) }} CHF</span>
                    <button wire:click.prevent="$emit('addToCart', {{ $product->id }})" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">В корзину</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
