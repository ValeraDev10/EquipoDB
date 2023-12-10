<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposmedicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equiposmedicos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_equipo');
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero_serie');
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
        Schema::dropIfExists('equiposmedicos');
    }
}
