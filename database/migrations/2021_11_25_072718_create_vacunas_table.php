<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lavoratorio');
            $table->string('cadena_frio');
            $table->integer('dosis');
            $table->boolean('inactiva');
            $table->string('vertor_viral');
            $table->string('nucleicos');
            $table->string('sub_unidad_proteica');
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
        Schema::dropIfExists('vacunas');
    }
}
