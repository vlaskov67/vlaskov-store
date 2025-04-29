<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PromoCodeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ChatBotController;
use App\Http\Controllers\LogController;

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('order-details', OrderDetailController::class);
Route::resource('promo-codes', PromoCodeController::class);
Route::resource('reviews', ReviewController::class);
Route::resource('wishlists', WishlistController::class);
Route::resource('messages', MessageController::class);
Route::get('chatbot', [ChatBotController::class, 'index'])->name('chatbot.index');
Route::post('chatbot', [ChatBotController::class, 'store'])->name('chatbot.store');
Route::resource('logs', LogController::class)->only(['index', 'show', 'destroy']);
