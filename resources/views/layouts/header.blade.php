<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-3 flex items-center justify-between">
        <a href="/" class="text-2xl font-bold text-gray-800">Магазин</a>
        <nav class="hidden md:flex space-x-6">
            <a href="/catalog" class="text-gray-700 hover:text-blue-600">Каталог</a>
            <a href="/about" class="text-gray-700 hover:text-blue-600">О нас</a>
            <a href="/contacts" class="text-gray-700 hover:text-blue-600">Контакты</a>
        </nav>
        <div class="flex items-center space-x-4">
            <livewire:cart-icon />
            @auth
                <a href="/profile" class="text-gray-700 hover:text-blue-600">{{ Auth::user()->name }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="ml-2 text-gray-700 hover:text-red-600">Выйти</button>
                </form>
            @else
                <a href="/login" class="text-gray-700 hover:text-blue-600">Войти</a>
                <a href="/register" class="ml-2 text-gray-700 hover:text-blue-600">Регистрация</a>
            @endauth
        </div>
        <button @click="open = !open" class="md:hidden text-gray-700 focus:outline-none" x-data="{ open: false }">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
    <div class="md:hidden" x-data="{ open: false }" x-show="open" x-transition>
        <nav class="px-4 pb-4 space-y-2">
            <a href="/catalog" class="block text-gray-700 hover:text-blue-600">Каталог</a>
            <a href="/about" class="block text-gray-700 hover:text-blue-600">О нас</a>
            <a href="/contacts" class="block text-gray-700 hover:text-blue-600">Контакты</a>
            @auth
                <a href="/profile" class="block text-gray-700 hover:text-blue-600">{{ Auth::user()->name }}</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-red-600">Выйти</button>
                </form>
            @else
                <a href="/login" class="block text-gray-700 hover:text-blue-600">Войти</a>
                <a href="/register" class="block text-gray-700 hover:text-blue-600">Регистрация</a>
            @endauth
        </nav>
    </div>
</header>
