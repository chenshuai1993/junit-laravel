<?php

Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('sjunit.store');

//测试路由
Route::get('test', 'TestJunitController@test');
