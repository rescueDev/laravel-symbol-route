<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 1) Route Home
Route::get('/home', 'TempController@home')->name('home');

// 2) Route Blog
Route::get('/blog', 'TempController@blog')->name('blog');

// 3) Route About
Route::get('/about', 'TempController@about')->name('about');
