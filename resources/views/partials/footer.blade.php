<footer class="bg-gray-900 text-gray-200 mt-8">
    <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-center">
        <div class="mb-4 md:mb-0">
            &copy; {{ date('Y') }} Vlaskov. @lang('Все права защищены.')
        </div>
        <nav class="flex space-x-4">
            <a href="{{ route('policy') }}" class="hover:underline">@lang('Политика конфиденциальности')</a>
            <a href="{{ route('terms') }}" class="hover:underline">@lang('Условия')</a>
        </nav>
    </div>
</footer>
