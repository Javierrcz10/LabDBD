<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->text('nombreProducto');
            $table->text('descripcionProducto');
            $table->integer('precioProducto');

            $table->unsignedBigInteger('idSubCategoria');
            $table->foreign('idSubCategoria')->references('id')->on('sub_categorias');

            $table->unsignedBigInteger('idUnidad');
            $table->foreign('idUnidad')->references('id')->on('unidad_medidas');
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
}
