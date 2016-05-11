<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_doc', 100);
            $table->string('nombre_razon_s', 100);
            $table->string('estado', 100);
            $table->string('pais', 100);
            $table->string('provincia', 100);
            $table->string('ciudad', 100);
            $table->string('cod_postal', 100);
            $table->string('direccion', 100);
            $table->string('telefono1', 100);
            $table->string('telefono2', 100);
            $table->string('email', 100);
            $table->string('web', 100);
            // numero_doc nombre_razon_s estado pais provincia ciudad cod_postal direccion => fkey tipodoc_id
            //foreing Keys
             $table->integer('tipodoc_id')->unsigned();
             $table->foreign('tipodoc_id')->references('id')->on('tipo_tablas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proveedors');
    }
}
