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

        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('equipo');
            $table->string('marca_modelo');
            $table->string('nserie');
            $table->string('cod_interno');
            $table->string('capacidad');
            $table->string('clase_oiml');
            $table->string('error_max');
            $table->string('lugar_almacenamiento');
            $table->date('fcompra');
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
        Schema::drop('perfiles');
        Schema::drop('users');
        Schema::drop('equipos');
    }
}
