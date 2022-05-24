<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    public function getNoticia()
    {
        return $this->belongsTo(Noticias::class,'id_categoria');
    }

    public function getUsuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
}
