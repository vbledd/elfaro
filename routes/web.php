<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\UsuarioController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', [NoticiasController::class, 'index']);
Route::get('/categorias/{id}', [NoticiasController::class, 'noticias']);
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/nuevo', [ContactoController::class, 'saveContacto'])->name('contacto-nuevo');

Route::get('/registro', [UsuarioController::class, 'registro'])->name('registro');
Route::post('/registro/nuevo', [UsuarioController::class, 'saveUsuario'])->name('usuario-nuevo');

Route::post('/noticia/agregar', [NoticiasController::class, 'add'])->name('addNoticia');


Route::get('/agregarNoticia', function(){
    return view('agregarNoticia');
});

