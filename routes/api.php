<?php

use App\Http\Controllers\Api\ApiCategoryHandler;
use App\Http\Controllers\Api\ApiLocationHandler;
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

Route::get('/category',[ApiCategoryHandler::class, 'getCategory']);
Route::get('/subcategory',[ApiCategoryHandler::class, 'getSubcategory']);

Route::get('/country',[ApiLocationHandler::class, 'getCountry']);
Route::get('/state',[ApiLocationHandler::class, 'getState']);
Route::get('/city',[ApiLocationHandler::class, 'getCity']);