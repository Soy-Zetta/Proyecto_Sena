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
        
    ];
}
