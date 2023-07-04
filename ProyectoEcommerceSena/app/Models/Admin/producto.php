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
        'codigo',
        'precio',
        'existencias',
        'imagen',
        'disponible',
        'categorias_id',
        'proveedores_id',
    ];
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categorias_id');
    }

  
}
