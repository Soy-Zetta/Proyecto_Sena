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
        Schema::create('clientes', function (Blueprint $table) {

            $table->integer('numero_documento')->primary();
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('tipo_documento')->nullable();
            $table->string('telefono')->nullable();
            $table->string('ciudad_residencia',100);
            $table->string('direccion',150);
            $table->string('email')->unique();
            $table->string('contrasena');
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
        Schema::dropIfExists('clientes');
    }
};
