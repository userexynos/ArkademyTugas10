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

Route::get('/', 'ProdukController@index')->name("index");
Route::get('/tambah_produk', 'ProdukController@create')->name("add_product");
Route::post('/tambah', 'ProdukController@store')->name("add");
Route::delete('/hapus/{id}', 'ProdukController@delete')->name("delete");
Route::get('/ubah_produk/{id}', 'ProdukController@edit')->name("edit");
Route::patch('/ubah', 'ProdukController@update')->name("update");
Route::get('/detail/{id}', 'ProdukController@detail')->name("detail");