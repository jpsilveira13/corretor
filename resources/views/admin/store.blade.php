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
        <li><a href="#">Painel</a></li>

    </ul>
    <div class="container">
        <div class="col-xs-12 col-md-4 col-sm-6">
            <a href="#" class="service-link">
                <figure class="service-link web-design">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <h3 class="service-title">Meus anúncios</h3>
                </figure>
            </a>
        </div>
        <div class="col-xs-12 col-md-4 col-sm-6">
            <a href="https://sortesim.com.br/sistema/usuario/cadastrar" class="service-link">
                <figure class="service-link responsive-design">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <h3 class="service-title">Minhas Mensagens</h3>
                </figure>
            </a>
        </div>
        <div class="col-xs-12 col-md-4 col-sm-6">
            <a href="https://sortesim.com.br/sistema/usuario/cadastrar" class="service-link">
                <figure class="service-link seo">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    <h3 class="service-title">Meu Relatório</h3>
                </figure>
            </a>
        </div>
    </div>
@endsection