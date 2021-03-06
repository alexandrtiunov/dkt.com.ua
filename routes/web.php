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

Route::get('/profile/{id}', 'ProfileController@profile');

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', 'Admin\IndexController@index');
    Route::get('/products', 'Admin\IndexController@products');
    Route::get('/companies', 'Admin\IndexController@companies');

    Route::get('/categories', 'Admin\IndexController@categories');
    Route::post('/categories', 'Admin\CategoryController@addCategory');
    Route::get('/category/{id}', 'Admin\CategoryController@editCategory');
    Route::post('/category/{id}', 'Admin\CategoryController@updateCategory');

    Route::get('/spare_parts', 'Admin\IndexController@spareParts');


    Route::get('/profile/{id}', 'Admin\ProfileController@profile');
    Route::post('/profile/{id}', 'Admin\ProfileController@updateUser');
    Route::post('{id}/profile/', 'Admin\ProfileController@createCompany');
    Route::get('{id}/profile/', 'Admin\ProfileController@updateCompany');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
