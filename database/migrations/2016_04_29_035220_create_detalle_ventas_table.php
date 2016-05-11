<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->increments('id');
             $table->timestamp('fecha_emision');
            $table->timestamp('fecha_vencimiento');
             // foreing keys
            $table->integer('venta_id')->unsigned();
            $table->foreign('venta_id')->references('id')->on('ventas');
             // foreing keys
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalle_ventas');
    }
}
