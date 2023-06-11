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
        Schema::create('categorias', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre', 45);
            $table->text('descripcion');
<<<<<<< HEAD
=======
            // $table->string('estado',45);
>>>>>>> 0ec1633711a303fdb1d8de36cb49c64831b9f6fe
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
        Schema::dropIfExists('categorias');
    }
};
