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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', 'API\UserController@login');
Route::post('/register', 'API\UserController@register');

// auto select local thailand
Route::get('/province', 'API\UserController@get_province');
Route::post('/province', 'API\UserController@post_province');

Route::get('/amphure', 'API\UserController@get_amphure');
Route::post('/amphure', 'API\UserController@post_amphure');

Route::get('/district', 'API\UserController@get_district');
Route::post('/district', 'API\UserController@post_district');