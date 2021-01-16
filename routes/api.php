<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderDetailsController;

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

Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {
    Route::get('state-list', [OrderDetailsController::class, 'getState']);
    Route::get('district-list/{state_id}', [OrderDetailsController::class, 'getDistrict']);
    Route::get('product-list', [OrderDetailsController::class, 'getProduct']);

    Route::post('add-order', [OrderDetailsController::class, 'addOrder']);
    Route::post('order-listing', [OrderDetailsController::class, 'orderListing']);
    Route::get('order-details/{customer_id}', [OrderDetailsController::class, 'orderDetails']);
});
