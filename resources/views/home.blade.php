@extends('layouts.app')
@section('title', __('Главная'))
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="mb-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-blue-100 rounded-lg flex items-center justify-center h-64">
                <span class="text-3xl font-bold text-blue-700">@lang('Баннер 1')</span>
            </div>
            <div class="bg-green-100 rounded-lg flex items-center justify-center h-64">
                <span class="text-3xl font-bold text-green-700">@lang('Баннер 2')</span>
            </div>
        </div>
    </div>
    <div>
        <h2 class="text-2xl font-semibold mb-4">@lang('Категории')</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($categories as $category)
                <a href="{{ route('catalog', ['category' => $category->slug]) }}" class="block bg-white rounded shadow p-4 text-center hover:bg-blue-50">
                    <img src="{{ $category->image_url }}" alt="{{ $category->name }}" class="h-20 mx-auto mb-2">
                    <div class="font-medium">{{ $category->name }}</div>
                </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
