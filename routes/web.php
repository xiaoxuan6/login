<?php

use Encore\Login\Http\Controllers\LoginController;
use Encore\Login\Http\Controllers\UserController;

Route::get('auth/login', LoginController::class.'@getLogin');
Route::post('auth/login', LoginController::class.'@postLogin');
Route::resource('auth/users', UserController::class);