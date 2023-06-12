<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'existencias',
        'categorias_id',
        'proveedor_id',
    ];
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categorias_id');
    }

  
}
