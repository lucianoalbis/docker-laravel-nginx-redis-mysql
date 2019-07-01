<?php

# Tests
Route::group(['prefix' => 'check'], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/redis', 'IndexController@checkRedis');
});

# Risk
Route::group(['prefix' => 'risk'], function () {
    Route::get('/read', 'ApiRiskController@read');
});

# Logs
Route::group(['prefix' => 'log'], function () {
    Route::get('/write', 'LogController@write');
    Route::get('/read', 'LogController@read');
});

# Notification
Route::group(['prefix' => 'notification'], function () {
    Route::get('/send', 'NotificationController@enviar');
});
