<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serie_codigo', 50);
            $table->string('anio_emision', 50);
            $table->string('num_cpago', 50);
            $table->timestamp('fecha_emi');
            $table->timestamp('fecha_ven');
             // foreing keys
            $table->integer('tipotabla_id')->unsigned();
            $table->foreign('tipotabla_id')->references('id')->on('tipo_tablas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documento_pagos');
    }
}
