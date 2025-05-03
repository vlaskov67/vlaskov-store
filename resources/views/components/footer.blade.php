<footer class="bg-gray-900 text-gray-200 py-10 mt-16">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row md:justify-between gap-8">
            <div>
                <a href="/" class="text-2xl font-bold text-white">ShopName</a>
                <p class="mt-2 text-gray-400">Ваш любимый интернет-магазин товаров</p>
            </div>
            <div class="flex gap-12">
                <div>
                    <h3 class="font-semibold mb-2">Навигация</h3>
                    <ul class="space-y-1">
                        <li><a href="/catalog" class="hover:underline">Каталог</a></li>
                        <li><a href="/about" class="hover:underline">О нас</a></li>
                        <li><a href="/contacts" class="hover:underline">Контакты</a></li>
                        <li><a href="/cart" class="hover:underline">Корзина</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">Контакты</h3>
                    <ul class="space-y-1 text-gray-400">
                        <li>Тел: <a href="tel:+79991234567" class="hover:underline">+7 (999) 123-45-67</a></li>
                        <li>Email: <a href="mailto:info@shopname.ru" class="hover:underline">info@shopname.ru</a></li>
                        <li>Адрес: г. Москва, ул. Примерная, 1</li>
                    </ul>
                </div>
            </div>
            <div>
                <h3 class="font-semibold mb-2">Мы в соцсетях</h3>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white" aria-label="VK"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.97 17.5c-5.44 0-8.47-3.77-8.6-10.5h2.77c.09 5.13 2.36 7.29 4.16 7.29.85 0 1.13-.61 1.13-1.34V7h2.67v6.45c0 1.23-.66 2.05-2.07 2.05-1.74 0-2.97-1.14-3.47-2.41h-2.7c.49 2.02 2.64 4.41 6.17 4.41 3.53 0 5.68-2.39 6.17-4.41h-2.7c-.5 1.27-1.73 2.41-3.47 2.41-1.41 0-2.07-.82-2.07-2.05V7h2.67v6.45c0 .73.28 1.34 1.13 1.34 1.8 0 4.07-2.16 4.16-7.29h2.77c-.13 6.73-3.16 10.5-8.6 10.5z"/></svg></a>
                    <a href="#" class="hover:text-white" aria-label="Telegram"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M21.944 4.667c-.26-.22-.62-.28-.93-.16L2.98 11.33c-.34.13-.57.46-.56.83.01.37.25.69.6.8l4.2 1.24 1.63 5.16c.1.32.39.54.72.54.02 0 .05 0 .07-.01.34-.03.62-.28.7-.61l1.23-5.01 5.01-4.53c.27-.24.34-.64.16-.95-.18-.31-.56-.44-.89-.29l-6.21 2.77c-.16.07-.34.01-.42-.15-.08-.16-.01-.34.15-.42l9.53-4.25c.32-.14.47-.52.33-.84z"/></svg></a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-4 text-sm text-gray-500 text-center">
            &copy; {{ date('Y') }} ShopName. Все права защищены.
        </div>
    </div>
</footer>
