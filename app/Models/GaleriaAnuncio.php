<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriaAnuncio extends Model
{
    protected  $table  = 'galeria_anuncio';
    protected $fillable = [
        'anuncio_id',
        'url_nome',
        'colocao'
    ];

    public function galeriaAnuncio(){
        return $this->belongsTo(Anuncio::class,'anuncio_id','id');

    }
}
