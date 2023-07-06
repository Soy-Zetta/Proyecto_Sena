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
            $table->decimal('total',8,2)->default(0.00);
            $table->date('fecha');
            $table->string('imagen')->nullable();
            $table->integer('proveedores_id')->index('fk_compras_proveedores_idx')->onDelete('cascade');
            $table->integer('users_id')->index('fk_compras_users_idx');
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
