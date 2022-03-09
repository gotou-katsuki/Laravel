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




// 問題
Route::get('jissyu', 'jissyuController@index');

// 2-1
Route::get('jissyu2', 'jissyu2Controller@index');
Route::post('jissyu2', 'jissyu2Controller@post');

// 3-1
Route::get('jissyu3', 'jissyu3Controller@index');


