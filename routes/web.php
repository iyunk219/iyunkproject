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
// Rute utama
Route::get('/home', function () {
    return view('index');
});

// Rute login
Route::get('/login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('/login', 'App\Http\Controllers\LoginController@login');

// Rute frontend
Route::get('/backend_home', 'App\Http\Controllers\BackController@backend_home');
Route::get('/pembeli', 'App\Http\Controllers\FrontController@pembeli');
Route::get('/produk', 'App\Http\Controllers\FrontController@produk');
Route::get('/pemesanan', 'App\Http\Controllers\FrontController@pemesanan');
Route::get('/about', 'App\Http\Controllers\FrontController@about');
Route::get('/blog', 'App\Http\Controllers\FrontController@blog');
Route::get('/contact', 'App\Http\Controllers\FrontController@contact');
Route::get('/cart', 'App\Http\Controllers\FrontController@cart');
Route::get('/checkout', 'App\Http\Controllers\FrontController@checkout');

// Middleware untuk backend
Route::group(['middleware' => 'LoginMiddleware'], function() {
// Rute backend
Route::get('/backend/produk', 'App\Http\Controllers\ProdukController@index')->name('produk');
route::get('/backend/produk/create','App\Http\Controllers\ProdukController@create');
route::post('/backend/produk/store','App\Http\Controllers\ProdukController@store');
route::get('/backend/produk/edit/{id}','App\Http\Controllers\ProdukController@edit');
route::put('/backend/produk/update/{id}','App\Http\Controllers\ProdukController@update');
route::get('/backend/produk/destroy/{id}','App\Http\Controllers\ProdukController@destroy');

//pemesanan
route::get('/backend/pemesanan','App\Http\Controllers\PemesananController@index')->name('pemesanan');
route::get('/backend/pemesanan/create','App\Http\Controllers\PemesananController@create');
route::post('/backend/pemesanan/store','App\Http\Controllers\PemesananController@store');
route::get('/backend/pemesanan/edit/{id}','App\Http\Controllers\PemesananController@edit');
route::put('/backend/pemesanan/update/{id}','App\Http\Controllers\PemesananController@update');
route::get('/backend/pemesanan/destroy/{id}','App\Http\Controllers\PemesananController@destroy');


//pembeli
route::get('/backend/pembeli','App\Http\Controllers\PembeliController@index')->name('index');
route::get('/backend/pembeli/create','App\Http\Controllers\PembeliController@create');
route::post('/backend/pembeli/store','App\Http\Controllers\PembeliController@store');
route::get('/backend/pembeli/edit/{id}','App\Http\Controllers\PembeliController@edit');
route::post('/backend/pembeli/update/{id}','App\Http\Controllers\PembeliController@update');
route::get('/backend/pembeli/destroy/{id}','App\Http\Controllers\PembeliController@destroy');

//admin
//pembeli
route::get('/backend/admin','App\Http\Controllers\AdminController@index')->name('index');
route::get('/backend/admin/create','App\Http\Controllers\AdminController@create');
route::post('/backend/admin/store','App\Http\Controllers\AdminController@store');
route::get('/backend/admin/edit/{id}','App\Http\Controllers\AdminController@edit');
route::post('/backend/admin/update/{id}','App\Http\Controllers\AdminController@update');
route::get('/backend/admin/destroy/{id}','App\Http\Controllers\AdminController@destroy');

//laporan
route::get('/backend/laporan','App\Http\Controllers\LaporanController@index')->name('index');
route::get('/backend/laporan/cetak','App\Http\Controllers\LaporanController@cetak');

//logut
route::get('logout','App\Http\Controllers\LoginController@logout')->name('logout');
});

?>