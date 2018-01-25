<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected  $table = 'estado';
    protected $fillable = [
        'nome',
        'url_nome',
        'uf'

    ];

    public function cidade(){
        return $this->hasMany(Cidade::class);
    }

    public function bairroCidade($id){
        if(empty($id)){
            return false;
        }else{
            return Bairro::where('cidade_id',$id);
        }
    }
}
