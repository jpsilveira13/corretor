<?php

namespace lucianocorretor\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use lucianocorretor\Http\Requests\SaveBairroRequest;
use lucianocorretor\Http\Requests\SaveCidadeRequest;
use lucianocorretor\Http\Requests\SaveEstadoRequest;
use lucianocorretor\Models\Bairro;
use lucianocorretor\Models\Cidade;
use lucianocorretor\Models\Estado;

class LocalizacaoController extends Controller
{
    private $cidade;
    private $bairro;
    private $estado;

    public function __construct(Cidade $cidade,Bairro $bairro,Estado $estado){
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->estado = $estado;
    }

    public function principal(){
        $localizacoes = $this->cidade->get();


       return view('admin.localizacao.principal',compact('localizacoes'));
    }

    public function estado(){
        return view('admin.localizacao.estado');
    }

    public function cidade(){
        $estados = $this->estado->orderBy('nome','desc')->get();
        return view('admin.localizacao.cidade',compact('estados'));
    }

    public function bairro(){
        $cidades = $this->cidade->orderBy('nome','desc')->get();
        return view('admin.localizacao.bairro',compact('cidades'));
    }

    public function salvarEstado(SaveEstadoRequest $request){
        $getEstado = $this->estado->fill($request->all());
        $getEstado->url_nome = str_slug($getEstado->nome);
        if($getEstado->save()){
            $request->session()->flash('alert-success', 'Salvo com sucesso!');
            return redirect()->route('localizacao');
        }

    }

    public function salvarCidade(SaveCidadeRequest $request){
        $getCidade = $this->cidade->fill($request->all());
        if($getCidade->estado_id == 0 || empty($getCidade->estado_id)){
            $request->session()->flash('alert-error', 'Por favor informe o estado!');
                return redirect()->back();
        }
        $getCidade->url_nome = str_slug($getCidade->nome);

        if($getCidade->save()){
            $request->session()->flash('alert-success', 'Salvo com sucesso!');
            return redirect()->route('localizacao');
        }

    }

    public function salvarBairro(SaveBairroRequest $request){
        $getBairro = $this->bairro->fill($request->all());

        if($getBairro->cidade_id == 0 || empty($getBairro->cidade_id)){
            $request->session()->flash('alert-error', 'Por favor informe a cidade!');
            return redirect()->back();
        }
        $getBairro->url_nome = str_slug($getBairro->nome);

        if($getBairro->save()){
            $request->session()->flash('alert-success', 'Salvo com sucesso!');
            return redirect()->route('localizacao');
        }

    }

    //busca bairro

    public function buscaBairro($query){
       $result  = null;

       $result = DB::table('bairro')->where('nome','LIKE','%' . $query . '%')->distinct('bairro.id')->take(8)->get(['nome','id']);

       return Response::json($result);
    }


}
