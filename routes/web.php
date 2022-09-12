<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'AuthController@login');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');
Route::get('admindashboard', 'AuthController@adminDashboard')->middleware('admin');
Route::get('userdashboard', 'AuthController@userDashboard');
Route::get('forget-password', 'AuthController@forgetPassword');
Route::post('forget-password-post', 'AuthController@forgetPasswordPost');