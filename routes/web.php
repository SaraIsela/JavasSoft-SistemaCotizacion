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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
     return view('layout');
 });
// Route::get('/', function () {
//     return view('RegistroUsuario');
// });
Route::get('layout','NombreUsuario@index');
Route::get('RegistrarUsuario','RegistrarUsuarioController@index');
Route::post('RegistrarUsuario','RegistrarUsuarioController@store');