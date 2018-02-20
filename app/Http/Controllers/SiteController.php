<?php

namespace lucianocorretor\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use lucianocorretor\Models\Anuncio;
use lucianocorretor\Models\CategoriaImovel;
use lucianocorretor\Models\Cidade;
use lucianocorretor\Models\TipoImovel;

class SiteController extends Controller
{

    private $anuncio;
    private $categoria;
    private $tipoImovel;
    private  $cidade;

    public function __construct(Anuncio $anuncio, CategoriaImovel $categoria, TipoImovel $tipoImovel,Cidade $cidade)
    {
        $this->anuncio = $anuncio;
        $this->categoria = $categoria;
        $this->tipoImovel = $tipoImovel;
        $this->cidade = $cidade;
    }

    public function index(){
        $anuncios = $this->anuncio
            ->with(['tipoImovel','categoriaImovel','bairro','cidade','estado'])
            ->get();
        Session::put('tipoImovel',$this->tipoImovel->get());
        Session::put('cidades',$this->cidade->get());
        Session::put('categoriaAnuncios',$this->categoria->get());

        return view('site.index', compact('anuncios'));
    }

    public function sobre(){
        return view('site.paginas.sobre');
    }

    public function contato(){
        return view('site.paginas.contato');
    }

    public function todosImoveis(){

        return view('site.imovel.todos');
    }

    public function  tipoAnuncio($tipo_anuncio){
        if($this->categoria->existeCategoria($tipo_anuncio)){
            $id = $this->categoria->where('url_nome',$tipo_anuncio)->first()->id;
            $anuncios = $this->anuncio->where('categoria_imovel_id',$id)->with('categoriaImovel')->get();

            return view('site.imovel.todos', [

                'anuncios' => $anuncios
            ]);
        }else{
            return redirect('/');
        }
    }

    public function imovelInterno($id_anuncio,$tipo_imovel){
        if($this->tipoImovel->existeTipo($tipo_imovel)){

            $anuncio = $this->anuncio->with(['tipoImovel','categoriaImovel','bairro','cidade','estado', 'features'])
                ->find($id_anuncio);
            $anuncio->numero_visitas +=1;
            $anuncio->save();
            $similares = $this->anuncio->where('');
            return view('site.imovel.interno', compact('anuncio'));
        }else{

        }
    }

    public function buscaPrincipal(Request $request){
         $query = $this->anuncio->where('tipo_imovel_id',$request->transacao);

        if(isset($request->categoria)){

            $query = $query->where('categoria_imovel_id',$request->categoria);

        }

        if(isset($request->cidade)){
            $query = $query->where('cidade_id',$request->cidade);
        }
        $resultados = $query->paginate(18);

        return view('site.paginas.resultado',compact('resultados'));

    }


}
