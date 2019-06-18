<?php

# Tests
Route::get('/', 'IndexController@index');
Route::get('/redis', 'IndexController@checkRedis');

# Use Repository
Route::get('/querie', 'ApiRiskController@querie');
Route::get('/mutation', 'ApiRiskController@mutation');

# Use Dependency Injection
Route::get('/write', 'LogController@write');
Route::get('/read', 'LogController@read');
