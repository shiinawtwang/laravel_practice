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
    return view('frontend/welcome',['name' => '大帥哥']);
});

Route::get('users/{name?}', function($name = "Chase"){
    return("Hello, I am " .$name);
});

Route::get('post', 'PostController@index')->name('post.index');
Route::post('post', 'PostController@login')->name('post.login');
