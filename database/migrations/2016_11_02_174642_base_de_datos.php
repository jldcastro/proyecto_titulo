<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BaseDeDatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        Schema::create('perfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_usuario')->unique();
            $table->rememberToken();
            $table->timestamps();
       });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_usuario');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('rut_usuario');
            $table->string('foto');
            $table->integer('perfil_id')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('perfil_id')->references('id')->on('perfiles')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('perfiles');
        Schema::drop('users');
    }
}
