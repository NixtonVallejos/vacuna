<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->date('administrada_a');
            $table->foreignId('paciente_id')->references('id')->on('pacientes');
            $table->foreignId('enfermero_id')->references('id')->on('enfermeros');
            $table->foreignId('vacuna_id')->references('id')->on('vacunas');
            $table->foreignId('centro_id')->references('id')->on('centro_saluds');
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
        Schema::dropIfExists('registros');
    }
}
