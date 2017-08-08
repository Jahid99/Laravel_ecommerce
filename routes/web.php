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

Route::group(['middleware'=>'language'],function(){
	Route::get('language/{lang}', function ($lang) {
    \Session::put('locale',$lang);
    return redirect()->back();
});
});

Route::group(['middleware' => ['web']], function () {

	Route::get('/', [
	    'uses' => 'HomeController@index',
	    'as' => 'app.home'
	]);

	Route::get('/admin', [
	    'uses' => 'AdminController@index',
	    'as' => 'admin.index'
	]);
	Route::get('/admin/create', [
	    'uses' => 'AdminController@create',
	    'as' => 'admin.create'
	]);

	Route::get('/edit/{id}', [
	    'uses' => 'AdminController@edit',
	    'as' => 'admin.edit'
	]);

	Route::put('/update/{id}', [
	    'uses' => 'AdminController@update',
	    'as' => 'admin.update'
	]);

	Route::post('/store', [
	    'uses' => 'AdminController@store',
	    'as' => 'admin.store'
	]);

	Route::get('/destroy/{id}', [
	    'uses' => 'AdminController@destroy',
	    'as' => 'admin.destroy'
	]);

	Route::resource('contact', 'ContactController');

	Route::get('/shop', [
	    'uses' => 'ShopController@index',
	]);

	Route::any('/search', [
	    'uses' => 'SearchController@index',
	]);

	Route::get('/category/{category_name}/{subcategory_name?}', [
	    'uses' => 'CategoryController@index',
	]);

	Route::get('/brand/{brand_name}', [
	    'uses' => 'BrandController@index',
	]);

	Route::get('/myaccount', [
	    'uses' => 'MyaccountController@index',
	]);

	Route::get('/products/details/{product_slug}',  [
	    'uses' => 'ProductController@product_details',
	]);

	Route::post('/post_review', [
    'uses' => 'ProductController@post_review',
    'as' => 'post.review'
	]);

	Route::resource('cart', 'CartController');

	Route::resource('checkout', 'CheckoutController');



});
Auth::routes();
