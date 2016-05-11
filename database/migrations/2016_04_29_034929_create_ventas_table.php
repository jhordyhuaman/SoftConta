<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num_corelativo', 100);
            $table->double('base_imponible', 15, 2);
            $table->double('importe_total_e_i', 15, 2);
            $table->char('tipo_importe_e_i', 4);
            $table->double('igv', 15, 2);
            $table->double('ipm', 15, 2);
            $table->double('otros_cargos', 15, 2);
            $table->double('importe_total_comp_pago', 15, 2);
            //foreing Keys
            $table->integer('docpago_id')->unsigned();
            $table->foreign('docpago_id')->references('id')->on('documento_pagos');

            $table->integer('ReferenciaCom_id')->unsigned()->nullable();
            $table->foreign('ReferenciaCom_id')->references('id')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
