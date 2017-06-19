<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOficinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oficinas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tramite');
            $table->string('calle');
            $table->string('numext');
            $table->string('numint');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('CP');
            $table->string('horario');
            $table->string('mail');
            $table->string('lada');
            $table->string('telefono');
            $table->string('extension');
            $table->string('oficina');
            $table->string('titular');
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
        Schema::drop('oficinas');
    }
}
