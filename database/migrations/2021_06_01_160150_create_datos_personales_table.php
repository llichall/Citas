<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id('dp');
            $table->string('apellido',20);
            $table->integer('edad');
            $table->string('genero',20);
            $table->string('preferencias',20);
            $table->string('descripcion',500);
            $table->string('img',100);
            $table->timestamps();
        });
        Schema::table('datos_personales', function (Blueprint $table) {
            $table->unsignedBigInteger("datos_user");
            $table->foreign("datos_user")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     **
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_personales');
    }
}
