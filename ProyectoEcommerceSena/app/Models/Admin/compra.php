<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'proveedores_id',
        'users_id',
        'total',
        'fecha', 
        'imagen', 
        'estado',
        ];
    protected $table = 'compras';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function proveedor():BelongsTo
    {
        return $this->belongsTo(proveedore::class, 'proveedores_id');
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function detallecompra():HasMany
    {
        return $this->hasMany(detallecompra::class, 'compras_id');
    }

}
