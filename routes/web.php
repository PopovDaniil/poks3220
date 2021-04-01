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

Route::get('/', function () {
    return view('home');
});

Route::get('/products',
'App\Http\Controllers\ProductController@list');

Route::get('/products/add', function () {
    return view('products_form');
});

Route::post('/products/add',
'App\Http\Controllers\ProductController@add');

Route::get('/products/{id}',
'App\Http\Controllers\ProductController@edit');

Route::post('/products/{id}',
'App\Http\Controllers\ProductController@save');

Route::get('products/{id}/delete',
'App\Http\Controllers\ProductController@delete');

Route::get('/products',
'App\Http\Controllers\ProductController@list');



Route::get('/categories',
'App\Http\Controllers\CategoryController@list');

Route::get('/categories/add', function () {
    return view('categories_form');
});
