<?php

namespace lucianocorretor\Models;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table = 'anuncio';
    protected $fillable = [
        'usuario_id',
        'tipo_imovel_id',
        'categoria_imovel_id',
        'estado_id',
        'cidade_id',
        'bairro_id',
        'endereco',
        'numero',
        'valor_iptu',
        'valor_condominio',
        'nro_quartos',
        'garagem',
        'banheiro',
        'suite',
        'area_total',
        'area_construida',
        'acomodacao',
        'titulo',
        'url_titulo',
        'descricao',
        'valor',
        'status_imovel_id',
        'numero_visitas',
        'imagem_capa',
        'endereco',
        'mostrar_endereco'

    ];

    public function pegaCategoria($titpo_categoria){
        return $this->where('categoria_imovel_id',$tipo_categoria)->get();
    }
    public function galeria(){
        return $this->hasMany(GaleriaAnuncio::class);
    }

    public function features(){
        return $this->belongsToMany(Caracteristica::class);
    }
    public function images(){
        return $this->hasMany(GaleriaAnuncio::class,'anuncio_id','id');
    }

    public function caracteristica(){
        return $this->belongsToMany(Anuncio::class,'anuncio_caracteristica');
    }

    public function categoriaImovel(){
        return $this->belongsTo(CategoriaImovel::class, 'categoria_imovel_id');
    }

    public function tipoImovel(){
        return $this->belongsTo(TipoImovel::class, 'tipo_imovel_id');
    }

    public function cidade(){
        return $this->belongsTo(Cidade::class, 'cidade_id');
    }

    public function estado(){
        return $this->belongsTo(Estado::class, 'estado_id');
    }

    public function bairro(){
        return $this->belongsTo(Bairro::class, 'bairro_id');
    }

}
