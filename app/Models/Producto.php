<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'categoria_id',
        'subcategoria_id',
        'marca_id'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function subcategoria() {
        return $this->belongsTo(Subcategoria::class);
    }

    public function marca(){
        return $this->belongsTo(Marca::class, 'marca_id', 'id');
    }
}
