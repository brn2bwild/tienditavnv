<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacions', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('LugarReservar');
            $table->integer('NoPersonas');
            $table->time('HoraInicioReserv');
            $table->time('HoraFinReserv');
            $table->date('FechaReservacion');

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
        Schema::dropIfExists('reservacions');
    }
}
