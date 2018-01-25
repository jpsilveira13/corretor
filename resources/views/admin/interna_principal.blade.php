@extends('admin.principal')
@section('left_col')
    @include('admin.left_col')
@endsection
@section('menu_header')
    @include('admin.menu_header')
@endsection
@section('content')
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Segurado</a></li>
        <li><a href="#">Juliana Vasconcelos Alves</a></li>

    </ul>
    <div class="col-md-12 container">
        <div class="row container-padding">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="information-user">
                    <span class="title-information">Matrícula: </span><br />
                    <span class="text-information">1234</span>
                    <br />
                    <span class="title-information">Servidor(a): </span><br />
                    <span class="text-information">Juliana Vasconcelos Alves</span>
                    <br />

                </div>
            </div>
            <div class="bg-btn-area  col-md-8  col-lg-8 col-sm-12 col-xs-12">
                <div class="row"></div>
                <div class="btn-group pa15" role="group">
                    <button type="button" class="btn btn-information btn-responsive btn-information-active ml5" title="Emitir Guia"><i class="fa fa-star" aria-hidden="true"></i> Emitir Guia</button>
                    <button type="button" class="btn btn-information  btn-responsive ml5"  title="Imprimir"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Imprimir</button>
                    <button type="button" class="btn btn-information  btn-responsive ml5" title="Editar"><i class="fa fa-magic" aria-hidden="true"></i> Editar</button>
                    <button type="button" class="btn btn-information  btn-responsive ml5" title="Carteirinha"><i class="fa fa-map-marker" aria-hidden="true"></i> Carteirinha</button>
                    <button type="button" class="btn btn-information btn-responsive ml5" title="Danger"><i class="fa fa-rss" aria-hidden="true"></i> Danger</button>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row" style="position: relative">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#dados"><i class="fa fa-file-text-o" aria-hidden="true"></i> Dados Gerais</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#dados-funcionais"><i class="fa fa-file-text-o" aria-hidden="true"></i> Dados Funcionais</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#contatos"><i class="fa fa-users" aria-hidden="true"></i> Contatos</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#dependentes"><i class="fa fa-address-book" aria-hidden="true"></i> Dependentes</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#contribuicao"><i class="fa fa-pie-chart" aria-hidden="true"></i> Contribuições <span class="badge bg-red">2</span></a>
                            </li>
                        </ul>
                    </div>
                    <br />
                    <div class="tab-content">
                        <div id="dados" class="tab-pane fade in active">

                        </div>
                        <div id="dados-funcionais" class="tab-pane fade">
                            2
                        </div>
                        <div id="contatos" class="tab-pane fade">
                            3
                        </div>
                        <div id="dependentes" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    <div class="table-responsive-vertical shadow-z-1">
                                        <!-- Table starts here -->
                                        <table id="tabela" class="table table-hover table-striped">
                                            <thead>
                                            <tr>
                                                <th class="font-size16">Nome</th>

                                                <th class="font-size16">Data de Nascimento</th>

                                                <th class="font-size16">Grau</th>

                                                <th class="font-size16">Situação</th>
                                            </tr>
                                            </thead>
                                            <tbody id="resultado">
                                            @for($i = 0;$i<5;$i++)

                                                <tr>

                                                    <td class="vertical-middle" data-title="Nome">Yiorgos Avanus</td>

                                                    <td data-title="Nascimento">01/01/2012</td>
                                                    <td data-title="Grau">Esposo</td>
                                                    <td data-title="Situação"><span class="label label-success">Ativo</span></td>

                                                </tr>
                                            @endfor

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
                        <div id="contribuicao" class="tab-pane fade">
                            5
                        </div>
                        <div class="ln_solid"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection