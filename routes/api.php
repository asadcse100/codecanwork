<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'namespace' => 'Api'], function() {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('social-login', 'AuthController@socialLogin');
    Route::post('password/forget_request', 'PasswordResetController@forgetRequest');
    Route::post('password/confirm_reset', 'PasswordResetController@confirmReset');
    Route::post('password/resend_code', 'PasswordResetController@resendCode');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
    Route::post('resend_code', 'AuthController@resendCode');
    Route::post('confirm_code', 'AuthController@confirmCode');

    Route::post('android/servicedata', 'DataController@getService');
    Route::post('android/categorydata', 'DataController@getCategoryData');
    Route::post('android/subcategorydata', 'DataController@getSubCategoryData');
});



