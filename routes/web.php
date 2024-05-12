<?php

use Illuminate\Support\Facades\Route;
/* 
Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/','landing.about')->name('about');
