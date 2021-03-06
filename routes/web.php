<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/Jabatan', 'jabatancontroller');
Route::resource('/Golongan', 'golongancontroller');
Route::resource('/Pegawai', 'pegawaicontroller');
Route::resource('/Tunjangan', 'tunjangancontroller');
Route::resource('/TunjanganPegawai', 'tunjanganpegawaicontroller');
Route::group(['middleware' => ['api'],'prefix' => 'api'], function () {
    Route::post('register', 'APIController@register');
    Route::post('login', 'APIController@login');
    Route::group(['middleware' => 'jwt-auth'], function () {
    	Route::post('get_user_details', 'APIController@get_user_details');
    });
});
Route::resource('/KategoriLembur', 'kategorilemburcontroller');