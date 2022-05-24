<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\UsuarioController;


// Rutas de acceso al sitio, las rutas llaman a los controladores o vistas

Route::get('/', [NoticiasController::class, 'index']);
Route::get('/categorias/{id}', [NoticiasController::class, 'noticias']);
Route::get('/noticia/{id}', [NoticiasController::class, 'open_noticia']);
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto');
Route::post('/contacto/nuevo', [ContactoController::class, 'saveContacto'])->name('contacto-nuevo');

Route::post('/login', [UsuarioController::class, 'login'])->name('login');
Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');
Route::get('/registro', [UsuarioController::class, 'registro'])->name('registro');
Route::post('/registro/nuevo', [UsuarioController::class, 'saveUsuario'])->name('usuario-nuevo');

Route::post('/noticia/agregar', [NoticiasController::class, 'add'])->name('addNoticia');

Route::post('/noticia/addComentario', [NoticiasController::class, 'addComentario'])->name('addComentario');


Route::get('/agregarNoticia', function(){
    return view('agregarNoticia');
});

