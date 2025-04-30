<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="antialiased">
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <h1 class="text-3xl font-bold">Добро пожаловать в интернет-магазин!</h1>
    </div>
    @livewireScripts
</body>
</html>
