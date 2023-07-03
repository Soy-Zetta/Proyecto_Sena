<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'mail',
        'contraseña',
        'telefono',
        'tipo_documento',
        'numero_documento',
        'producto_id',
    ];

    protected $table = 'clientes';
    protected $primaryKey = 'numero_documento';
    public $timestamps = true;

    public function productos()
    {
        return $this->belongsTo(producto::class, 'productos_id');
    }


}
