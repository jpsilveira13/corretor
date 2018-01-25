<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuncioCaracteristicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio_caracteristica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anuncio_id')->unsigned();
            $table->integer('caracteristica_id')->unsigned();
            $table->foreign('anuncio_id')->references('id')->on('anuncio');
            $table->foreign('caracteristica_id')->references('id')->on('caracteristica');


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
        Schema::dropIfExists('anuncio_caracteristica');
    }
}
