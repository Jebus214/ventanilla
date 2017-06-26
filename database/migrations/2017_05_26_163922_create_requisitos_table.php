<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tramite');
            $table->string('fundamento');
            $table->string('tipo');
            $table->string('descripcion');
            $table->integer('original');
            $table->integer('copia');
        
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
        Schema::drop('requisitos');
    }
}
