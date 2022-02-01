<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlmAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alm__alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_grado')->unsigned();
            $table->string('codigo', 100);
            $table->string('nombre', 300);
            $table->integer('edad');
            $table->string('sexo', 100);
            $table->text('observacion', 300)->nullable();

            $table->timestamps();
            $table->foreign('id_grado')->references('id')->on('grd_grados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alm__alumnos');
    }
}
