<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'DashboardController@index')->name('getDashboard');
Route::get('dashboard', 'DashboardController@index')->name('getDashboard');

Route::group(['prefix' => 'master'], function () {
    Route::get('dataPeserta', 'Master\DataPesertaController@index')->name('getPeserta');
    Route::get('dataPeserta/json', 'Master\DataPesertaController@json')->name('getJsonPeserta');
    Route::get('dataPeserta/add', 'Master\DataPesertaController@add')->name('dataPeserta.add');
    Route::get('dataPeserta/updateRole/{id}', 'Master\DataPesertaController@updateRole')->name('dataPeserta.updateRole');
    Route::get('dataPeserta/getPesertaById/{id}', 'Master\DataPesertaController@getPesertaById')->name('dataPeserta.getPesertaById');
    Route::post('dataPeserta/updateData', 'Master\DataPesertaController@updateData')->name('dataPeserta.updateData');
    Route::get('dataPeserta/delete/{id}', 'Master\DataPesertaController@delete')->name('dataPeserta.delete');

    Route::get('dataPenguji', 'Master\DataPengujiController@index')->name('getPenguji');
    Route::get('dataPenguji/add', 'Master\DataPengujiController@add')->name('dataPenguji.add');
    Route::get('dataPenguji/getPengujiById/{id}', 'Master\DataPengujiController@getPengujiById')->name('dataPenguji.getPengujiById');
    Route::post('dataPenguji/updateData', 'Master\DataPengujiController@updateData')->name('dataPenguji.updateData');
    Route::get('dataPenguji/delete/{id}', 'Master\DataPengujiController@delete')->name('dataPenguji.delete');
    Route::get('dataPenguji/updateRole/{id}', 'Master\DataPengujiController@updateRole')->name('dataPenguji.updateRole');
});

Route::group(['prefix' => 'fit-proper'], function () {
    Route::get('pendaftaran', 'FitProper\FitProperController@pendaftaran')->name('fitProper.pendaftaran');
    Route::get('pendaftaran/getPegawaiById/{id}', 'FitProper\FitProperController@getPegawaiById')->name('fitProper.getPegawaiById');
    Route::get('pencarian', 'FitProper\FitProperController@pencarian')->name('fitProper.pencarian');
    Route::get('pencarian/pencarianById/{id}', 'FitProper\FitProperController@pencarianById')->name('fitProper.pencarianById');
});