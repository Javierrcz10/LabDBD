<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoPuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_puestos', function (Blueprint $table) {
            $table->id('id');
            $table->decimal('cantidad');
            $table->boolean('estado');

            $table->unsignedBigInteger('idProducto');
            $table->foreign('idProducto')->references('id')->on('productos');

            $table->unsignedBigInteger('idPuesto');
            $table->foreign('idPuesto')->references('id')->on('puesto_ferias');
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
        Schema::dropIfExists('producto_puestos');
    }
}
