@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-4">Добро пожаловать в Laravel Shop!</h1>
    <p class="mb-6">Это главная страница вашего интернет-магазина на Laravel, Livewire и Alpine.js.</p>
    <!-- Здесь может быть ваш Livewire компонент -->
    @livewire('some-homepage-component')
</div>
@endsection
