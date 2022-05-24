<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use App\Models\Comentario;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    // este método se ejecuta cuando se accede a la ruta /
    public function index()
    {
        $noticias = noticias::all()->take(4);
        var_dump($noticias);
        break;
        //return ('hola');
        return view('index', ["noticias"=>$noticias, "inicio" => 0]);
    }
    // este método se ejecuta cuando se accede a la ruta /categorias/{id}
    public function noticias($id){
        $noticias = noticias::where('id_categoria',$id)->get();
        $count = $noticias->count();
        //return ('hola');
        return view('index', ["noticias"=>$noticias, "cantidadNoticias"=>$count]);
    }

    public function open_noticia($id){
        $noticia = noticias::find($id);
        $comentarios = comentario::where('id_noticia',$id)->get();
        return view('noticia', ["noticia"=>$noticia, "comentarios"=>$comentarios]);
    }
    // este método se ejecuta cuando se accede a la ruta /agregarNoticia
    public function add(Request $request){

        $nombreImagen = 'none.jpg';
        // COMPROBAR SI SE CARGO UNA IMAGEN
        if($request->hasFile('imagen')){
            // GUARDAR LA IMAGEN EN EL STORAGE
            $image = $request->file('imagen');
            $imageName = $image->getClientOriginalName();
            //Storage::disk('public_uploads')->put($file, 'contents');
            Storage::disk('public_uploads')->put($imageName,file_get_contents($image));
            $nombreImagen = $imageName;
        }

        $noticia = new Noticias;
        $noticia->id_usuario = 1;
        $noticia->id_categoria = $request->input('categoria');
        $noticia->titulo = $request->input('nombreNoticia');
        $noticia->descripcion = $request->input('descripcionNoticia');
        $noticia->imagen = $nombreImagen;
        $noticia->estado = 1;

        $noticia->save();

        return ('Noticia agregada Correctamente');
    }

    public function addComentario(Request $request){

        session_start();
        $comentario = new Comentario;
        $comentario->id_noticia = $request->input('idNoticia');
        $comentario->id_usuario = $_SESSION["userID"];
        $comentario->comentario = $request->input('comentario');
        $comentario->save();

        return redirect('/noticia/'.$request->input('idNoticia'));
    }
}
