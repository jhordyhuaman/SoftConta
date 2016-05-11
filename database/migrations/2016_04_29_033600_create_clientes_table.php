<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo',100);
            $table->string('name', 100);
            $table->string('apellido', 100);
            $table->string('n_doc', 100);
            $table->string('razonsocial', 100);
            $table->string('direccion', 100);
            $table->string('telefono1', 100);
            $table->string('telefono2', 100);
            $table->char('estado', 1);
            //foreing Keys---

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
        Schema::drop('clientes');
    }
}
