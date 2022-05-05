<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;
    // este modelo utiliza la siguiente tabla de la BD
    protected $table = 'noticias';

    // este modelo tiene una relación con la tabla de categorias
    public function getCategoria()
    {
        return $this->belongsTo(Categorias::class,'id_categoria');
    }
    // este modelo tiene una relación con la tabla de contacto
    public function getUsuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
}
