<?php

namespace lucianocorretor\Http\Controllers;

use Illuminate\Http\Request;
use lucianocorretor\Http\Requests\SaveTipoImovelRequest;
use lucianocorretor\Models\TipoImovel;


class TipoController extends Controller
{
    private  $tipoImovel;

    public function __construct(TipoImovel $tipoImovel){
        $this->tipoImovel = $tipoImovel;
    }

    public function principal(){
        $tipoImoveis = $this->tipoImovel->orderBy('id','desc')->get();
        return view('admin.tipo_imovel.principal',compact('tipoImoveis'));
    }

    public function novoTipo(){
        return view('admin.tipo_imovel.tipo_imovel');
    }

    public function editarTipo($id){
        $tipo = $this->tipoImovel->find($id);
        return view('admin.tipo_imovel.editTipo_imovel',compact('tipo'));
    }


    public function salvarTipo(SaveTipoImovelRequest $request){
        $getTipo = $this->tipoImovel->fill($request->all());
        $getTipo->url_nome = str_slug($getTipo->nome);
        if($this->tipoImovel->existeTipo($getTipo->url_nome) > 0){
            $request->session()->flash('alert-error', 'Já existe esse tipo cadastrado!');
            return redirect()->back();
        }

        if($getTipo->save()){
            $request->session()->flash('alert-success', 'Salvo com sucesso!');
            return redirect()->route('tipo.imovel');
        }
    }

    public function editarTipoSalvar(SaveTipoImovelRequest $request,$id){
        $tipoRequest = $this->tipoImovel->fill($request->all());
        $tipoRequest->url_nome = str_slug($tipoRequest->nome);
        if($this->tipoImovel->existeTipo($tipoRequest->url_nome) > 0){
            $request->session()->flash('alert-error', 'Já existe esse tipo cadastrado!');
            return redirect()->back();
        }
        $tipoRequest = $tipoRequest->toArray();
        if($this->tipoImovel->find($id)->update($tipoRequest)){
            $request->session()->flash('alert-success', 'Editado com sucesso!');
            return redirect()->route('tipo.imovel');
        }
    }

    public function removerTipo(Request $request,$id){
        if($this->tipoImovel->find($id)->delete()){
            $request->session()->flash('alert-success', 'Deletado com sucesso!');
            return redirect()->back();
        }
   }
}
