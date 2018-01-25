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
        <li><a href="#">Cadastrar Tipo de imóvel</a></li>
    </ul>
    <div class="col-md-12">
        @if(Session::has('alert-error'))
            <div class="esconde alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('alert-error') !!}</em></div>
        @endif
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="cadastro-form">
                <h3>Informações</h3>
                <br />
                <form method="post" action="{{route('novo.tipo')}}" class="form-horizontal form-simples">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label class="col-sm-1 col-md-1 control-label">Nome</label>
                            <div class="col-sm-11 col-md-11">
                                <input name="nome" type="text" value="{{old('nome')}}" maxlength="200"  class="form-control obrigatorio" required aria-required="true">
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

