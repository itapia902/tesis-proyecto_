<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('usuario_id');
            $table->string('usuario_nombre');
            $table->string('usuario_apellido');
            $table->string('usuario_direccion');
            $table->string('usuario_email')->unique();
            $table->timestamp('usuario_email_verified_at')->nullable();
            $table->string('usuario_contraseña')->int(15);
            $table->string('usuario_tipo')->nullable();
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('usuarios');
    }
}
