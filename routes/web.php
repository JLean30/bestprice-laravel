<?php
use App\User;
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

Route::get('/', 'ControladorPrincipal@viewHome')->name('/');
Route::get('/admin', 'ControladorPrincipal@viewAdmin')->name('admin')->middleware('auth');
Route::get('/registrarse', 'Auth\RegisterController@returnView');
Route::get('/producto/{id}', 'ControladorPrincipal@viewProducto');
Route::get('/profile/{id}', 'ControladorPrincipal@viewProfile');
Route::post('/envio', 'Auth\RegisterController@returnArray')->name('envio');
Route::post('/envio-login', 'Auth\LoginController@returnArray')->name('envio-login');
Route::get('/anadir-producto', 'ControladorPrincipal@viewAnadirProducto')->middleware('auth');
Route::post('/registrar-producto','ControladorProducto@add' )->name('registrar-producto')->middleware('auth');;
Auth::routes();

//prueba de comit
