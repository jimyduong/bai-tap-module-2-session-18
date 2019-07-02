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

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'BlogController@index')->name('blog.index');
    Route::get('{id}/view', 'BlogController@view')->name('blog.view');
});