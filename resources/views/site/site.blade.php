<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Luciano - Assuntos Imobiliários</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,900,400italic,300,700,400" rel="stylesheet" type="text/css">
@yield('css-lightbox')
<!-- Custom styles for this template -->
    <link href="{{asset('css/site.css')}}" rel="stylesheet">

</head>


<body id="page-top">

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Luciano Corretor</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sobre')}}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('imoveis')}}">Lançamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('imoveis  ')}}">Venda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('contato')}}">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header -->
@if(Request::is('/'))
    <header class="masthead">
        <div class="container bg-remove-fundo-preto">
            <div class="intro-text">
                <div class="intro-lead-in">Ficou fácil encontrar sua futura casa!</div>
                <div class="intro-heading text-uppercase">Faça sua pesquisa</div>
                <div class="row hero-search-box">
                    <form id="formPrincipal" class="col-12" method="GET" action="{{url('/imoveis')}}">
                        <div class="row">
                            <div class="col-sm-2 col-md-2  search-input">
                                <select name="transacao" class="form-control input-lg search-second">

                                    <option value="venda">Comprar</option>
                                    <option value="aluga">Alugar</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                <select name="categoria" class="form-control input-lg search-second">
                                    <option selected=""> Qual o tipo?</option>
                                    @foreach(Session::get('categoriaAnuncios') as $categoria)
                                        <option value="{{$categoria->categoriaImovel->id}}">{{$categoria->categoriaImovel->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                <select name="cidade" class="form-control input-lg search-second">
                                    <options>Escolha uma cidade</options>
                                    @foreach(Session::get('categoriaAnuncios') as $cidade)
                                        <option value="{{$cidade->cidade->id}}">{{$cidade->cidade->nome}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-2 col-sm-2 center-block search-input">
                                <button class="btn btn-custom btn-block btn-lg height46 btn-azul"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="over-slider">

        </div>
    </header>
@else
    <header style="min-height: 132px" class="masthead">
        <div class="caixa-pesquisa">
            <div class="row hero-search-box">
                <form id="formPrincipal" class="col-12" method="GET" action="{{url('/imoveis')}}">
                    <div class="row">
                        <div class="col-sm-2 col-md-2  search-input">
                            <select name="transacao" class="form-control input-lg search-second">

                                <option value="venda">Comprar</option>
                                <option value="aluga">Alugar</option>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-4 search-input">
                            <select name="categoria" class="form-control input-lg search-second">
                                <option selected=""> Qual o tipo?</option>
                                <optgroup label="Residencial">
                                    <option value="apartment" selected="">
                                        Apartamento
                                    </option>
                                    <option value="house">
                                        Casa
                                    </option>
                                    <option value="countryHouse">
                                        Chácara
                                    </option>
                                    <option value="condominium">
                                        Casa de condomínio
                                    </option>
                                    <option value="flat">
                                        Flat
                                    </option>
                                    <option value="buildingSit">
                                        Lote/Terreno
                                    </option>
                                    <option value="twoStoryHouse">
                                        Sobrado
                                    </option>
                                    <option value="roofApartment">
                                        Cobertura
                                    </option>
                                    <option value="kitnet">
                                        Kitnet
                                    </option>
                                </optgroup>
                                <optgroup label="Comercial">
                                    <option value="clinic">
                                        Consultório
                                    </option>
                                    <option value="residentialBuilding">
                                        Edifício residencial
                                    </option>
                                    <option value="commercialOffice">
                                        Sala comercial
                                    </option>
                                    <option value="farm">
                                        Fazenda/Sítio
                                    </option>
                                    <option value="storeHouse">
                                        Galpão/Depósito/Armazém
                                    </option>
                                    <option value="commercialBuilding">
                                        Imóvel comercial
                                    </option>
                                    <option value="shop">
                                        Loja
                                    </option>
                                    <option value="commercialBuildingSit">
                                        Lote/Terreno
                                    </option>
                                    <option value="commercialBusiness">
                                        Ponto comercial
                                    </option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-4 search-input">
                            <select name="cidade" class="form-control input-lg search-second">
                                <options>Escolha uma cidade</options>
                                <option>Uberaba</option>
                                <option>Uberlândia</option>
                                <option>Araxá</option>

                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2 center-block search-input">
                            <button class="btn btn-custom btn-block btn-lg height46 btn-azul"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="over-slider">

        </div>
    </header>
@endif
@yield('content')
@yield('footer')


<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>


<!-- Custom scripts for this template -->
@yield('lightbox')
<script src="{{asset('js/site.js')}}"></script>

</body>

</html>

