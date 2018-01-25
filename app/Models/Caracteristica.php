<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    protected $table = "caracteristica";

    protected $fillable = [
        'nome'
    ];

    public function caractAnuncio(){
        return $this->belongsToMany(Anuncio::class,'anuncio_caracteristica');
    }
}
