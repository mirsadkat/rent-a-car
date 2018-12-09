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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kontakt', 'KontaktController@index')->name('kontakt');
Route::get('/vehicles', 'VehiclesController@index')->name('vehicles');
Route::post('/welcome', array('uses' => 'RentFormaController@store'));

Route::namespace ('admin')->group(function () {
    Route::get('/logout', 'Auth\LoginController@logout');
    Auth::routes();
    Route::get('/admin', 'HomeController@index');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', function () {
        return view('admin.index');
    });

    Route::resource('admin/cars', 'AdminCarsController');
    Route::resource('admin/users', 'AdminUserController');
    Route::resource('admin/vehicles', 'AdminCarsController');
    Route::get('admin/users/edit/{id}', ['as' => 'admin.users.edit', 'uses' => 'AdminUserController@edit']);
    Route::post('admin/users/update/{user}', ['as' => 'admin.users.update', 'uses' => 'AdminUserController@update']);
    Route::get('admin/users/delete/{user}', ['as' => 'admin.users.delete', 'uses' => 'AdminUserController@destroy']);
    
    Route::get('admin/vehicles/edit/{id}', ['as' => 'admin.vehicles.edit', 'uses' => 'AdminCarsController@edit']);
    Route::post('admin/vehicles/update/{vehicle}', ['as' => 'admin.vehicles.update', 'uses' => 'AdminCarsController@update']);
});
