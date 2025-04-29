<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold text-gray-900">
            Vlaskov
        </a>
        <nav class="flex items-center space-x-6">
            <a href="{{ route('catalog') }}" class="text-gray-700 hover:text-blue-600">@lang('Каталог')</a>
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600">@lang('О нас')</a>
            <a href="{{ route('contacts') }}" class="text-gray-700 hover:text-blue-600">@lang('Контакты')</a>
        </nav>
        <div class="flex items-center space-x-4">
            <livewire:cart-dropdown />
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <span class="uppercase">{{ strtoupper(app()->getLocale()) }}</span>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-32 bg-white border rounded shadow z-10">
                    @foreach(config('app.locales') as $locale)
                        <a href="{{ route('locale.switch', $locale) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 uppercase">{{ $locale }}</a>
                    @endforeach
                </div>
            </div>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <span class="uppercase">{{ session('region', 'ru') }}</span>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-32 bg-white border rounded shadow z-10">
                    @foreach(config('app.regions') as $region)
                        <a href="{{ route('region.switch', $region) }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 uppercase">{{ $region }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</header>
