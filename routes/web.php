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

// Route::get('/', function () {
//     return view('frontend/welcome',['name' => '大帥哥']);
// });

// Route::get('users/{name?}', function($name = "Chase"){
//     return("Hello, I am " .$name);
// });

// Route::get('post', 'PostController@index')->name('post.index');
// Route::post('post', 'PostController@login')->name('post.login');

Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('about', function () {
    return view('frontend.about');
})->name('about');
 
Route::get('products', function () {
    return view('frontend.products');
})->name('products');
Route::get('store', function () {
    return view('frontend.store');
})->name('store');