<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoTablasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_tablas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('numero', 4);
            $table->mediumText('descripcion');
            $table->char('tipo_tab', 3);
            $table->char('estado',1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_tablas');
    }
}
