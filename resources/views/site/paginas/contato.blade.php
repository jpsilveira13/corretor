@extends('site.site')
@section('content')
    <section class="bg-light" id="portfolio" style="padding-top:30px">
        <div class="container bg-branco form-contato-total">
            <h3>Contato</h3>
            <p class="quia">Localização</p>
            <div class="area-mapa">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.736182362807!2d-47.910071085088674!3d-19.723852986719493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bace3d48be9e81%3A0x1e9289bded640ea7!2sR.+Outono%2C+609+-+Vila+Arquelau%2C+Uberaba+-+MG!5e0!3m2!1spt-BR!2sbr!4v1510589867566"  style="border:0"></iframe>
            </div>
            <div class="row">
                <div class="col-md-4 contato-esquerdo">
                    <h4>Endereço</h4>
                    <p>Rua Outono, nº. 609 - Casa 502
                        <span> - Vila Arquelau, Uberaba - MG, 38071-180</span>
                    </p>
                    <ul class="no-padding">
                        <li><span class="fa fa-phone" aria-hidden="true"></span> Telefone :(34) 99994-4265</li>
                        <li><span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:luciano.crfusc@gmail.com">luciano.crfusc@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-8 contato-esquerdo">
                    <h4>Formulário contato</h4>
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 contato-esquerdo">
                                <input type="text" name="Name" value="Nome*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome*';}" required="">
                                <input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                            </div>
                            <div class="col-md-6 contato-esquerdo">
                                <input type="text" name="Telephone" value="Telefone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone*';}" required="">
                                <input type="text" name="Subject" value="Assunto*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Assunto*';}" required="">
                            </div>
                            <div class="clearfix"> </div>
                            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Mensagem...</textarea>
                            <input type="submit" value="Enviar">
                            <input type="reset" value="Limpar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    @include('site.footer')
@endsection
