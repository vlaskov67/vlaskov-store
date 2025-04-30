<footer class="bg-gray-800 text-gray-200 mt-8">
    <div class="container mx-auto px-4 py-6 flex flex-col md:flex-row items-center justify-between">
        <div class="mb-4 md:mb-0">
            &copy; {{ date('Y') }} {{ config('app.name', 'Laravel Shop') }}. Все права защищены.
        </div>
        <div class="space-x-4">
            <a href="/privacy" class="hover:underline">Политика конфиденциальности</a>
            <a href="/contacts" class="hover:underline">Контакты</a>
        </div>
    </div>
</footer>
