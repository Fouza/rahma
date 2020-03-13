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
Route::get('/parc', function () {
    return view('/parc');
});
Route::get('/parc/entretiens',function(){
    return view('/entretiens');
});
Route::get('/clients', function () {
    return view('/clients');
});
Route::get('/drivers', function () {
    return view('/drivers');
});
Route::get('/admin/users', function () {
    return view('/admin/users');
});
Route::get('/locations', function () {
    return view('/locations');
});
Route::get('/partners', function () {
    return view('/partners');
});
Route::get('/finance', function () {
    return view('/finance');
});
