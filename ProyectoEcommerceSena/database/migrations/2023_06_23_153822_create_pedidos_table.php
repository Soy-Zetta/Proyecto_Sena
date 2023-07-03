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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2);
            $table->decimal('total', 8, 2)->nullable();
            $table->timestamps();
             $table->integer('clientes_numero_documento')->index('fk_pedidos_clientes_numero_documentox')->onDelete('cascada');
            $table->integer('productos_id')->index('fk_pedidos_productos_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
