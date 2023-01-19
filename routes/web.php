<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function(){
    return redirect()->route('home');
});
Route::get('auth', 'AuthController@index')->name('auth');
Route::post('login', 'AuthController@do_login');
Route::post('register', 'AuthController@do_register');

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('logout', 'AuthController@do_logout')->name('logout');
});
Route::group(['middleware' => 'auth:web','verified'], function () {
    Route::get('home', 'HomeController@index')->name('home');
    
    Route::get('pengadopsi', 'AdopsiController@index_pengadopsi')->name('pengadopsi');
    Route::get('adopsi', 'AdopsiController@index')->name('adopsi');
    Route::post('index-adopsi', 'AdopsiController@index')->name('adopsi_index');
    Route::get('hewan/{donasi}/adopsi', 'AdopsiController@show');
    Route::post('adopsi/store', 'AdopsiController@store')->name('adopsi_store');
    Route::get('adopsi/{adopsi}/edit', 'AdopsiController@edit');
    Route::post('adopsi/{adopsi}/deny', 'AdopsiController@deny');
    Route::post('adopsi/{adopsi}/acc', 'AdopsiController@acc');

    Route::get('donasi', 'DonasiController@index')->name('donasi');
    Route::get('donasi/pdf', 'DonasiController@pdf')->name('donasi_pdf');
    Route::get('donasi/excel', 'DonasiController@excel')->name('donasi_excel');
    Route::post('donasi/store', 'DonasiController@store')->name('donasi_store');
    Route::post('donasi/{donasi}/deny', 'DonasiController@deny');
    Route::post('donasi/{donasi}/acc', 'DonasiController@acc');
    Route::get('donasi/{donasi}/edit', 'DonasiController@edit');
    Route::post('donasi/{donasi}/update', 'DonasiController@update_donasi')->name('donasi_update');
});
