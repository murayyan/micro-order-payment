<?php

namespace App\Http\Controllers;

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

Route::post('orders', [OrderController::class, 'create']);
Route::get('orders', [OrderController::class, 'index']);

Route::post('webhook', [WebhookController::class, 'midtransHandler']);
