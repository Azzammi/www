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
    if(!Auth::guest()){
        return redirect('/home');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'projects'], function() {
    Route::get('/', 'ProjectController@index');
    Route::post('/', 'ProjectController@store');
    Route::get('/add', 'ProjectController@index');
    Route::post('/add', 'ProjectController@store');
    Route::get('/{id}', 'ProjectController@detail');
    Route::get('/{id}/edit', 'ProjectController@index');
    Route::post('/{id}/edit', 'ProjectController@index');
    Route::get('/{id}/delete', 'ProjectController@index');
    Route::get('/{id}/tasks', 'ProjectController@index');
    Route::post('/{id}/tasks/add', 'CardController@store');

    Route::get('/{id}/tasks/{task_id}/move/{action}', 'CardController@move');
});
