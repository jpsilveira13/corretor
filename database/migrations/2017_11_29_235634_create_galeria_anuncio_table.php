<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaAnuncioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_anuncio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anuncio_id')->unsigned();
            $table->string('url_nome');
            $table->integer('colocao');
            $table->foreign('anuncio_id')->references('id')->on('anuncio');


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
        Schema::dropIfExists('galeria_anuncio');
    }
}
