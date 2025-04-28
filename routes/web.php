<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CartPage;

Route::get('/cart', CartPage::class)->name('cart');
