<?php
use App\Http\Controllers\AboutController;

Route::get('/', 'HomeController@index');

Route::get('/todos', 'TodosController@index');