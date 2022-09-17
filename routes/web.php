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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pesan', 'PesanController@pesan');

Route::post('/pesan', 'PesanController@cart');

Route::get('/check-out', 'PesanController@checkout');
Route::delete('/check-out/{id}', 'PesanController@delete');
Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('/profil', 'ProfilController@profil');
Route::get('/edit-profile', 'ProfilController@edit');
Route::post('/profil', 'ProfilController@update');

Route::get('/history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');



