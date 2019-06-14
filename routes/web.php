<?php

Route::get('/', 'IndexController@index');
Route::get('/redis', 'IndexController@checkRedis');
