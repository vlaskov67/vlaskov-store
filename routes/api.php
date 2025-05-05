<?php

use Illuminate\Support\Facades\Route;

Route::get('/cart/count', function () {
    return ['count' => count(session('cart', []))];
});
