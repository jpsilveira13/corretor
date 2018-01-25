<?php

namespace lucianocorretor\Http\Controllers;

use Illuminate\Http\Request;
use lucianocorretor\Models\TipoImovel;

class TipoImovelController extends BaseController
{
    private  $tipoImovel;

    protected function __construct(TipoImovel $tipoImovel){
        $this->tipoImovel = $tipoImovel;
    }

    public function principal(){
        $tipoImoveis = $this->tipoImovel->get();
        return view('admin.tipo_imovel.principal',compact('tipoImoveis'));
    }
}
