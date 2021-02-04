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

Auth::routes();
// Lista clientes
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/criar', 'HomeController@criar')->name('criar');

Route::post('/criar', 'HomeController@criar')->name('criar');

Route::get('/alterar/{cliente}', 'HomeController@alterar')->name('alterar');

Route::put('/atualizar/{cliente_id}', 'HomeController@atualizar')->name('atualizar');

Route::delete('/deletar/{cliente_id}', 'HomeController@deletar')->name('deletar');


