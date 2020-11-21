<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// 2nd I imported the Item controller to use
use App\Http\Controllers\ItemController;

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

//1st I created a a reute to hit
Route::get('/items', [ItemController::class, 'index']);
