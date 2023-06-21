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
        Schema::table('productos', function (Blueprint $table) {
            $table->foreign(['categorias_id'], 'fk_productos_categorias')->references(['id'])->on('categorias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['proveedores_id'], 'fk_productos_proveedores1')->references(['id'])->on('proveedores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('fk_productos_categorias');
            $table->dropForeign('fk_productos_proveedores1');
        });
    }
};
