<?php
use App\Http\Controllers\AboutController;

Route::get('/', 'HomeController@index');

Route::get('/todos', 'TodosController@index');

Route::get('todos/{todo}','TodosController@show');