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

Route::get('/', function() {
	return view('welcome');
});

Route::get('/todo', [
	'uses' => 'TodoController@todo',
	'as' => "todo",
]);

Route::post('/todo/create', [
	'uses' => 'TodoController@create',
	'as' => 'todo.create',
]);

Route::get('/todo/dump/{id}', [
	'uses' => 'TodoController@dump',
	'as' => 'todo.dump',
]);

Route::get('/todo/update/{id}', [
	'uses' => 'TodoController@update',
	'as' => 'todo.update'
]);

Route::post('/todo/save/{id}', [
	'uses' => 'TodoController@save',
	'as' => 'todo.save',
]);

Route::get('/todo/completed/{id}', [
	'uses' => 'TodoController@completed',
	'as' => 'todo.completed',
]);

Route::get('/todo/undo/{id}', [
	'uses' => 'TodoController@undo',
	'as' => 'todo.undo',
]);