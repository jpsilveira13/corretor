<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class StatusImovel extends Model
{
    protected  $table = "status_imovel";

    protected $fillable = [
        'nome'
    ];

}
