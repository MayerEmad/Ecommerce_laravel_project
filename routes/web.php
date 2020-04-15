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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/category','CategoryController@index');
Route::get('/category/create','CategoryController@create');
Route::post('/category/store','CategoryController@store');
Route::get('/category/{id}/edit','CategoryController@edit');
Route::post('/category/update','CategoryController@update');
Route::get('/category/{id}/delete','CategoryController@delete');
Route::get('/category/{id}','CategoryController@show');

Route::get('/justproduct', 'ProductController@index');
Route::get('/card', function () { return view('product_pages.card');} );
Route::get('/history', function () { return view('product_pages.history');} );

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
