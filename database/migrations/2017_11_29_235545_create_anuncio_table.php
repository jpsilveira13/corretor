<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuncioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('tipo_imovel_id')->unsigned();
            $table->integer('categoria_imovel_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->integer('cidade_id')->unsigned();
            $table->integer('bairro_id')->unsigned();
            $table->string('codigo', 8)->nullable();
            $table->boolean('destaque')->default(0);
            $table->string('endereco',250);
            $table->string('numero',13);
            $table->decimal('valor_iptu',11,2);
            $table->decimal('valor_condominio',11,2);
            $table->integer('nro_quartos')->default(0);
            $table->integer('garagem')->default(0);
            $table->integer('banheiro')->default(0);
            $table->integer('suite')->default(0);
            $table->integer('area_total')->default(0);
            $table->integer('area_construida')->default(0);
            $table->integer('acomodacao')->default(0);
            $table->boolean('mostrar_endereco')->default(1);
            $table->string('titulo',100);
            $table->string('url_titulo',250);
            $table->text('descricao');
            $table->decimal('valor',11,2);
            $table->string('imagem_capa',255)->default('no_image.jpg');
            $table->integer('status_imovel_id')->unsigned()->default(1);
            $table->integer('numero_visitas')->default(0);
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('tipo_imovel_id')->references('id')->on('tipo_imovel');
            $table->foreign('categoria_imovel_id')->references('id')->on('categoria_imovel');
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->foreign('cidade_id')->references('id')->on('cidade');
            $table->foreign('bairro_id')->references('id')->on('bairro');
            $table->foreign('status_imovel_id')->references('id')->on('status_imovel');
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
        Schema::dropIfExists('anuncio');
    }
}
