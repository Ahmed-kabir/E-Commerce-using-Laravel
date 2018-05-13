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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','WelcomeController@index');
Route::get('/categorywise/{id}','WelcomeController@category');
Route::get('/view/{id}','WelcomeController@view');

Auth::routes();

Route::get('/home','HomeController@index');

//category start
Route::get('/category/add','CategoryController@addcategory');
Route::post('/save-category','CategoryController@savecategory');
Route::get('/category/manage','CategoryController@managecategory');
Route::get('/edit_category/{id}','CategoryController@editcategory');
Route::post('/updatecategory','CategoryController@updatecategory');
Route::get('/category/delete/{id}','CategoryController@deletecategory');
//category end

//manufecture start
Route::get('/manufecture/add','ManufectureController@addManufecture');
Route::post('/manufecture/store','ManufectureController@saveManufecture');
Route::get('/manufecture/manage','ManufectureController@manageManufecture');
Route::get('/edit/manufecture/{id}','ManufectureController@editManufecture');
Route::post('/update/manufecture','ManufectureController@updateManufecture');
Route::get('/delete/manufecture/{id}','ManufectureController@deleteManufecture');
//manufecture end

//product start
Route::get('/product/add','ProductController@addProduct');
Route::post('/product/store','ProductController@saveProduct');
Route::get('/product/manage','ProductController@manageProduct');
Route::get('/product/view/{id}','ProductController@viewProduct');
Route::get('/edit/product/{id}','ProductController@editProduct');
Route::post('/update/product','ProductController@updateProduct');
Route::get('/delete/product/{id}','ProductController@deleteProduct');
//product end


//cart start
Route::post('/cart/add','CartController@addToCart');
Route::get('/cart/show','CartController@showCart');
Route::post('/update-cart','CartController@updateCart');
Route::get('/delete/cart/{rowId}','CartController@deleteCart');
Route::get('/check-out','CartController@CheckOut');


//cart end

//order start
Route::post('/order/confirm','OrderController@order');
