<?php

use App\Http\Controllers\OrderController;
use CloudCreativity\LaravelJsonApi\Facades\JsonApi;
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

JsonApi::register('default')->routes(function ($api) {
    $api->resource('products');
});

Route::post('/api/v1/orders', [
    OrderController::class,
    'create'
])->name('order.create');
