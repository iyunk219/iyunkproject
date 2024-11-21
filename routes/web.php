<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\loginRegisterController;

use Illuminate\Support\Facades\Auth;
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
// // Rute untuk halaman registrasi
// Route::get('/register', function () {
//     return view('register'); })->name('register');

// // // Rute untuk halaman index
// // Route::get('/index', function () {
// //     return view('index');
// // })->name('index');

// // Rute login
// Route::post('/loginfront', 'App\Http\Controllers\loginfrontController@login');

// Route::post('/register', 'App\Http\Controllers\loginfrontController@register');

// Route::get('/login', 'App\Http\Controllers\LoginRegisterController@login')->name('login'); // GET method
// Route::post('/login', 'App\Http\Controllers\LoginRegisterController@authenticate')->name('authenticate'); // POST method

// Route::get('/register', 'App\Http\Controllers\LoginRegisterController@register')->name('register'); // GET method
// Route::post('/register', 'App\Http\Controllers\LoginRegisterController@store')->name('store'); // POST method
Route::get('user-page', function () {
    return 'index';
})->middleware('role:user')->name('template.layout');
Route::get('/cart', 'App\Http\Controllers\FrontController@cart')->name('cart');

Route::get('/produk', 'App\Http\Controllers\FrontController@produk')->name('produk');
Route::get('/pembeli', 'App\Http\Controllers\FrontController@pembeli')->name('pembeli');
Route::get('/pemesanan', 'App\Http\Controllers\FrontController@pemesanan')->name('pemesanan');
Route::get('/about', 'App\Http\Controllers\FrontController@about')->name('about');
Route::get('/blog', 'App\Http\Controllers\FrontController@blog')->name('blog');
Route::get('/contact', 'App\Http\Controllers\FrontController@contact')->name('contact');

Route::group(['middleware' => ['auth']], function () {
Route::get('/checkout', 'App\Http\Controllers\FrontController@checkout')->name('checkout');
// Route::get('/login', 'App\Http\Controllers\LoginRegisterController@login');
});

Route::get('admin-page', function () {
    return 'index';
})->middleware('role:admin')->name('template.main');
// Rute backend

Route::middleware("auth")->get("/home", function () {
    $user = Auth::user();
    if ($user->hasRole("user")) {
        return redirect('checkout');
    } else {
        return redirect('backend_home');
    }
});
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/backend_home', 'App\Http\Controllers\BackController@backend_home');

    Route::get('/backend/produk', 'App\Http\Controllers\ProdukController@index')->name('produk');
    route::get('/backend/produk/create', 'App\Http\Controllers\ProdukController@create');
    route::post('/backend/produk/store', 'App\Http\Controllers\ProdukController@store');
    route::get('/backend/produk/edit/{id}', 'App\Http\Controllers\ProdukController@edit');
    route::put('/backend/produk/update/{id}', 'App\Http\Controllers\ProdukController@update');
    route::get('/backend/produk/destroy/{id}', 'App\Http\Controllers\ProdukController@destroy');

    //pemesanan
    route::get('/backend/pemesanan', 'App\Http\Controllers\PemesananController@index')->name('pemesanan');
    route::get('/backend/pemesanan/create', 'App\Http\Controllers\PemesananController@create');
    route::post('/backend/pemesanan/store', 'App\Http\Controllers\PemesananController@store');
    route::get('/backend/pemesanan/edit/{id}', 'App\Http\Controllers\PemesananController@edit');
    route::put('/backend/pemesanan/update/{id}', 'App\Http\Controllers\PemesananController@update');
    route::get('/backend/pemesanan/destroy/{id}', 'App\Http\Controllers\PemesananController@destroy');


    //pembeli
    route::get('/backend/pembeli', 'App\Http\Controllers\PembeliController@index')->name('index');
    route::get('/backend/pembeli/create', 'App\Http\Controllers\PembeliController@create');
    route::post('/backend/pembeli/store', 'App\Http\Controllers\PembeliController@store');
    route::get('/backend/pembeli/edit/{id}', 'App\Http\Controllers\PembeliController@edit');
    route::post('/backend/pembeli/update/{id}', 'App\Http\Controllers\PembeliController@update');
    route::get('/backend/pembeli/destroy/{id}', 'App\Http\Controllers\PembeliController@destroy');

    //category
    //pembeli
    route::get('/backend/admin', 'App\Http\Controllers\AdminController@index')->name('index');
    route::get('/backend/admin/create', 'App\Http\Controllers\AdminController@create');
    route::post('/backend/admin/store', 'App\Http\Controllers\AdminController@store');
    route::get('/backend/admin/edit/{id}', 'App\Http\Controllers\AdminController@edit');
    route::post('/backend/admin/update/{id}', 'App\Http\Controllers\AdminController@update');
    route::get('/backend/admin/destroy/{id}', 'App\Http\Controllers\AdminController@destroy');

    route::get('/backend/category', 'App\Http\Controllers\categoryController@index')->name('index');
    route::get('/backend/category/create', 'App\Http\Controllers\categoryController@create');
    route::post('/backend/category/store', 'App\Http\Controllers\categoryController@store');
    route::get('/backend/category/edit/{id}', 'App\Http\Controllers\categoryController@edit');
    route::post('/backend/category/update/{id}', 'App\Http\Controllers\categoryController@update');
    route::get('/backend/category/destroy/{id}', 'App\Http\Controllers\categoryController@destroy');

    //laporan
    route::get('/backend/laporan', 'App\Http\Controllers\LaporanController@index')->name('index');
    route::get('/backend/laporan/cetak', 'App\Http\Controllers\LaporanController@cetak');
    //logut
    // route::get('logout','App\Http\Controllers\LoginController@logout')->name('logout');
});


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
Auth::routes();
