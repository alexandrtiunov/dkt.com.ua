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

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\IndexController@index');
    Route::get('/products', 'Admin\IndexController@products');
    Route::get('/companies', 'Admin\IndexController@companies');

    Route::get('/categories', 'Admin\IndexController@categories');
    Route::post('/categories', 'Admin\CategoryController@addCategory');


    Route::get('/spare_parts', 'Admin\IndexController@spareParts');
});

//Route::get('/admin', 'Admin\IndexController@index');
