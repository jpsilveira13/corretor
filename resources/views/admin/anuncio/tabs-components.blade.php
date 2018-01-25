@php

    $tabs = [
         [
            'title' => 'Informações',
             'link' => !isset($anuncio)?route('novo.anuncio'):route('editar.anuncio',['anuncio'=> $anuncio->id])
         ],
         [
            'title' => 'Imagens',
             'link' => !isset($anuncio)?'#':route('cadastro.imagens',['anuncio' => $anuncio->id]),
             'disabled' => !isset($anuncio)?true:false
         ],
         [
            'title' => 'Características',
             'link' => '',
         ]
    ]
@endphp

<h3>Gerenciar vídeo</h3>
<div class="text-right">
    {!! Button::link('Listar Anúncios')->asLinkTo(route('anuncio')) !!}
</div>
{!! Navigation::tabs($tabs) !!}
