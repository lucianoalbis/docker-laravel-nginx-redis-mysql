<?php

use Illuminate\Http\Request;

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

Route::get('/test', function () {
    return response('Test API', 200)
        ->header('Content-Type', 'application/json');
});

Route::group(['namespace' => 'API'], function(){
    Route::post('login', 'UserController@login');
    Route::post('register', 'UserController@register');
});

Route::group(['namespace' => 'API', 'middleware' => 'auth:api'], function(){
    Route::post('details', 'UserController@details');
});
