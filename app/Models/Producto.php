<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'referencia',
        'precio',
        'stock',
        'fecha_de_creacion',
    ];
}
