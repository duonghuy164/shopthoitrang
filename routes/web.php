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



/************************** Admin ************************/

Route::group([
	'prefix'=>'admin',
	// prefix : link
	'as'=>'admin.',
	// as:name
	'namespace'=>'Admin',
	// 'middleware'=>['checkLogin','web']
	//namespace

],function(){
	Route::get('login','LoginController@index')->name('login');
	Route::post('hanlde-login','LoginController@handleLogin')->name('handleLogin');
	Route::get('logout','LoginController@logout')->name('logout');
	
});

Route::group([
	'prefix'=>'admin',
	'as'=>'admin.',
	'namespace'=>'Admin',
	'middleware'=>['checkLogin','web']
],function(){
	Route::get('dashboard','DashBoardController@index')->name('dashboard');
			/**** Product **********/
	Route::get('product','ProductController@index')->name('product');
	Route::get('add-product','ProductController@add')->name('AddProduct');
	Route::post('handle-add-product','ProductController@HandelAdd')->name('hanldeAddProduct');
	Route::post('delete-product','ProductController@delete')->name('deleteProduct');
	Route::get('edit-product/{id}','ProductController@edit')->name('editProduct');
	Route::post('handle-edit-product/{id}','ProductController@handleEdit')->name('handleEditProducts');

	/*************** Product ********/
	Route::get('color','ColorController@index')->name('color');
	Route::get('add-color','ColorController@add')->name('addColor');
	Route::post('handle-add-color','ColorController@handleAdd')->name('handleEdit');
	Route::post('delete-color','ColorController@delete')->name('deleteColor');

	/********* Bill *************/
	Route::get('bill','BillController@index')->name('bill');
});

/*************************** Front-end ***********************************/

// Route::get('/', function () {
//     return view('front-end.base');
// });
Route::group([
	'namespace'=>'FrontEnd'
],function(){
	Route::get('/','HomeController@index')->name('home');
	Route::get('lien-he','HomeController@contact')->name('contact');
	Route::get('gioi-thieu','HomeController@introduce')->name('introduce');
	Route::get('chi-tiet-san-pham/{id}','HomeController@detail')->name('detail');
	
	Route::get('danh-muc-cac-san-pham/{id}','HomeController@allProduct')->name('allProduct');

	Route::get('cac-san-pham/{id}','HomeController@CateProduct')->name('cateProduct');

	Route::get('san-pham','HomeController@product')->name('product');
	/******************** Cart *********************/

});

Route::group([
	'namespace'=>'FrontEnd'
],function(){
	Route::POST('cart','CartController@cart')->name('Cart');
	Route::get('show-cart','CartController@showCart')->name('showCart');
	Route::POST('delete-cart','CartController@deleteCart')->name('deleteCart');
	Route::POST('update-cart','CartController@updateCart')->name('updateCart');
});

Route::group([
	'namespace'=>'FrontEnd'
],function(){
	Route::get('payment','PaymentController@index')->name('payment');
	Route::post('payment-order','PaymentController@PayOrder')->name('paymentOrder');
});
