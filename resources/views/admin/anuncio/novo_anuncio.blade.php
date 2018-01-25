@extends('admin.principal')
@section('left_col')
    @include('admin.left_col')
@endsection
@section('menu_header')
    @include('admin.menu_header')
@endsection
@section('js-anuncio')
    <script src="{{asset('admin/js/anuncio.js')}}"></script>

@endsection
@section('css-anuncio')

    <link href="{{asset('admin/css/anuncio.css')}}" rel="stylesheet">
@endsection
@section('content')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="{{route('anuncio')}}">Anúncio</a></li>
        <li><a href="#">Novo</a></li>

    </ul>
    <div class="col-md-12 container">

        <div class="clearfix"></div>
        <div class="row" style="position: relative">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="row">
                     @include('admin.anuncio.tabs-components')
                    </div>
                    <br />
                    <div class="tab-content">
                        <form method="post" action="{{route('salvar.anuncio')}}" enctype="multipart/form-data" class="form-horizontal form-simples">
                            {{ csrf_field() }}
                            <div id="dados" class="tab-pane fade in active">

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('categoria_imovel_id') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-4 control-label">Selecione a categoria</label>
                                        <div class="col-sm-10 col-md-8">
                                            <select id="categoria_imovel_id"  required class="form-control" name="categoria_imovel_id">
                                                <option value="0">Selecione uma opção</option>
                                                @foreach($categoriaImoveis as $categoriaImovel)

                                                    <option value="{{$categoriaImovel->id}}">{{$categoriaImovel->nome}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('categoria_imovel_id'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('categoria_imovel_id') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('tipo_imovel_id') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-3 control-label">Tipo de imóvel</label>
                                        <div class="col-sm-10 col-md-9">
                                            <select id="categoria_imovel_id"  required class="form-control" name="tipo_imovel_id">
                                                <option value="0">Selecione uma opção</option>
                                                @foreach($tipoImoveis as $tipoImovel)

                                                    <option value="{{$tipoImovel->id}}">{{$tipoImovel->nome}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('categoria_imovel_id'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('categoria_imovel_id') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('estado_id') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Estado</label>
                                        <div class="col-sm-10 col-md-10">
                                            <select id="uf"  required class="form-control" name="estado_id">
                                                <option value="0">Selecione uma opção</option>
                                                @foreach($estados as $estado)

                                                    <option value="{{$estado->id}}">{{$estado->nome}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('estado_id'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('estado_id') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('cidade_id') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Cidade</label>
                                        <div class="col-sm-10 col-md-10">
                                            <select   required class="form-control" name="cidade_id">
                                                <option value="0">Selecione uma opção</option>
                                                @foreach($cidades as $cidade)

                                                    <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('cidade_id'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('cidade_id') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group{{ $errors->has('bairro_id') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Bairro</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input id="bairro" value="{{old('bairro_id')}}" autocomplete="off"  class="form-control" name="bairro_id">
                                            <ul id="listaBairro"></ul>
                                            @if ($errors->has('bairro_id'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('bairro_id') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Endereço</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('endereco')}}"  class="form-control" name="endereco">

                                            @if ($errors->has('endereco'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('endereco') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group{{ $errors->has('numero') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">N°</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('numero')}}" maxlength="5" autocomplete="off"  class="form-control" name="numero">

                                            @if ($errors->has('numero'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('numero') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="divisao"></div>
                                <h3>Informações Adicionais</h3>
                                <div class="col-md-3">

                                    <div class="form-group{{ $errors->has('nro_quartos') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Quartos</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('nro_quartos')}}"  maxlength="1"  required class="form-control" name="nro_quartos">

                                            @if ($errors->has('nro_quartos'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('nro_quartos') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('garagem') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Garagem</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('garagem')}}" maxlength="1" required class="form-control" name="garagem">

                                            @if ($errors->has('garagem'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('garagem') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('banheiro') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-8 control-label">Banheiro</label>
                                        <div class="col-sm-10 col-md-4">
                                            <input value="{{old('banheiro')}}" maxlength="1" required class="form-control" name="banheiro">

                                            @if ($errors->has('banheiro'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('banheiro') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group{{ $errors->has('suite') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Suíte</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('suite')}}" maxlength="1" required class="form-control" name="suite">

                                            @if ($errors->has('suite'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('suite') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('acomodacao') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Acomodação</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('acomodacao')}}" maxlength="1" required class="form-control" name="acomodacao">

                                            @if ($errors->has('acomodacao'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('acomodacao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('area_total') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Área Total</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('area_total')}}" maxlength="5" required class="form-control" name="area_total">

                                            @if ($errors->has('area_total'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('area_total') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('area_construida') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-2 control-label">Área Construída</label>
                                        <div class="col-sm-10 col-md-10">
                                            <input value="{{old('area_construida')}}" maxlength="5" required class="form-control" name="area_construida">

                                            @if ($errors->has('area_construida'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('area_construida') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-1 control-label">Título</label>
                                        <div class="col-sm-10 col-md-11">
                                            <input value="{{old('titulo')}}"  required class="form-control" name="titulo">

                                            @if ($errors->has('titulo'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('titulo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                                        <label class="col-sm-2 col-md-1 control-label">Descrição</label>
                                        <div class="col-sm-10 col-md-11">
                                            <textarea style="height: 200px;"   required class="form-control" name="descricao">{{old('descricao')}}</textarea>

                                            @if ($errors->has('descricao'))
                                                <span class="help-block">
                                                     <strong>{{ $errors->first('descricao') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="file-upload">
                                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adicionar Capa</button>

                                            <div class="image-upload-wrap">
                                                <input class="file-upload-input" type="file" name="imagem_capa" onchange="readURL(this);" accept="image/*">
                                                <div class="drag-text">
                                                    <h3>
                                                        Arraste e solte um arquivo ou seleccione a imagem</h3>
                                                </div>
                                            </div>
                                            <div class="file-upload-content">
                                                <img class="file-upload-image" src="#" alt="sua imagem">
                                                <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Imagem cadastrada</span></button>
                                                </div>
                                            </div>
                                            <br>
                                            <small class="text-center"><b>Obs: Usar imagem com o formato 678x407</b></small>
                                        </div>
                                    </div>
                                    @if ($errors->has('imagem_capa'))
                                        <span class="help-block">
                                                     <strong>{{ $errors->first('imagem_capa') }}</strong>
                                                </span>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                                <div class="divisao"></div>

                            </div>

                            <div class="text-center">
                                <button class="btn btn-lg btn-success center-block mb15 mt15" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Cadastrar</button>
                            </div>
                        </form>

                        <div class="ln_solid"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection