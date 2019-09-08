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
//     return view('welcome');
// });

Route::get('/', 'IndexController@index')->name('index');
Route::get('/checkout', 'IndexController@checkout')->name('checkout');
Route::get('/product', 'IndexController@product')->name('product');
Route::get('/allitem', 'IndexController@allitem')->name('allitem');
Route::get('/admin', 'IndexController@admin')->name('admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
