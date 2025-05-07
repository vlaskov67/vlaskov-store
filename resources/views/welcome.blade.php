<?php /* Main page for vlaskov.ch */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vlaskov.ch - Интернет-магазин</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-gray-50 font-inter">
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <a href="/" class="text-2xl font-bold text-gray-900">Vlaskov.ch</a>
            <nav class="space-x-6">
                <a href="#catalog" class="text-gray-700 hover:text-blue-600">Каталог</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600">О нас</a>
                <a href="#contacts" class="text-gray-700 hover:text-blue-600">Контакты</a>
            </nav>
            <div>
                <livewire:cart-icon />
            </div>
        </div>
    </header>
    <main>
        <section class="bg-gradient-to-r from-blue-100 to-blue-300 py-20">
            <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-gray-900">Добро пожаловать в Vlaskov.ch</h1>
                    <p class="text-lg text-gray-700 mb-6">Лучшие товары для вашего дома и семьи с доставкой по всей Швейцарии.</p>
                    <a href="#catalog" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow hover:bg-blue-700 transition">Перейти в каталог</a>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <img src="/images/main-hero.png" alt="Vlaskov.ch Hero" class="w-80 rounded-xl shadow-lg">
                </div>
            </div>
        </section>
        <section id="catalog" class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold mb-8 text-gray-900">Популярные товары</h2>
            <livewire:main-page-products />
        </section>
        <section id="about" class="bg-white py-16">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-6 text-gray-900">О нас</h2>
                <p class="text-gray-700 text-lg max-w-2xl">Vlaskov.ch — это семейный интернет-магазин, который предлагает качественные товары для дома, кухни, детей и уюта. Мы работаем только с проверенными поставщиками и гарантируем быструю доставку по всей Швейцарии.</p>
            </div>
        </section>
        <section id="contacts" class="container mx-auto px-4 py-16">
            <h2 class="text-3xl font-bold mb-6 text-gray-900">Контакты</h2>
            <div class="text-gray-700 text-lg">
                <p>Email: <a href="mailto:info@vlaskov.ch" class="text-blue-600 hover:underline">info@vlaskov.ch</a></p>
                <p>Телефон: <a href="tel:+41791234567" class="text-blue-600 hover:underline">+41 79 123 45 67</a></p>
                <p>Адрес: Zürich, Schweiz</p>
            </div>
        </section>
    </main>
    <footer class="bg-gray-200 py-6 mt-12">
        <div class="container mx-auto px-4 text-center text-gray-600">
            &copy; {{ date('Y') }} Vlaskov.ch. Все права защищены.
        </div>
    </footer>
    @livewireScripts
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
