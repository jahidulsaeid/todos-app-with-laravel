<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TodosController;

Route::get('/', 'HomeController@index');

Route::get('todos', 'TodosController@index');

Route::get('todos/{todo}','TodosController@show');

Route::get('new-todos','TodosController@create');

Route::post('store-todos','TodosController@store');

Route::get('todos/{todo}/edit','TodosController@edit');

Route::post('todos/{todo}/update-todos','TodosController@update');