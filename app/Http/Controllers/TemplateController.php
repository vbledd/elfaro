<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Noticias;

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
