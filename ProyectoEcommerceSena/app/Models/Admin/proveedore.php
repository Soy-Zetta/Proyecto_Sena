<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedore extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'Tipo_Documento',
        'Direccion',
        'telefono',
        'Correo',
    ];
    protected $table = 'proveedores';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function proveedor()
    {
        return $this->belongsTo(proveedore::class, 'proveedores_id');
    }

}
