<?php

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

// Route for todos view using the index function in the controller
Route::get('todos', 'TodosController@index');
// Route for todos view using a dyanmic property which is called in the show function in the controller
Route::get('todos/{todo}', 'TodosController@show');
// Route for creating a new todo.
Route::get('new-todos', 'TodosController@create');
// Route for storing new todos
Route::post('store-todos', 'TodosController@store');
// Route for editing todos using GET
Route::get('todos/{todo}/edit', 'TodosController@edit');
// Route to update the todo when editing on edit.blade.php
// Dynamically pass the todo ID
Route::post('todos/{todo}/update-todos', 'TodosController@update');
// Route to delete the todo using get. Dynamically pass the todo ID
Route::get('todos/{todo}/delete', 'TodosController@destroy');
// Route to complete using get. Dynamically pass the todo ID
Route::get('todos/{todo}/complete', 'TodosController@complete');
