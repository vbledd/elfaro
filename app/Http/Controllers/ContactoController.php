<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function saveContacto(Request $request)
    {
        $contacto = new Contacto;
        $contacto->nombres = $request->input('nombres');
        $contacto->email = $request->input('email');
        $contacto->mensaje = $request->input('mensaje');
        $contacto->save();

        $mensaje = (object)[];
        $mensaje->mensaje = "Mensaje enviado correctamente";
        $mensaje->status = 'success';


        return view('contacto', ["mensaje"=>$mensaje]);
    }
}
