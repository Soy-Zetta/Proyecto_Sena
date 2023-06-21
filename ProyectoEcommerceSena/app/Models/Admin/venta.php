<?php

namespace App\Models;

use App\Models\Admin\producto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $fillable =[
        'cliente_id',
        'producto_id',
        'fecha_venta',
        'cantidad',
        'precio',
    ];
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function cliente()
    {
         return $this->belongsTo(cliente::class);
    }

    public function producto()
    {
        return $this->belongsTo(producto::class);
    }

}
