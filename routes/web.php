<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\ProductPage;
use App\Http\Livewire\CartPage;
use App\Http\Livewire\CheckoutPage;
use App\Http\Livewire\OrderSuccessPage;
use App\Http\Livewire\ProfilePage;

Route::get('/', HomePage::class)->name('home');
Route::get('/product/{slug}', ProductPage::class)->name('product.show');
Route::get('/cart', CartPage::class)->name('cart');
Route::get('/checkout', CheckoutPage::class)->name('checkout');
Route::get('/order/success/{order}', OrderSuccessPage::class)->name('order.success');
Route::middleware('auth')->group(function() {
    Route::get('/profile', ProfilePage::class)->name('profile');
});
