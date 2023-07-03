<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'descripcion',
         'cantidad',
          'fecha', 
          'imagen', 
          'estado'
        ];
    protected $table = 'compras';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function proveedor()
    {
        return $this->belongsTo(proveedore::class, 'proveedores_id');
    }
    public function user()
    {
        return $this->belongsTo(user::class, 'users_id');
    }

    public function detallecompra()
    {
        return $this->HasMany(detallecompra::class, 'detallecompras_id');
    }

}
