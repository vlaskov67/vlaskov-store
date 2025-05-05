<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Livewire\HomePage::class)->name('home');
