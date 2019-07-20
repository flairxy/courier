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


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/services', 'HomeController@services')->name('service');
Route::get('/track-shipment', 'TrackShipmentController@index')->name('track-shipment');
Route::post('/track', 'TrackShipmentController@track')->name('track');
Route::get('/track', 'TrackShipmentController@abort')->name('track');

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', ['uses' => 'AdminController@index'])->name('admin.dashboard');
    Route::resources([
        'shipment' => 'ShipmentController',
        'manager' => 'ManagerController',
        'office' => 'OfficeController',
    ]);
});

Auth::routes();
Route::get('/management', 'Auth\LoginController@showLoginForm2')->name('login');
ROute::post('/management', 'Auth\LoginController@login');
