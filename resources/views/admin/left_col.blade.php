<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><i class="fa fa-handshake-o" aria-hidden="true"></i> <span class="corRoxa">Luciano</span></a>
        </div>
        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="#"><i class="fa fa-home"></i> Início</a></li>
                </ul>
                <h3>Menu</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-star-o" aria-hidden="true"></i> Anúncios <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Lorem Ipsum</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-star-o" aria-hidden="true"></i> Tipo de Imóvel <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('tipo.imovel')}}">Listagem tipo de imóvel</a></li>
                            <li><a href="{{route('tela.novo')}}">Cadastrar</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-map-marker" aria-hidden="true"></i></i> Localização <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('localizacao')}}">Todas as Localizações</a></li>
                            <li><a href="{{route('estado')}}">Cadastrar Estado</a></li>
                            <li><a href="{{route('cidade')}}">Cadastrar Cidade</a></li>
                            <li><a href="{{route('bairro')}}">Cadastrar Bairro</a></li>
                        </ul>
                    </li>

                    <li><a><i class="fa fa-star-o" aria-hidden="true"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Lorem Ipsum</a></li>
                            <li><a href="#">Lorem Ipsum</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Administrador</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-users"></i> Usuários</a></li>
                    <li><a><i class="fa fa-bug"></i> Configurações</a></li>
                    <li><a><i class="fa fa-bug"></i> Regras</a></li>
                    <li><a><i class="fa fa-bug"></i> Permissões</a></li>
                    <li><a><i class="fa fa-bug"></i> Configurações</a></li>
                    <li><a><i class="fa fa-bug"></i> Regras</a></li>
                    <li><a><i class="fa fa-bug"></i> Permissões</a></li>
                </ul>
            </div>

        </div>

    </div>
</div>