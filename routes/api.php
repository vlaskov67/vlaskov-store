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

Route::apiResource('users', UserController::class);
Route::apiResource('roles', RoleController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('orders', OrderController::class);
Route::apiResource('order-details', OrderDetailController::class);
Route::apiResource('promo-codes', PromoCodeController::class);
Route::apiResource('reviews', ReviewController::class);
Route::apiResource('wishlists', WishlistController::class);
Route::apiResource('messages', MessageController::class);
Route::get('chatbot', [ChatBotController::class, 'index']);
Route::post('chatbot', [ChatBotController::class, 'store']);
Route::apiResource('logs', LogController::class)->only(['index', 'show', 'destroy']);
