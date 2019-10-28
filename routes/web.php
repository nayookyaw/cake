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
	return view('cake/home');
});
Route::get('/contact', function() {
	return view('cake/contact');
});
Route::get('/about', function() {
	return view('cake/about');
});
// Cake Product API  ///
Route::get('/products', function() {
	return view('cake/products');
});

Route::get('/cake/products/search', 'Cake\CakeProductController@searchAll');

Route::get('/cake/products/search/price', 'Cake\CakeProductController@searchPrice');

Route::get('/cake/home/products', 'Cake\CakeHomeController@getNewProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin API Collections ///
Route::get('/admin/home/summary', 'Admin\HomeController@summary');

Route::get('/admin/home', function() {
	return view('admin/home');
});
Route::get('/cake/products/all', 'Cake\CakeProductController@getAll');

///////// Products Menu API ///
Route::get('/admin/products', function () {
	return view('admin/products');
});
Route::get('/admin/products/all', 'admin\ProductController@getAll');

Route::get('/admin/products/create', function () {
	return view('admin/productCreate');
});

Route::post('/admin/products/create', 'admin\ProductController@create');

Route::get('/admin/product/detail/{product_id}', 'admin\ProductController@getDetail');

Route::post('/admin/product/update', 'admin\ProductController@update');

Route::delete('/admin/product/delete', 'admin\ProductController@delete');


// Orders Menu API
Route::get('/admin/orders', function () {
	return view('admin/orders');
});

Route::get('/admin/orders/all', 'admin\AdminOrderController@getAllOrder');

Route::get('/admin/orders/detail/{user_id}', 'admin\AdminOrderController@getOrderDetail');

Route::delete('/admin/orders/close', 'admin\AdminOrderController@closeOrder');

Route::delete('/admin/orders/cancel', 'admin\AdminOrderController@cancelOrder');

// Cash API Collections /////////
Route::get('/admin/cash', function() {
	return view('admin/cash');
});
Route::get('/admin/orders/history/all', 'admin\AdminOrderHistoryController@getAllOrderHistories');

Route::get('admin/cash/detail/{user_id}', 'admin\AdminOrderHistoryController@getOrderByUserId');

Route::get('/admin/cash/date', 'admin\AdminOrderHistoryController@getOrderByDate');

Route::get('/admin/cash/date/all', 'admin\AdminOrderHistoryController@getOrderByDateAll');

Route::get('/admin/cash/search/name', 'admin\AdminOrderHistoryController@getOrderByName');

////// End Cash API ////////////

/////// Start User API ///////
Route::get('/admin/users', 'admin\AdminUserController@getAllUser');

///////// Logged User API
Route::get('/logged/home', function () {
	return view('logged/home');
});
Route::get('/logged/products', function() {
	return view('logged/products');
});
Route::get('/logged/products/all', 'logged\LoggedProductController@getAll');

Route::post('/logged/products/addOrder', 'logged\LoggedProductController@addOrder');

Route::get('/logged/products/search', 'logged\LoggedProductController@searchProducts');

Route::get('/logged/products/search/price', 'logged\LoggedProductController@searchPrice');

Route::get('/logged/orders', function () {
	return view('logged/orders');
});

Route::get('/logged/orders/tmp/all', 'logged\LoggedOrderController@getOrderTmp');

Route::delete('/logged/orders/tmp/delete', 'logged\LoggedOrderController@deleteTempOrder');

Route::post('/logged/orders/tmp/save', 'logged\LoggedOrderController@saveOrder');

Route::get('/logged/orders/detail', function () {
	return view('logged/orderDetail');
});

Route::get('/logged/orders/all', 'logged\LoggedOrderController@getAllOrder');

Route::get('/logged/orders/export/{total_amount}', 'logged\LoggedOrderController@orderExport');
