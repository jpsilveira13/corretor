<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('anuncio_id')->unsigned();
            $table->string('nome',150);
            $table->string('email',150);
            $table->string('telefone',150);
            $table->text('mensagem');
            $table->tinyInteger('visto')->default(0);
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
        Schema::dropIfExists('mensagem');
    }
}
