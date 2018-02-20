@extends('site.site')
@section('content')

    <section class="bg-light" id="portfolio" style="padding-top:30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase"><b>{{$resultados->count()}}</b> imóveis  encontrados</h2>
                    <h3 class="section-subheading text-muted" style="margin-bottom: 40px">Compre ou vende, casas, apartamentos, coberturas...</h3>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="container">
            <div class="row">

                @foreach($resultados as $anuncio)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mini-imovel-wrapper">

                        <a href="{{url('imoveis/')}}/{{ $anuncio->id }}/{{ $anuncio->tipoImovel->url_nome }}">
                            <div class="mini-imovel">
                                <div class="tag-mini-imovel pull-right" style="background-color:#4E4C4C"><p>{{ $anuncio->categoriaImovel->nome }}</p></div>
                                <div class="mini-imovel-img" style="background-image:url('image/img-teste.jpg')"></div>

                                <div class="mini-imovel-over"></div>
                                <span class="mini-imovel-referencia">CÓD/REF: {{$anuncio->codigo}}</span>


                                <h5>
                                    {{str_limit($anuncio->titulo,$limita = 30, $end = '...')}}         </h5>
                                <h4>
                                    {{ $anuncio->cidade->nome }} / {{ $anuncio->estado->nome }} - {{ $anuncio->estado->uf }}

                                </h4>
                                <hr>
                                <div class="mini-imovel-preco">


                                    <h2><small>Preço:</small><br> {{number_format((float)$anuncio->valor,2,",",".")}}</h2>
                                </div>

                            </div>
                        </a>

                    </div>
                @endforeach
            </div>
            <div class="col-md-12">
                <nav aria-label="Page navigation example">

                    <div class="text-center">
                        {!! $resultados->links() !!}
                    </div>
                </nav>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('site.footer')
@endsection
