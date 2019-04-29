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
    return view('index');
});
route::get('hello', function(){
    return "Hallo SELAMAT DATANG DI LARAVEL";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'product'], function() {
    Route::get('/', 'ProductController@index');
    Route::get('/new', 'ProductController@create');
    Route::post('/', 'ProductController@save');
});

Route::group(['prefix' => 'product'], function() {
    Route::get('/{id}', 'ProductController@edit');
    Route::put('/{id}', 'ProductController@update');
});

Route::group(['prefix' => 'product'], function() {
    Route::delete('/{id}', 'ProductController@destroy');
});

Route::group(['prefix' => 'customer'], function() {
    Route::get('/', 'CustomerController@index');
    Route::get('/new', 'CustomerController@create');
    Route::post('/', 'CustomerController@save');
});

Route::group(['prefix' => 'customer'], function() {
    Route::get('/{id}', 'CustomerController@edit');
    Route::put('/{id}', 'CustomerController@update');
});

Route::group(['prefix' => 'customer'], function() {
    Route::delete('/{id}', 'CustomerController@destroy');
});