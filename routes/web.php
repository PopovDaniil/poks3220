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

Route::prefix('products')->group(function () {

    Route::get(
        '',
        'App\Http\Controllers\ProductController@list'
    );

    Route::get('add', function () {
        return view('products_form');
    });

    Route::post(
        'add',
        'App\Http\Controllers\ProductController@add'
    );

    Route::prefix('{id}')->where(['id' => '[0-9]+'])->group(function () {

        Route::get(
            '',
            'App\Http\Controllers\ProductController@edit'
        );

        Route::post(
            '',
            'App\Http\Controllers\ProductController@save'
        );

        Route::get(
            'delete',
            'App\Http\Controllers\ProductController@delete'
        );
    });
});


Route::prefix('categories')->group(function () {
    Route::get(
        '/',
        'App\Http\Controllers\CategoryController@list'
    );

    Route::get('/add', function () {
        return view('categories_form');
    });

    Route::post(
        '/add',
        'App\Http\Controllers\CategoryController@add'
    );

    Route::prefix('{id}')->where(['id' => '[0-9]+'])->group(function () {

        Route::get(
            '',
            'App\Http\Controllers\CategoryController@edit'
        );

        Route::post(
            '',
            'App\Http\Controllers\CategoryController@save'
        );

        Route::get(
            'delete',
            'App\Http\Controllers\CategoryController@delete'
        );
    });
});
