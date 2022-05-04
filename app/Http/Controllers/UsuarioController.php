<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuarioController extends Controller
{
    public function registro(){
        return view('registro');
    }

    public function saveUsuario(Request $request){

        try {
            Usuario::find('email',$request->input('email'))->get();
            $mensaje = (object)[];
            $mensaje->mensaje = "El email ya existe";
            $mensaje->status = 'error';
            return view('registro', ["mensaje"=>$mensaje]);

        }catch(\Throwable $e){
            $usuario = new Usuario;
            $usuario->nombre = $request->input('nombre');
            $usuario->email = $request->input('email');
            $usuario->password = $request->input('password');
            $usuario->save();

            $mensaje = (object)[];
            $mensaje->mensaje = "Usuario registrado correctamente";
            $mensaje->status = 'success';

            return view('registro', ["mensaje"=>$mensaje]);
        };




    }
}
