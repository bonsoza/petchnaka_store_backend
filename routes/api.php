<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::group(['middleware'=>'api'], function(){
    Route::get('/customer/get', [CustomerController::class, 'getCustomer']);
    Route::post('/customer/save', [CustomerController::class, 'saveCustomer']);
    Route::post('/customer/delete', [CustomerController::class, 'deleteCustomer']);

    Route::post('/order/saveOrder', [OrderController::class, 'storeOrder']);
    Route::get('/order/getOrder', [OrderController::class, 'getOrder']);
    Route::get('/order/getDelivery', [OrderController::class, 'getDelivery']);
    Route::post('/order/updateDelivery', [OrderController::class, 'updateDelivery']);

    Route::post('/facturer/post', [GenController::class, 'postGen']);

    Route::get('/facturer/edit', [GenController::class, 'getEdit']);
    Route::get('/facturer/allEdit', [GenController::class, 'getAllEdit']);
    Route::post('/facturer/updateData', [GenController::class, 'getUpdateData']);


});
