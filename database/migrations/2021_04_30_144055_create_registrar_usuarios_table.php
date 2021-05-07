<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrarUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar_usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreUsuario');
            $table->string('email');
            $table->string('departamento');
            $table->string('facultad');
            $table->string('cargo');
            $table->string('ci');
            $table->string('telefono');
            $table->string('unidad');
            $table->string('password');
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
        Schema::dropIfExists('registrar_usuarios');
    }
}
