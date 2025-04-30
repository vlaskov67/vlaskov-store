<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-6">{{ __('Products') }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($products as $product)
            <div class="border rounded p-4 flex flex-col">
                <a href="{{ route('product.show', $product->slug) }}">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="mb-4 h-48 object-cover w-full">
                    <h2 class="text-xl font-semibold">{{ $product->name }}</h2>
                </a>
                <div class="mt-auto flex justify-between items-center">
                    <span class="text-lg font-bold">${{ number_format($product->price, 2) }}</span>
                    <a href="{{ route('product.show', $product->slug) }}" class="bg-blue-500 text-white px-4 py-2 rounded">{{ __('View') }}</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
