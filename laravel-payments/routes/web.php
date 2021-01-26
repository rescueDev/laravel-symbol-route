<?php

use Illuminate\Support\Facades\Route;



Route::get('/pagamenti', 'MainController@getPayments')->name('pagamenti');

Route::get('/pagamentipending', 'MainController@getPending')->name('pagamentipending');
