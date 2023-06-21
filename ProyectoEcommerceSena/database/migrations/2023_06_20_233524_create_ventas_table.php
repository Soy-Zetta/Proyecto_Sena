<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->integer('id', true);
            $table->date('fecha_venta');
            $table->integer('cantidad');
            $table->decimal('precio',8,2);
            $table->timestamps();
            $table->integer('productos_id')->index('fk_ventas_productos_idx')->onDelete('cascada');
            $table->integer('clientes_id')->index('fk_ventas_clientes_idx');
          
     });       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
