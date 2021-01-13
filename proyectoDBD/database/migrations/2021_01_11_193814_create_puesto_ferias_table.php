<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestoFeriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto_ferias', function (Blueprint $table) {
            $table->id('id');
            $table->text('NombrePuesto');
            $table->text('DescripcionPuesto');
            $table->boolean('estado');

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
        Schema::dropIfExists('puesto_ferias');
    }
}
