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
Route::get('/user_create', function () {
    return view('user_create');
});
Route::resource('user','UserController');
Route::resource('barang', 'barang_controller');
Route::resource('paket','paket_controller');
Route::resource('supplier','supplier_controller');
