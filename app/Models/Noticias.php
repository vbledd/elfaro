<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticias extends Model
{
    use HasFactory;
    protected $table = 'noticias';

    public function getCategoria()
    {
        return $this->belongsTo(Categorias::class,'id_categoria');
    }

    public function getUsuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
}
