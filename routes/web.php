<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\PemesananController;

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

Route::get('/', [IndexController::class, 'index'])->name('index')->middleware('is_user');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);


Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [HomeController::class, 'home'])->name('home')->middleware('is_user');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('homeAdmin',[HomeController::class,'adminHome'])->name('adminHome')->middleware('is_admin');
    Route::resource('admin/data-buku', BukuController::class)->middleware('is_admin');
    Route::get('/chart', [ChartController::class,'chart']);
    Route::get('/pesanBuku/{id}', [BukuController::class,'pesanBuku']);
    Route::get('admin/pemesanan', [PemesananController::class,'daftarPemesanan']);


});


Route::get('/komik',[HomeController::class,'komik']);


Route::get('/novel', [HomeController::class,'novel']);
Route::get('/biografi', [HomeController::class,'biografi']);
Route::get('/cerpen', [HomeController::class,'cerpen']);
Route::get('/ensiklopedia', [HomeController::class,'ensiklopedia']);
Route::get('/dongeng', [HomeController::class,'dongeng']);
Route::get('/biografi', [HomeController::class,'biografi']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/detailBuku/{id}', [BukuController::class,'detailBuku']);
Route::post('/order/{id}',[BukuController::class,'order']);
Route::get('/checkout',[PemesananController::class,'getPemesanan']);
Route::get('/detailPemesanan/{id_pemesanan}',[PemesananController::class,'detailPemesanan']);

//Routing for Cart
Route::get('/cart',[ChartController::class,'chart']);

Route::post('/bayar/{id_pemesanan}',[ChartController::class,'bayar']);

Route::get('/terima/{id_pemesanan}',[PemesananController::class,'terima']);
Route::get('/tolak/{id_pemesanan}',[PemesananController::class, 'tolak']);



