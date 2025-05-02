<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интернет-магазин</title>
    @livewireStyles
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Главная страница</h1>
        <livewire:add-to-cart-button />
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
</body>
</html>
