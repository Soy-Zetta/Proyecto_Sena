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
            $table->unsignedBigInteger('cliente_nuemro_docuemto');
            $table->unsignedBigInteger('producto_id');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        
            $table->foreign('clientes_numero_documento')->references('numero_documento')->on('clientes');
            $table->foreign('productos_id')->references('id')->on('productos');
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
