<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('Correo');
            $table->string('Foto');
            $table->string('Autorizado')->default('no_autorizado');
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
        Schema::dropIfExists('atletas');
    }
}
