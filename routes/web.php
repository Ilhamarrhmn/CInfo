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

// Index
Route::get('/', 'ArtikelController@index');
Route::get('/artikel-covid', 'IndexController@artikel1');
Route::get('/artikel-kesehatan', 'IndexController@artikel2');
Route::get('/artikel-newnormal', 'IndexController@artikel3');
Route::get('/adminupload', 'ArtikelController@upload');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/admingambar', 'UploadController@index')->name('admingambar');
Route::get('/hapus/{id}', 'UploadController@hapus')->name('gambar.hapus');

Route::resource('member', 'MemberController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
