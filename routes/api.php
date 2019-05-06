<?php

use Illuminate\Http\Request;

Route::get('product', 'ProductController@index');
Route::post('product/add','ProductController@store');
