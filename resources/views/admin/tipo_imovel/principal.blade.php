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
        <li><a href="#">Tipo de imóvel</a></li>
    </ul>
    <div class="col-md-12">
        @if(Session::has('alert-success'))
            <div class="esconde alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success') !!}</em></div>
        @endif
    </div>
    <div class="col-md-12 container">
        <div class="bg-btn-area  col-md-8  col-lg-8 col-sm-12 col-xs-12">
            <div class="row"></div>
            <div class="btn-group pa15" role="group">
                <button type="button" onclick="window.location='{{route('tipo')}}';" class="btn btn-information btn-responsive btn-information-active ml5" title="Tipo de imóvel"><i class="fa fa-home" aria-hidden="true"></i> Novo Tipo</button>
            </div>
        </div>
        <br /><br />
        <div class="clearfix"></div>
        <div class="row" style="position: relative">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#dados"><i class="fa fa-file-text-o" aria-hidden="true"></i> Dados Gerais</a>
                            </li>

                        </ul>
                    </div>
                    <br />
                    <div class="tab-content">
                        <div id="dados" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="table-responsive-vertical shadow-z-1">
                                        <!-- Table starts here -->
                                        <table id="tabela" class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th class="font-size16">#</th>
                                                <th class="font-size16">Nome</th>
                                                <th class="font-size16 text-center">Opções</th>
                                            </tr>
                                            </thead>
                                            <tbody id="resultado">
                                            @foreach($tipoImoveis as $tipoImovel)
                                                <tr>
                                                    <td class="vertical-middle text-uppercase" data-title="ID">{{$tipoImovel->id}}</td>

                                                    <td class="text-uppercase" data-title="Nome"> {{$tipoImovel->nome}}</td>


                                                    <td data-title="Opções" class="text-center vertical-middle">
                                                        <div class="dropdown">
                                                            <a href="javascript:;" class="btn  btn-primary btn-md" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-plus"></i></a>
                                                            <ul class="dropdown-menu mudar-posicao pull-right">
                                                                <li class="divider"></li>
                                                                <li>
                                                                    <a href="{{route('editar.tipo',['id' => $tipoImovel->id])}}"><i class="fa fa-pencil"></i> Editar</a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li>
                                                                    <a href="{{route('remover.tipo',['id' => $tipoImovel->id])}}" id="refazer"><i class="fa fa-trash-o"></i> Remover</a>
                                                                </li>
                                                                <li class="divider"></li>

                                                                <li>
                                                                    <a class="fechar" href="javascript:void(0)"><i class="fa fa-fw fa-times"></i> Fechar</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <ul class="pagination">
                                                <li class="disabled"><span>&laquo;</span></li>

                                                <li class="active"><span>1</span></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>

                                                <li><a href="#" rel="next">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="ln_solid"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection