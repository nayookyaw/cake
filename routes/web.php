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
	return view('layouts/cake/master');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home/summary', 'Admin\HomeController@summary');

Route::get('/admin/home', function() {
	return view('admin/home');
});

///////// Products Menu API
Route::get('/admin/products', function () {
	return view('admin/products');
});
Route::get('/admin/products/all', 'admin\ProductController@getAll');

Route::get('/admin/product/detail/{product_id}', 'admin\ProductController@getDetail');

Route::put('/admin/product/update', 'admin\ProductController@update');

Route::delete('/admin/product/delete', 'admin\ProductController@delete');

///////// Logged User API
Route::get('/logged/home', function() {
	return view('logged/home');
});
