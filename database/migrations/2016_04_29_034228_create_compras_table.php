<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->char('num_corela', 50);
            $table->char('tipo_adquisicion', 4);
            $table->double('base', 15, 2);
            $table->double('igv', 15, 2);
            $table->string('otros_trib', 100);
            $table->double('importe_total', 15, 2);
            $table->double('otros', 15, 2);
            $table->string('descrip_compra', 300);
            $table->double('cantidad', 15, 2);
            //foreing Keys
             $table->integer('docpago_id')->unsigned();
             $table->foreign('docpago_id')->references('id')->on('documento_pagos');

             $table->integer('ReferenciaCom_id')->unsigned()->nullable();
             $table->foreign('ReferenciaCom_id')->references('id')->on('compras');
        });
    }
  
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('compras');
    }
}
