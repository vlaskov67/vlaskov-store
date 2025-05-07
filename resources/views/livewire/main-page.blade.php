<div class="bg-gray-50 min-h-screen">
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-gray-900">vlaskov.ch</a>
            <div>
                <a href="/cart" class="relative inline-block">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.35 2.7A1 1 0 007.5 17h9a1 1 0 00.85-1.53L17 13M7 13V6a1 1 0 011-1h7a1 1 0 011 1v7"></path></svg>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1" x-data="{ count: {{ count(session('cart', [])) }} }" x-text="count"></span>
                </a>
            </div>
        </div>
    </header>
    <main class="max-w-7xl mx-auto py-10 px-4">
        <h1 class="text-3xl font-bold mb-8 text-center">Welcome to Vlaskov Swiss Shop</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="w-40 h-40 object-cover mb-4 rounded">
                    <h2 class="text-xl font-semibold mb-2">{{ $product['name'] }}</h2>
                    <p class="text-gray-600 mb-2">{{ $product['description'] }}</p>
                    <div class="text-lg font-bold mb-4">CHF {{ number_format($product['price'], 2) }}</div>
                    <button wire:click="addToCart({{ $product['id'] }})" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded transition">Add to Cart</button>
                </div>
            @endforeach
        </div>
    </main>
    <footer class="bg-white mt-16 py-6 text-center text-gray-500">
        &copy; {{ date('Y') }} vlaskov.ch. All rights reserved.
    </footer>
</div>
