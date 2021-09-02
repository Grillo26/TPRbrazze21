<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_personal');
            $table->integer('telefono_personal');
            $table->string('direccion_personal');
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_turno');
            $table->foreign('id_tipo')->references('id')->on('tipo_personal');
            $table->foreign('id_turno')->references('id')->on('turno');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
