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
Route::get('/compt', function () {
    return view('compt');
});
Route::get('/parc/entretiens/{carId}','EntretienController@show')->name('entretiens');



Route::get('/admin/users', function () {
    return view('/admin/users');
});

Route::get('/finance', function () {
    return view('/finance');
});

Route::get('car/parc','CarController@index')->name('parc');
Route::post('car/store','CarController@store');
Route::get('car/del/{carId}','CarController@destroy')->name('cardel');
Route::get('downloadcontrole/{carId}','CarController@downloadControle')->name('downloadcontrole');
Route::get('downloadassurance/{carId}','CarController@downloadAssurance')->name('downloadassurance');
Route::get('/parc/editcar/{carId}','CarController@edit')->name('editcar');
Route::post('/parc/update/{carId}','CarController@update')->name('updatecar');

Route::get('/drivers','DriverController@index');
Route::post('driver/store','DriverController@store');
Route::get('driver/del/{driverId}','DriverController@destroy')->name('dridel');
Route::get('driver/editdriver/{driverId}','DriverController@edit')->name('editdriver');
Route::post('driver/update/{driverId}','DriverController@update')->name('updatedriver');

Route::post('platform/store','PlatformController@store');
Route::get('platforms','PlatformController@index')->name('platforms');

Route::get('locations','LocationController@index');
Route::post('location/store','LocationController@store');
Route::get('downloadlocation/{locationId}','LocationController@downloadContrat')->name('downloadlocation');

Route::get('partners','PartnerController@index');
