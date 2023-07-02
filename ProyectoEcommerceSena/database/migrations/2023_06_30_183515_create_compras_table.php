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
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->enum('estado',['enviado','en proceso','entregado']);
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->dateTime('fecha');
            $table->string('imagen');
            $table->integer('proveedores_id')->index('fk_compras_proveedores_id')->onDelete('cascada');
            $table->integer('users_id')->index('fk_compras_users_id');
            $table->timestamps();

          

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
