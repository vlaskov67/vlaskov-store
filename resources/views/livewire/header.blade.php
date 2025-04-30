<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="/" class="text-2xl font-bold text-gray-800">
            {{ config('app.name', 'Laravel Shop') }}
        </a>
        <nav class="space-x-6">
            <a href="/catalog" class="text-gray-700 hover:text-blue-600">Каталог</a>
            <a href="/cart" class="text-gray-700 hover:text-blue-600">Корзина</a>
            <a href="/about" class="text-gray-700 hover:text-blue-600">О нас</a>
        </nav>
    </div>
</header>
