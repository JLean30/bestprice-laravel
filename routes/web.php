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
Route::get('/producto/{id}', 'ControladorPrincipal@viewProducto')->name('producto');
Route::get('/profile/{id}', 'ControladorPrincipal@viewProfile')->name('profile');
Route::get('/editarPerfil/{id}', 'ControladorPrincipal@viewEditarPerfil');
Route::post('/editar-perfil','ControladorPrincipal@editarPerfil' )->name('editar-perfil')->middleware('auth');
Route::get('/borrar-interes/{id}','ControladorProducto@deleteInterest');
Route::post('/envio', 'Auth\RegisterController@returnArray')->name('envio');
Route::post('/envio-login', 'Auth\LoginController@returnArray')->name('envio-login');
Route::get('/anadir-producto', 'ControladorPrincipal@viewAnadirProducto')->middleware('auth');
Route::get('/editar-producto/{id}', 'ControladorPrincipal@viewEditProduct')->middleware('auth');
Route::get('/eliminar-producto/{id}', 'ControladorProducto@delete');
Route::post('/registrar-interesado','ControladorProducto@makeInterest')->name('registrar-interesado');
Route::post('/registrar-producto','ControladorProducto@add' )->name('registrar-producto')->middleware('auth');
Route::post('/buscar-producto','ControladorBusqueda@show' )->name('buscar-producto');
Route::post('/editar-producto','ControladorProducto@edit' )->name('editar-producto')->middleware('auth');
Route::get('/busqueda','ControladorPrincipal@viewBusqueda');
Route::get('/product', 'ControladorPrincipal@productTest');
Route::post('/aprobacion','ControladorPrincipal@aprobacion')->name('aprobacion')->middleware('auth');
Auth::routes();

//prueba de comit
