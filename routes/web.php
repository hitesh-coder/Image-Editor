<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', 'App\Http\Controllers\PagesController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('home',[ImageController::class,'upload']);
