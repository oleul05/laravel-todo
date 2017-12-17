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

Route::get('/todo',[
	'uses' => 'TodosController@getTodo',
	'as' => 'todos'
]);

Route::post('/create/todo',[
	'uses' => 'TodosController@postCreateTodo'
]);

Route::get('/todo/delete/{id}', [
	'uses' 	=> 'TodosController@getDeteleTodo',
	'as'	=> 'todo.delete'
]);

Route::get('/todo/update/{id}', [
	'uses' 	=> 'TodosController@getUpdateTodo',
	'as'	=> 'todo.update'
]);

Route::post('/todo/update/{id}',[
	'uses' 	=> 'TodosController@postUpdateTodo',
	'as' => 'todos.update'
]);

Route::get('/todo/complete/{id}',[
	'uses' 	=> 'TodosController@getCompletedTodo',
	'as' => 'todo.completed'
]);