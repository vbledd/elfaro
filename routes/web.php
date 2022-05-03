<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiasController;
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

Route::get('/', [NoticiasController::class, 'index']);


Route::post('/noticia/agregar', [NoticiasController::class, 'add'])->name('addNoticia');


Route::get('/agregarNoticia', function(){
    return view('agregarNoticia');
});
