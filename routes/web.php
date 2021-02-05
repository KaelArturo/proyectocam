<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/naves', 'NaveController@index')->name('naves.naves');
Route::get('/naves/create', 'NaveController@create')->name('naves.create');
Route::post('/naves', 'NaveController@store')->name('naves.store');
Route::get('/naves/{nave}/edit','NaveController@edit')->name('naves.edit');
Route::put('/naves/{nave}', 'NaveController@update')->name('naves.update');
Route::delete('/    naves/{nave}', 'NaveController@destroy')->name('naves.destroy');

Route::get('/empresas/create', 'EmpresaController@create')->name('empresas.create');
Route::post('/empresas', 'EmpresaController@store')->name('empresas.store');
Route::get('/empresas/{empresa}/edit', 'EmpresaController@show')->name('empresas.edit');
Route::put('/empresas/{empresa}', 'EmpresaController@update')->name('empresas.update');

Route::get('/mantenimientos/create', 'MantenimientoController@create')->name('mantenimientos.create');
Route::post('/mantenimientos', 'MantenimientoController@store')->name('mantenimientos.store');


Auth::routes();