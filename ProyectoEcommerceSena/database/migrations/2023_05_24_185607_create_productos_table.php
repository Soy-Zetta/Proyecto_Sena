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
            $table->string('descripcion', 100);
            $table->decimal('precio');
            $table->integer('existencias');
            $table->string('imagen');
            $table->timestamps();
            $table->integer('categorias_id')->index('fk_productos_categorias_idx');
            $table->integer('proveedores_id')->index('fk_productos_proveedores1_idx');
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
