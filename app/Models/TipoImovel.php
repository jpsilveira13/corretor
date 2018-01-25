<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class TipoImovel extends Model
{
    protected $table = "tipo_imovel";
    protected $fillable = [
        'nome',
        'url_nome'
    ];


    public function existeTipo($nome){
        return $this->where('url_nome',$nome)->count();
    }

    public function anuncios(){
        return $this->hasMany(Anuncio::class, 'tipo_imovel_id');
    }



}
