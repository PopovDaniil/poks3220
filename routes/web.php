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

Route::get('/products', 'App\Http\Controllers\ProductController@list');

Route::get('/products/add', function () {
    return view('products_form');
});

Route::post('/products/add', 'App\Http\Controllers\ProductController@add');

Route::get('/products/{id}', function ($id) {
    echo "test product $id";
});
