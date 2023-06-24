<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_documento_cliente',
        'producto_id',
        'fecha',
        'cantidad',
        'precio',
    ];
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function cliente()
    {
        return $this->belongsTo(cliente::class,'numero_documento_cliente','numero_documento');
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
