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

Route::group(['prefix' => 'cities'], function () {
    Route::get('/','CityController@index')->name('cities.index');
    Route::get('/create','CityController@create')->name('cities.create');
    Route::post('/store','CityController@store')->name('cities.store');
    Route::get('{id}/edit','CityController@edit')->name('cities.edit');
    Route::post('{id}/update','CityController@update')->name('cities.update');
    Route::get('{id}/destroy','CityController@destroy')->name('cities.destroy');
});
Route::group(['prefix' => 'customers'], function () {
    Route::get('/','CustomersController@index')->name('customers.index');
    Route::get('/create','CustomersController@create')->name('customers.create');
    Route::post('/store','CustomersController@store')->name('customers.store');
    Route::get('{id}/edit','CustomersController@edit')->name('customers.edit');
    Route::post('{id}/update','CustomersController@update')->name('customers.update');
    Route::get('/filter','CustomersController@filterByCity')->name('customers.filterByCity');
    Route::get('/search','CustomerController@search')->name('customers.search');
});
