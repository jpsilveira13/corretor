<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
    protected $table = 'bairro';

    protected $fillable = [
        'cidade_id',
        'nome',
        'url_nome',
   ];

    public function bairroCidade(){
        return $this->belongsTo(Cidade::class,'cidade_id','id');

    }
}
