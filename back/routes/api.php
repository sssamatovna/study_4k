<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\ShopController;

Route::get('/products', [ShopController::class, 'getAllProducts']);
Route::post('/cart', [ShopController::class, 'addToCart']);
Route::get('/cart/{userId}', [ShopController::class, 'getCartContents']);
Route::post('/order/{userId}', [ShopController::class, 'placeOrder']);
