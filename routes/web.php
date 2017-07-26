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
    return view('welcome');
});
Route::get('input', function() {
    return view('pages.manual-insert');
});
Route::post('input', 'JamaahController@input')->name('input');

/*Jamaah*/
Route::group(['prefix' => 'jamaah'], function() {
    Route::get('registrasi', function() {
        return view('pages.form-registrasi');
    });
    Route::post('registrasi', 'JamaahController@registerJamaah');
    Route::get('cek', function() {
        return view('pages.cek-status');
    });
    Route::post('cek', 'JamaahController@cek')->name('jamaah/cek');
});

/*Admin*/
Route::group(['prefix' => 'admin'], function() {
	Route::get('signup', function() {
	    return view('admin.registrasi');
	});
	Route::post('signup', 'AdminController@index')->name('admin/signup');
    Route::get('login', function() {
        return view('admin.login');
    });
    Route::post('login', 'AdminController@login')->name('admin/login');
    Route::get('daftar-jamaah', 'AdminController@daftarJamaah');
    Route::get('logout', 'AdminController@logout')->name('admin/logout');
    Route::get('input-kanwil', function(){
        return view('admin.input-kanwil');
    });
    Route::post('input-kanwil', 'AdminController@inputKanwil')->name('admin/input-kanwil');
    Route::get('input-kancab', function() {
        return view('admin.input-kancab');
    });
    Route::post('input-kancab', 'AdminController@inputKancab')->name('admin/input-kancab');
    Route::get('input-agen', function() {
        return view('admin.input-kancab');
    });
    Route::post('input-agen', 'AdminController@inputAgen')->name('admin/input-agen');
});

/*
|---------------------------------------------------------------------------
| To Do List
|---------------------------------------------------------------------------
|
| 1. Validation Client Side
| 2. Rule validation
| 3. Db migration
| 4. Menu
| 5. Split form (Smooth Transition)
| 6. Model
| 7. Upload File Handling
|
*/