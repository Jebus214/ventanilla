<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dependecia');  
            $table->integer('id_rubro');
            $table->integer('id_unidad');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('fun_legal');
            $table->string('doc_obtener');
            $table->string('vigencia');
            $table->string('casos');
            $table->string('criterios');
            $table->string('duracion');
            $table->string('tiempo_rep');
            $table->double('costo');
            $table->string('formapago');
            $table->string('dondepag');
            $table->string('elabora');
            $table->string('revisa');
            $table->string('autoriza');
            $table->integer('vbpresidencia');
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
        Schema::drop('tramites');
    }
}
