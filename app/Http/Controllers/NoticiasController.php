<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    // este método se ejecuta cuando se accede a la ruta /
    public function index()
    {
        $noticias = noticias::all()->take(5);
        //return ('hola');
        return view('index', ["noticias"=>$noticias]);
    }
    // este método se ejecuta cuando se accede a la ruta /categorias/{id}
    public function noticias($id){
        $noticias = noticias::where('id_categoria',$id)->get();
        $count = $noticias->count();
        //return ('hola');
        return view('index', ["noticias"=>$noticias, "cantidadNoticias"=>$count]);
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
}
