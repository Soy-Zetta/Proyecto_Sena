<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detallecompra extends Model
{
    use HasFactory;
    protected $fillable = [
        'compras_id',
        'productos_id',
        'precio',
        'cantidad',
        'descripcion', 
         
        ];
    protected $table = 'detallecompras';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function compra()
    {
        return $this->belongsTo(compra::class, 'compras_id');
    }
   
    public function producto()
    {
        return $this->belongsTo(producto::class, 'productos_id');
    }
}
