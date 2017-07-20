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
    return view('indonesia.frontend.index');
});

Route::get('/kontak', function () {
    return view('indonesia.frontend.kontak');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
	Route::resource('hak-akses','AksesController');
	Route::resource('artikel','ArtikelController');
});

Route::group(['prefix'=>'author-artikel','middleware'=>['auth','role:artikel']], function(){
	Route::resource('artikel','ArtikelController');
});

Route::get('akun/profile','AkunController@profile');
Route::get('akun/profile/edit','AkunController@editProfile');
Route::post('akun/profile','AkunController@updateProfile');
Route::get('akun/password','AkunController@editPassword');
Route::post('akun/password','AkunController@updatePassword');