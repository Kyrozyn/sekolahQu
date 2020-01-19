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
    return view('home.index');
});
Route::get("/apisekolah",'ApiSekolah@api');
Route::get("/apisekolah/daerah/{kodedaerah}",'ApiSekolah@namaSekolah');
Route::get('/masuk', 'User@masuk');
Route::post('/user/login', 'User@login');
Route::get('/logout', 'User@logout');
Route::post('user/signup', 'User@signup');
Route::match(['get','post'],'/daftar', 'User@daftar');
Route::get('/dashboard', 'Dashboard@index');
Route::get('/daftar/api', 'Dashboard@index');
Route::group(['middleware' => 'usersession'], function () {

});

