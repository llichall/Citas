<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id('id_ms');
            $table->string('mensaje',500);
            $table->timestamps();
        });
        Schema::table('mensajes', function (Blueprint $table) {
            $table->unsignedBigInteger("mensaje_user");
            $table->foreign("mensaje_user")->references("id")->on("users");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mensajes');
    }
}