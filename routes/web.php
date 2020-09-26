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

Route::get('/', 'HomeController@index')->name ('welcome');
Route::post('/reservation', 'ReserveController@reserve')->name ('reservation.reserve');
Route::post('/contact','ContactController@Message')->name('contact.send');



Route::group (['prefix'=>'admin', 'middleware'=>'auth', 'namespace'=>'Admin'], function (){
    Route::get ('dashboard', 'DashboardController@index')-> name ('admin.dashboard');
    Route::resource ('slider', 'SliderController');
    Route::resource ('category', 'CatagoryController');
    Route::resource ('item', 'ItemController');
    Route::get ('reservation', 'ReservationController@index')-> name ('reservation.index');
    Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');
});

