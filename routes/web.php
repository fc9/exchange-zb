<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@home")->name('home');
Route::post('/', "HomeController@contact")->name('contact');
Route::get('/how', "HomeController@how")->name('how');
Route::get('locale/{locale}', 'LocalizationController@update');
