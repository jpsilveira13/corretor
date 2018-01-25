<?php

namespace lucianocorretor\Http\Controllers;

use Illuminate\Http\Request;
use lucianocorretor\Http\Requests\AnuncioSaveRequest;
use lucianocorretor\Models\Anuncio;
use lucianocorretor\Models\Bairro;
use lucianocorretor\Models\CategoriaImovel;
use lucianocorretor\Models\Cidade;
use lucianocorretor\Models\Estado;
use lucianocorretor\Models\StatusImovel;
use Intervention\Image\Facades\Image;
use lucianocorretor\Models\TipoImovel;

class AnuncioController extends Controller
{
    private $anuncio;
    private $cidade;
    private $estado;
    private $bairro;
    private $tipoImovel;
    private $categoriaImovel;

    public function __construct(Anuncio $anuncio,Cidade $cidade,Estado $estado,
                                Bairro $bairro,TipoImovel $tipoImovel,CategoriaImovel $categoriaImovel)
    {
        $this->anuncio = $anuncio;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->bairro = $bairro;
        $this->tipoImovel = $tipoImovel;
        $this->categoriaImovel = $categoriaImovel;
    }

    public function principal(){
        $anuncios = $this->anuncio->orderBy('id','desc')->paginate();
        return view('admin.anuncio.principal',compact('anuncios'));
    }

    public function novoAnuncio(){
        $estados = $this->estado->orderBy('nome','desc')->get();
        $cidades = $this->cidade->orderBy('nome','desc')->get();

        $categoriaImoveis = $this->categoriaImovel->orderBy('nome','desc')->get();
        $tipoImoveis = $this->tipoImovel->orderBy('nome','desc')->get();

        return view('admin.anuncio.novo_anuncio',compact('estados','cidades','tipoImoveis','categoriaImoveis'));
    }

    public function salvarAnuncio(AnuncioSaveRequest $request){
        $anuncio = $this->anuncio->fill($request->all());

        $anuncio->usuario_id = auth()->user()->id;
        $anuncio->url_titulo = str_slug($anuncio->titulo);
        $imagem = $request->file('imagem_capa');
        $anuncio->imagem_capa = md5(date('Ymdhms').$imagem->getClientOriginalName()).'.'.$imagem->getClientOriginalExtension();
        $path = public_path().'/image_capa/'.$anuncio->imagem_capa;
        Image::make($imagem->getRealPath())->resize(678,407)->save($path);
        $request->session()->flash('alert-success','Anúncio cadastrado com sucesso!');
        $anuncio->save();
        return redirect()->route('anuncio');
    }
    public function editarAnuncio(Anuncio $anuncio){
        dd($anuncio);
    }


}
