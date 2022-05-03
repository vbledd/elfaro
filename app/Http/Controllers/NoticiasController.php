<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticias;
use Illuminate\Support\Facades\Storage;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = noticias::all()->take(5);
        //return ('hola');
        return view('index', ["noticias"=>$noticias]);
    }

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
