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
    return view('accueil');
});

Route::get('ticket', function () {
    return view('merci');
})->name('merci');

Route::resource('supportTotals','SupportTotalController');
Route::resource('supportOnlines','SupportOnlineController');

Route::post('achattotal', 'SupportTotalController@achat')->name('achattotal');
Route::post('achatonline', 'SupportOnlineController@achat')->name('achatonline');
