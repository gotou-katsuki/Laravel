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

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/show', 'HelloController@show');

Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');





// 問題
Route::get('jissyu', 'jissyuController@index');

// 2-1
Route::get('jissyu2', 'jissyu2_1Controller@index');
Route::post('jissyu2', 'jissyu2_1Controller@post');

// 3-1
Route::get('jissyu3', 'jissyu3Controller@index');

// 4-1
Route::get('jissyu4', 'jissyu4_1Controller@index');
Route::post('jissyu4', 'jissyu4_1Controller@post');



