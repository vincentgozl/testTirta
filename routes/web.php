<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::resource('toko', 'App\Http\Controllers\TokoController');
Route::resource('transaksi', 'App\Http\Controllers\TransaksiController');
Route::resource('areasales', 'App\Http\Controllers\AreaSalesController');
Route::resource('sales', 'App\Http\Controllers\SalesController');

Route::get('/exp-transaksi', 'TransaksiController@exportTransaksi')->name('exp-transaksi');
Route::get('/generate-pdf', 'TransaksiController@generatePDF')->name('generate-pdf');


