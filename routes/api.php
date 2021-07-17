<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderedItemsController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/student',[ApiController::class,'create']);
Route::get('/student',[ApiController::class,'show']);
Route::post('/product',[ProductController::class,'create']);
Route::get('/product',[ProductController::class,'show']);
Route::post('/orderItems',[OrderedItemsController::class,'create']);
Route::get('/orderItems',[OrderedItemsController::class,'show']);