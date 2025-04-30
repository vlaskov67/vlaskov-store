<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold">Добро пожаловать в интернет-магазин!</h1>
        <livewire:products-list />
    </div>
</body>
</html>
