<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = noticias::all();
        //return ('hola');
        return view('index', ["noticias"=>$noticias]);
    }
}
