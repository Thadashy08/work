<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable = ['nombre', 'categoria_id'];

    public function productos() {
        return $this->hasMany(Producto::class);
    }

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}

