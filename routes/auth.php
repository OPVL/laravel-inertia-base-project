<?php

use Illuminate\Support\Facades\Route;

    Route::get('register')->uses('RegistrationController@create')->name('auth.register');
    Route::post('register')->uses('RegistrationController@store')->name('auth.register.store');
    Route::get('login')->name('auth.login');
    Route::post('login')->name('auth.login.store');
    Route::get('reset-password')->name('auth.reset-password');
    Route::post('reset-password')->name('auth.reset-password.store');

Route::get('logout')->name('auth.logout');
