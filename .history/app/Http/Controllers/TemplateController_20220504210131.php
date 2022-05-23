<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Noticias;

// este es un controlador auxiliar que nos ayuda a obtener datos
// especificos de la base de datos
class TemplateController extends Controller
{

    public static function getCategorias(){
        $categorias = Categorias::all();

        return $categorias;
    }

    public static function countAllNoticias(){
        $count = Noticias::all()->count();
        return $count;
    }
}
