<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidade';

    protected $fillable = [
        'estado_id',
        'nome',
        'url_nome',
    ];

        public function estado(){
        return $this->belongsTo(Estado::class,'estado_id','id');
    }

    public function bairro(){
        return $this->hasMany(Bairro::class);
    }
}
