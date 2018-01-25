@extends('admin.principal')
@section('left_col')
    @include('admin.left_col')
@endsection
@section('menu_header')
    @include('admin.menu_header')
@endsection
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{url('/')}}">Home</a></li>
        <li><a href="#">Cadastrar Bairro</a></li>
    </ul>
    <div class="col-md-12">
        @if(Session::has('alert-error'))
            <div class="esconde alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('alert-error') !!}</em></div>
        @endif
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="cadastro-form">
                <h3>Cadastrar Bairro</h3>
                <br />
                <form method="post" action="{{route('salvar.bairro')}}" class="form-horizontal form-simples">
                    {{ csrf_field() }}
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('cidade_id') ? ' has-error' : '' }}">
                            <label class="col-sm-2 col-md-4 control-label">Cidade</label>
                            <div class="col-sm-10 col-md-8">
                                <select id="uf"  required class="form-control" name="cidade_id">
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
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label class="col-sm-1 col-md-2 control-label">Bairro</label>
                            <div class="col-sm-11 col-md-10">
                                <input name="nome" type="text" value="{{old('nome')}}" maxlength="250" class="text-capitalize form-control obrigatorio" required aria-required="true">
                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="divisao"></div>

                        <div class="text-center">
                            <button class="btn btn-lg btn-success center-block mb15 mt15" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Cadastrar</button>
                        </div>

                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
@endsection

