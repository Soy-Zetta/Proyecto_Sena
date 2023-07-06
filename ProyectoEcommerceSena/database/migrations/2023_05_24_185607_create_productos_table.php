<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 45);
            $table->integer('codigo');
            $table->string('descripcion', 300);
            $table->integer('precio');
            $table->integer('existencias');
            $table->string('imagen');
            $table->boolean('disponible')->default(true);
            $table->integer('categorias_id')->index('fk_productos_categorias_idx')->onDelete('cascada');
            $table->integer('proveedores_id')->index('fk_productos_proveedores1_idx');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
