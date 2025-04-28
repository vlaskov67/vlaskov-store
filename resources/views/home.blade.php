<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-gray-800">Магазин</a>
            <nav class="space-x-4">
                <a href="#" class="text-gray-700 hover:text-blue-600">Каталог</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Корзина</a>
                <a href="#" class="text-gray-700 hover:text-blue-600">Войти</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="flex-1 container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold mb-6">Добро пожаловать в наш интернет-магазин!</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Пример карточки товара -->
            <div class="bg-white rounded shadow p-4 flex flex-col">
                <img src="https://via.placeholder.com/300x200" alt="Товар" class="mb-4 rounded">
                <h2 class="text-lg font-bold mb-2">Название товара</h2>
                <p class="text-gray-600 mb-2">Краткое описание товара.</p>
                <div class="mt-auto flex items-center justify-between">
                    <span class="text-xl font-semibold text-blue-600">1 990 ₽</span>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">В корзину</button>
                </div>
            </div>
            <!-- /Пример карточки товара -->
            <!-- Можно добавить больше карточек -->
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow mt-8">
        <div class="container mx-auto px-4 py-4 text-center text-gray-500">
            &copy; {{ date('Y') }} Интернет-магазин. Все права защищены.
        </div>
    </footer>
</body>
</html>
