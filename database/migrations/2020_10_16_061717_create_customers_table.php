<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_tipo_persona');
            $table->string('name');
            $table->string('id_tipo_documento');
            $table->string('num_documento');
            $table->string('direccion');
            $table->string('correo');
            $table->string('telefono');
            $table->string('id_usuario_creador');
            $table->string('status');
            $table->string('edad');
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
        Schema::dropIfExists('customers');
    }
}
