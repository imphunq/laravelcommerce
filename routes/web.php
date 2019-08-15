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

Route::get('/', 'HomeController@trangchu')->name('trangchu');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/detail', 'HomeController@detail')->name('detail');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
Route::post('/checkout','HomeController@postcheckout')->name('checkout');
Route::get('/sanpham/{id}','HomeController@productCate')->name('sanpham');

Route::get('chi-tiet-san-pham/{id}/{tenloai}','HomeController@chitietsanpham')->name('chi-tiet-san-pham');

Route::get('lien-he','HomeController@get_lienhe')->name('lien-he');
Route::post('lien-he','HomeController@post_lienhe')->name('lien-he');

Route::post('mua-hang/{id}/{tensanpham}','HomeController@muahang')->name('mua-hang');
Route::get('cart', 'HomeController@getDetailCart')->name('detailcart');
Route::post('updateCart/{id}', 'HomeController@updateCart')->name('update-cart');

Route::get('xoa-san-pham/{id}','HomeController@xoasanpham')->name('xoa-san-pham');
Route::get('sua-san-pham/{id}','HomeController@suasanpham')->name('sua-san-pham');
Route::get('gio-hang','HomeController@giohang')->name('gio-hang');

Route::get('dang-nhap','HomeController@dangnhap')->name('dang-nhap');
Route::post('dang-nhap','HomeController@postdangnhap')->name('dang-nhap');
Route::get('dang-xuat','HomeController@dangxuat')->name('dang-xuat');
Route::get('dang-ky','HomeController@dangky')->name('dang-ky');
Route::post('dang-ky','HomeController@postdangky')->name('dang-ky');
// route tim kiem
Route::get('search','HomeController@search')->name('search');



Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
Route::post('admin/dangnhap','UserController@postdangnhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'category'],function(){
		
		Route::get('danhsach','CategoryController@getDanhSach');

		Route::get('sua/{id}','CategoryController@getSua');

		Route::post('sua/{id}','CategoryController@postSua');

		Route::get('them','CategoryController@getThem');

		Route::post('them','CategoryController@postThem');

		Route::get('xoa/{id}','CategoryController@getXoa');
	});

	Route::group(['prefix'=>'product'],function(){
		
		Route::get('danhsach','ProductController@getDanhSach');

		Route::get('sua/{id}','ProductController@getSua');

		Route::post('sua/{id}','ProductController@postSua');

		Route::get('them','ProductController@getThem');

		Route::post('them','ProductController@postThem');

		Route::get('xoa/{id}','ProductController@getXoa');
	});

	Route::group(['prefix'=>'color'],function(){
		
		Route::get('danhsach','ColorController@getDanhSach');

		Route::get('sua/{id}','ColorController@getSua');

		Route::post('sua/{id}','ColorController@postSua');

		Route::get('them','ColorController@getThem');

		Route::post('them','ColorController@postThem');

		Route::get('xoa/{id}','ColorController@getXoa');
	});

	Route::group(['prefix'=>'size'],function(){
		
		Route::get('danhsach','SizeController@getDanhSach');

		Route::get('sua/{id}','SizeController@getSua');

		Route::post('sua/{id}','SizeController@postSua');

		Route::get('them','SizeController@getThem');

		Route::post('them','SizeController@postThem');

		Route::get('xoa/{id}','SizeController@getXoa');
	});

	Route::group(['prefix'=>'user'],function(){
		
		Route::get('danhsach','UserController@getDanhSach');

		Route::get('sua/{id}','UserController@getSua');

		Route::post('sua/{id}','UserController@postSua');

		Route::get('them','UserController@getThem');

		Route::post('them','UserController@postThem');

		Route::get('xoa/{id}','UserController@getXoa');
	});
});