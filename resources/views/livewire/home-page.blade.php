<div class="min-h-screen bg-gray-50">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900">Магазин</h1>
            <a href="#" class="relative" x-data="{ open: false }" @click.prevent="open = !open">
                <svg class="w-8 h-8 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 9m5-9v9m4-9v9m1-13h2a2 2 0 012 2v2a2 2 0 01-2 2h-2.28"></path></svg>
                <span class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full text-xs px-2 py-0.5" x-text="$store.cart.count"></span>
            </a>
        </div>
    </header>
    <main class="max-w-7xl mx-auto py-10 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow p-4 flex flex-col">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="h-40 object-cover rounded mb-4">
                    <h2 class="text-lg font-semibold mb-2">{{ $product->name }}</h2>
                    <div class="text-gray-700 mb-4">{{ number_format($product->price, 2) }} ₽</div>
                    <button wire:click="addToCart({{ $product->id }})" class="mt-auto bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">В корзину</button>
                </div>
            @endforeach
        </div>
    </main>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.store('cart', {
            count: {{ count(session('cart', [])) }}
        });
        Livewire.on('cartUpdated', () => {
            fetch('/api/cart/count').then(r => r.json()).then(data => {
                Alpine.store('cart').count = data.count;
            });
        });
    });
</script>
