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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('index', 'AdminController@index');
    Route::resource('category', 'CategoryController');

    Route::resource('product', 'ProductController');
    Route::post('cat', 'GroupController@store');
    Route::post('group', 'GroupController@addAtrribute');
    Route::post('attr', 'GroupController@addAttributeitem');
    Route::post('size', 'GroupController@addSize');
    Route::post('image', 'ImageController@addImage');




});



