<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'cliente_numero_documento',
        'producto_id',
        'fecha',
        'cantidad',
        'precio',
        'total',
    ];
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function cliente()
    {
        return $this->belongsTo(cliente::class,'cliente_numero_documento');
    }
    
    public function producto()
    {
        return $this->belongsTo(producto::class);
    }

    public function getTotal()
    {
        return $this->cantidad * $this->precio;
    }
}
