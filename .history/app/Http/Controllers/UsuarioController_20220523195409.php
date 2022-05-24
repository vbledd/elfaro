<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Noticias;


class UsuarioController extends Controller
{
    // este método se ejecuta cuando se accede a la ruta /usuario
    public function registro(){
        return view('registro');
    }
    // este método se ejecuta cuando se accede a la ruta /usuario/nuevo
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

    public function login(Request $request){
        $user = $request->input('user');
        $password = $request->input('password');
        $usuario = Usuario::where('nombre', $user)->where('password', $password)->get();
        $noticias = noticias::all()->take(4);

        if(count($usuario) > 0){
            $mensaje = (object)[];
            $mensaje->mensaje = "Bienvenido";
            $mensaje->status = 'success';

            session_start();
            $_SESSION["login"]= $user;
            return view('index', ["noticias"=>$noticias, "inicio" => 0,"mensaje"=>$mensaje]);
        }else{
            $mensaje = (object)[];
            $mensaje->mensaje = "Usuario o contraseña incorrectos";
            $mensaje->status = 'error';
            return view('index', ["noticias"=>$noticias, "inicio" => 0,"mensaje"=>$mensaje]);
        }

    }

    public function logout(){
        session_start();
        session_destroy();
        return redirect('/');
    }
}
