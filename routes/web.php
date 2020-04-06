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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth', 'isAdmin')->namespace('Admin')->group(
    function() {
    Route::get('admin/users', 'UsersController@index')->name('admin.users');
    Route::get('admin/user/{id}', 'UsersController@getUser')->name('admin.user');
    Route::get('admin/prospects', 'ProspectsController@index')->name('admin.prospects');
    Route::get('admin/prospect/{id}', 'ProspectsController@show')->name('admin.prospect');

    Route::post('admin/users/store', 'UsersController@store')->name('admin.user.store');

    Route::put('admin/user/update', 'UsersController@update')->name('admin.user.update');
});