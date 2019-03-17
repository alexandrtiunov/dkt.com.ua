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

Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', 'Admin\IndexController@index');
    Route::get('/products', 'Admin\IndexController@products');
    Route::get('/companies', 'Admin\IndexController@companies');

    Route::get('/categories', 'Admin\IndexController@categories');
    Route::post('/categories', 'Admin\CategoryController@addCategory');

    Route::get('/spare_parts', 'Admin\IndexController@spareParts');


    Route::get('/profile/{id}', 'Admin\ProfileController@profile');
    Route::post('/profile/{id}', 'Admin\ProfileController@updateUser');
    Route::post('{id}/profile/', 'Admin\ProfileController@createCompany');
    Route::get('{id}/profile/', 'Admin\ProfileController@updateCompany');

});

//Route::get('/admin', 'Admin\IndexController@index');

Auth::routes();
//Route::get('/register', 'Admin\Auth\RegisterController@index');
//Route::post('/register', 'Admin\Auth\RegisterController@register');

Route::get('/home', 'HomeController@index')->name('home');
