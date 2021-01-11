<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionFeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicacion_ferias', function (Blueprint $table) {
            $table->id('id');

            $table->unsignedBigInteger('idUbicacion');
            $table->foreign('idUbicacion')->references('id')->on('ubicacions');

            $table->unsignedBigInteger('idFeria');
            $table->foreign('idFeria')->references('id')->on('ferias');
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
        Schema::dropIfExists('ubicacion_ferias');
    }
}
