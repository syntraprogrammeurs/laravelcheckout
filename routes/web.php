<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function(){
    return view('admin.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**backend**/
Route::get('/admin', function(){
   return view('admin.index');
});
Route::resource('/admin/users', 'AdminUsersController');
Route::resource('/admin/brands', 'AdminBrandsController');
Route::resource('/admin/categories', 'AdminCategoriesController');
Route::resource('/admin/discounts', 'AdminDiscountsController');
Route::resource('/admin/products', 'AdminProductsController');
Route::resource('/admin/photos', 'AdminPhotosController');
