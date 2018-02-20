@extends('site.site')
@section('lightbox')
    <script src="{{asset('js/lightbox.min.js')}}"></script>

@endsection
@section('css-lightbox')
    <link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
@endsection

@section('content')

    <div class="col-xs-12">
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{route('anuncio.venda',['tipo_anuncio' => $anuncio->categoriaImovel->url_nome])}}">Imóveis à venda</a></li>
            <li>
                <a href="#">
                    {{ $anuncio->tipoImovel->nome }}
                    {{ $anuncio->cidade->nome }}                            </a>
            </li>
            <li><a href="http://modelo01.imovicorretor.com.br/BuscarImoveis?Bairro=Aricanduva&amp;idEmpresa=485ae334-34ab-44c9-943d-1a190bbcb343">Bairro {{ $anuncio->bairro->nome }}</a></li>
            <li><a href="http://modelo01.imovicorretor.com.br/BuscarImoveis?Quartos=2&amp;idEmpresa=485ae334-34ab-44c9-943d-1a190bbcb343">{{ $anuncio->nro_quartos }} dormitório(s)</a></li>
            <li class="active">
                {{$anuncio->id}}

            </li>
        </ol>
    </div>
    <div class="container no-padding">
        <div class="col-md-12 col-lg-8 pull-left">
            <div class="side-left">
                <!-- box primeiro -->
                <div class="box-default clearfix imovel-area-detalhe">
                    <h1 class="pull-left">
                        <span class="subtitle">{{ $anuncio->tipoImovel->nome }} {{ $anuncio->categoriaImovel->nome }}</span>
                        <span class="logradouro">{{ $anuncio->bairro->nome }}, {{ $anuncio->cidade->nome }} - {{ $anuncio->estado->uf }}</span>
                    </h1>
                    <div class="pull-right posvalue-imovel">
                    <span class="value-ficha">
                        <span class="subtitle"> Valor de Venda </span>
                        R$ {{number_format((float)$anuncio->valor,2,",",".")}}
                    </span>
                    </div>
                </div>
                <!-- fim box primeiro -->
                <div class="box-default informacoes-imovel clearfix">
                    <div class="pull-left">
                        <ul class="unstyled no-padding">
                            <li>{{ $anuncio->nro_quartos }}<span class="text-info">quarto</span></li>
                            <li>{{ $anuncio->banheiro }}<span class="text-info">Banheiros</span></li>
                            <li>{{ $anuncio->area_construida }}<span class="text-info">Área Útil (m²)</span></li>
                            <li>{{ $anuncio->garagem }}<span class="text-info">Número de Garagem</span></li>
                        </ul>
                    </div>
                    <div class="pull-right">
                        <ul class="unstyled no-padding">
                            <li>
                                {{ $anuncio->valor_iptu }}<span class="text-info">IPTU</span>
                            </li>
                            <li>
                                {{ $anuncio->valor_condominio }}        <span class="text-info">Condomínio</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- fim do box segundo -->
            <!-- box das imagens -->

            <div class="box-default clearfix carrosel-fotos-imovel">
                <div class="col-md-12" id="slider">
                    <div class="col-md-12" id="carousel-bounding-box">

                        <div id="carrouselImovel" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <a href="http://sempredanegocio.com.br/galeria/imoveis/site/82b0293a852efe9dbf9cf61f3e6282b1.JPG" data-lightbox="roadtrip" data-title="Imagem do imóvel">

                                        <img class="d-block img-fluid" src="http://sempredanegocio.com.br/galeria/imoveis/site/82b0293a852efe9dbf9cf61f3e6282b1.JPG" alt="First slide">
                                    </a>
                                </div>
                                <div class="carousel-item">

                                    <img class="d-block img-fluid" src="http://sempredanegocio.com.br/galeria/imoveis/site/82b0293a852efe9dbf9cf61f3e6282b1.JPG" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="http://sempredanegocio.com.br/galeria/imoveis/site/82b0293a852efe9dbf9cf61f3e6282b1.JPG" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carrouselImovel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a class="carousel-control-next" href="#carrouselImovel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Próximo</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">
                    <ul class="list-inline mt10">
                        @for($j = 0;$j<3;$j++)
                            <a  id="carousel-selector-<?=$j?>" class="<?php if($j==0){echo 'selected';}?>">
                                <img src="http://sempredanegocio.com.br/galeria/imoveis/site/82b0293a852efe9dbf9cf61f3e6282b1.JPG" width="80" height="60" class="img-responsive">
                            </a>
                        @endfor
                    </ul>
                </div>

            </div>

            <!-- box rede social -->
            <div class="box-default clearfix">
                <ul class="unstyled bar-actions no-padding">

                    <li>
                        <div class="share-social clearfix">
                            <span class="pull-left">Compartilhar</span>

                            <a href="#emailModal" class="icone-social icone-e-mail" data-target="#emailModal" data-toggle="modal" title="Enviar por e-mail"></a>
                            <a href="" class="icone-social icone-twitter" role="button" target="_blank" title="Compartilhar no Twitter"></a>
                            <a href="#" class="fa fa-facebook share-facebook icone-social icone-facebook" role="button" target="_blank" title="Compartilhar no Facebook">

                            </a>
                        </div>
                    </li>
                    <li><a href="#denuncieModal" id="modalDenuncieAbrir" class="modal-denuncie icone-alerta-reportar" data-toggle="modal" data-target="#denuncieModal">Reportar erro ou denunciar essa oferta</a></li>
                </ul>
            </div>
            <!-- fim box rede social -->
        </div>
        <div class="col-md-4 col-lg-4 pull-left">
            <div class="box-default contatar-anunciante">
                <span class="title">Contatar o anunciante</span>
                <div class="contatar-ficha">
                    <div class="modal-body no-padding" id="modalBodyContate">
                        <ul class="unstyled clearfix list-buttons mb10 no-padding">
                            <li id="liTelefone" class="pull-left">
                                <a id="" href="#phone" class="icone-telefone btn-lu btn" data-toggle="tab"><i class="fa fa-phone" aria-hidden="true"></i> Ver telefone</a>
                            </li>
                        </ul>
                        <!-- telefone contato -->


                        <div id="phone" class="tab-phone tab-pane hide">
                            <p class="text-aoligar">Ao ligar, diga que você viu esse anúncio no Luciano Corretor.</p>
                            <span id="number_tel" class="number tc">(34) 3314-5008</span>
                        </div>
                        <!-- mensagem -->
                        <div class="content-floaters">
                            <div class="tab-mensagem active" id="email">
                                <form id="interesseAnuncio" action="" class="form-mensagem clearfix">

                                    <input id="txtNome" required="" name="nome" class="input input-block-level" type="text" placeholder="Nome" value="">
                                    <input id="txtEmail" required="" name="email" class="input input-block-level" type="email" placeholder="E-mail" value="">
                                    <input id="txtDDD" required="" name="codigo_area" class="input input-block-level span1" type="text" placeholder="DDD" maxlength="2" value="">
                                    <input id="txtTelefone" required="" name="telefone" class="input input-block-level span2" type="text" placeholder="Telefone" maxlength="9" value="">
                                    <textarea name="mensagem" id="txtMensagem" class="input-block-level" rows="5">Olá, Gostaria de ter mais informações sobre o  anúncio Apartamento à venda, R$ 350000.00, em Uberaba - MG. Aguardo seu contato, obrigado.</textarea>

                                    <br>
                                    <input type="reset" class="btn-link" value="Limpar" id="btnLimpar">
                                    <button type="submit" id="enviarMensagem" class="pull-right btn btn-lu contact"><i class="fa fa-envelope" aria-hidden="true"></i> Enviar e-mail</button>
                                </form>
                                <div id="divSucessoAnuncio" class="tab-floater tab-pane hide">
                                    <p class="text-success mt10">A mensagem foi enviada com sucesso!</p>
                                    <p class="mt30">Em breve você receberá uma cópia dessa mensagem em seu endereço de e-mail.</p>
                                    <p class="subline mt30">Não faça depósitos sem a certeza da existência e das condições do imóvel anunciado. Certifique-se da idoneidade do anunciante.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- fim contratar ficha -->

                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-12">
            <!-- box descricao anuncio -->
            <div class="box-default clearfix box-descricao-caract">
                <h3>Descrição</h3>
                <div id="descricaoOferta">
                    <p>
                       {{ $anuncio->descricao }}
                    </p>
                </div>
                <h3>Características</h3>
                <div id="caracteristicaOferta">

                    <p></p>
                    <p>
                        <strong>Características:</strong>
                        @foreach($anuncio->features as $caracteristicas)
                            {{ $caracteristicas->nome }}/
                        @endforeach

                    </p>
                </div>
                <p></p>
                <div id="codigoAnuncio">
                    <p><strong>Código do anúncio: </strong> {{ $anuncio->codigo }}</p>
                </div>
            </div>
            <!-- fim do box descricao anuncio -->
        </div>
        <h2 class="estilo-fonte-h2">Encontre outros anúncios similares</h2>
        <div class="box-default clearfix">
            <div class="row no-padding">
                @for($i = 0;$i<3;$i++)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mini-imovel-wrapper">
                        <a href="{{url('/imoveis/casa')}}">
                            <div class="mini-imovel">
                                <div class="tag-mini-imovel pull-right" style="background-color:#4E4C4C"><p>Imóvel de Exemplo</p></div>
                                <div class="mini-imovel-img" style="background-image:url({{url('image/img-teste.jpg')}}"></div>
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
    </div>

@endsection

@section('footer')
    @include('site.footer')
@endsection
