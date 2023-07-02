<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    public $timestamps = false;

   
    public function producto()
    {
        return $this->hasMany(Producto::class, 'categorias_id');
    }
}
