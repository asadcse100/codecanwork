<?php

Route::get('/', 'UpdateController@step0');
Route::get('/step1', 'UpdateController@step1')->name('step1');
Route::get('/step2', 'UpdateController@step2')->name('step2');
