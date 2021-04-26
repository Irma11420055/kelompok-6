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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/novel', function () {
    return view('novel');
});

Route::get('/cerpen', function () {
    return view('cerpen');
});

Route::get('/komik', function () {
    return view('komik');
});

Route::get('/biografi', function () {
    return view('biografi');
});

Route::get('/ensiklopedia', function () {
    return view('ensiklopedia');
});

Route::get('/dongeng', function () {
    return view('dongeng');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

