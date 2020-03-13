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

Route::get('users', 'Api\ApiUserController@index');
Route::post('users', 'Api\ApiUserController@store');
Route::get('users/{id}', 'Api\ApiUserController@show');

Route::get('messages', 'Api\ApiMessageController@index');
Route::post('messages', 'Api\ApiMessageController@store');

Route::post('login','Api\ApiLoginLogoutController@login');
Route::get('logout/{id}','Api\ApiLoginLogoutController@logout');
