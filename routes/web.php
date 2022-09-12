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

Route::get('admindashboard', function () {
    return view('admindashboard');
})->middleware('admin');

Route::get('userdashboard', function () {
    return view('userdashboard');
});