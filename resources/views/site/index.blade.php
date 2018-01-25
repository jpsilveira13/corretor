@extends('site.site')
@section('content')



<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Imóveis em destaque</h2>
                <h3 class="section-subheading text-muted">Compre ou <vende></vende> casas, apartamentos, coberturas...</h3>
            </div>
        </div>
        <div class="row">
            @foreach($anuncios as $a)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mini-imovel-wrapper">

                    <a href="{{url('imoveis/')}}/{{ $a->id }}/{{ $a->tipoImovel->url_nome }}">
                        <div class="mini-imovel">
                            <div class="tag-mini-imovel pull-right" style="background-color:#4E4C4C"><p>{{ $a->categoriaImovel->nome }}</p></div>


                            <div class="mini-imovel-img" style="background-image:url('image/img-teste.jpg')">


                            </div>

                            <div class="mini-imovel-over"></div>
                            <span class="mini-imovel-referencia">CÓD/REF: {{ $a->codigo }}</span>


                            <h5>
                                {{ $a->titulo }}           </h5>
                            <h4>
                                    {{ $a->cidade->nome }} / {{ $a->estado->nome }} - {{ $a->estado->uf }}

                            </h4>
                            <hr>
                            <div class="mini-imovel-preco">


                                <h2><small>Preço:</small><br>R$ {{number_format((float)$a->valor,2,",",".")}}</h2>
                            </div>

                        </div>
                    </a>

                </div>
            @endforeach
            @for($i = 0;$i<9;$i<$i++)
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mini-imovel-wrapper">

                    <a href="{{url('imoveis/casa')}}">
                        <div class="mini-imovel">
                            <div class="tag-mini-imovel pull-right" style="background-color:#4E4C4C"><p>Imóvel de Exemplo</p></div>


                            <div class="mini-imovel-img" style="background-image:url('image/img-teste.jpg')">


                            </div>

                            <div class="mini-imovel-over"></div>
                            <span class="mini-imovel-referencia">CÓD/REF: APA22</span>


                            <h5>
                                APARTAMENTO 2 DORM.            </h5>
                            <h4>
                                ARICANDUVA / São Paulo - SP

                            </h4>
                            <hr>
                            <div class="mini-imovel-preco">


                                <h2><small>Preço:</small><br>R$ 1.200.000,00</h2>
                            </div>

                        </div>
                    </a>

                </div>
            @endfor
        </div>
    </div>
</section>
@endsection
@section('footer')
    @include('site.footer')
@endsection
