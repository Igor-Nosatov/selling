<?php

use Illuminate\Http\Request;

Route::get('/', 'ProductController@index');
Route::post('/add','ProductController@store');
