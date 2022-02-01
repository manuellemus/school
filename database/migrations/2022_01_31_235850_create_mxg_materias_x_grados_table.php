<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMxgMateriasXGradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mxg_materias_x_grados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_grado')->unsigned();
            $table->bigInteger('id_materia')->unsigned();

            $table->timestamps();
            $table->foreign('id_grado')->references('id')->on('grd_grados');
            $table->foreign('id_materia')->references('id')->on('mat_materias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mxg_materias_x_grados');
    }
}
