<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::post('tasks', 'TasksController@store')->name('tasks.store');
// Route::put('tasks/{id}', 'TasksController@update')->name('tasks.update');
// Route::delete('tasks/{id}', 'TasksController@destroy')->name('tasks.destroy');

// Route::get('tasks', 'TasksController@index')->name('tasks.index');

// Route::get('tasks/create', 'TasksContller@create')->name('tasks.create');

// Route::get('tasks/{id}', 'TasksController@show')->name('tasks.show');

// Route::get('tasks/{id}/edit', 'TasksController@edit')->name('tasks.edit');


Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');