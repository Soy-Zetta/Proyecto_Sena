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
        Schema::create('detallecompras', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio');
            $table->integer('cantidad');
            $table->string('descripcion');
            $table->integer('compras_id')->index('fk_detallecompras_compras_idx')->onDelete('cascada');
            $table->integer('productos_id')->index('fk_detallecompras_productos_idx');
            $table->timestamps('');
        });
    }
 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallecompras');
    }
};
