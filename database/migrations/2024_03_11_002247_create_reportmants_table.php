<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportmantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportmants', function (Blueprint $table) {
            $table->id();
            $table->string('idHojadvida');
            $table->string('responsable');
            $table->enum('tipo_mantenimiento',['Preventivo','Correctivo','Nuevo']);
            $table->date('fecha_mant');
            $table->text('proceso_realizado');
            $table->string('horas_uso');
            $table->enum('estado_equipo',['Funcional','StandBy','Baja']);
            $table->string('repuesto')->nullable();
            $table->text('observaciones');
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
        Schema::dropIfExists('reportmants');
    }
}
