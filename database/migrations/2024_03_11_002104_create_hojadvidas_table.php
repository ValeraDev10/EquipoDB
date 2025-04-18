<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojadvidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojadvidas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idEquipo')->unique();
            $table->foreign('idEquipo')->references('id')->on('equiposmedicos')->onDelete('cascade')->onUpdate('cascade');

            $table->string('tipo_equipo');
            $table->string('nombre');
            $table->string('marca');
            $table->string('modelo');
            $table->string('numero_serie');
            $table->date('fecha_compra');
            $table->date('fecha_garantia');
            $table->string('registro_invima');
            $table->enum('estado_garantia',['Vigente','Caducada']);
            
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
        Schema::dropIfExists('hojadvidas');
    }
}
