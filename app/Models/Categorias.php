<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    // este modelo utiliza la siguiente tabla de la BD
    protected $table = 'categorias';


}
