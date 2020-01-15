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
    return view('index');
});
Route::get('/masuk', 'User@masuk');
Route::post('/user/login', 'User@login');
Route::get('/logout', 'User@logout');
Route::post('user/signup', 'User@signup');
Route::match(['get','post'],'/daftar', 'User@daftar');
Route::group(['middleware' => 'usersession'], function () {
    Route::get('/dashboard', 'Dashboard@index');
    Route::resource('dashboard/siswa', 'Admin\\siswaController');
});

