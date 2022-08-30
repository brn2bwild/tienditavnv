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
            $table->string('nombre_reservacion');
            $table->string('numero_telefonico');
            $table->string('email');
            $table->date('fecha_reservacion');
            $table->time('hora_reservacion');
            $table->string('area_reservacion');
            $table->string('comentario')->nullable();
            $table->integer('n_personas');
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
