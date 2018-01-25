<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class CategoriaImovel extends Model
{
    protected  $table = 'categoria_imovel';

    protected $fillable = ['nome','url_nome'];

    public function anuncios(){
        return $this->hasMany(Anuncio::class, 'categoria_imovel_id');
    }

    public function existeCategoria($nome){
        return $this->where('url_nome',$nome)->count();
    }


}
