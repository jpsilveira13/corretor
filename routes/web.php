<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'as' => 'index',
    'uses' => 'SiteController@index'
]);

Route::get('sobre',[
    'as' => 'sobre',
    'uses' => 'SiteController@sobre'
]);

Route::get('contato',[
    'as' => 'contato',
    'uses' => 'SiteController@contato'
]);

Route::get('imoveis','SiteController@todosImoveis');

Route::get('/imoveis/{id_anuncio}/{tipo_imovel}', 'SiteController@imovelInterno');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::name('anuncio.venda')->get('/imoveis/{tipo_anuncio}','SiteController@tipoAnuncio');

//url admin


Route::group(['middleware' => 'auth', 'where' => ['id' => '[0-9]+']], function () {
    Route::group(['prefix' => 'sistema'], function () {
        Route::get('busca-bairro/{query?}','LocalizacaoController@buscaBairro');
        Route::get('/',[
           'as' => 'sistema',
           'uses' => 'AdminController@principal'
        ]);
        Route::group(['prefix' => 'anuncio'], function(){

            Route::get('/',[
                'as' => 'anuncio',
                'uses'=> 'AnuncioController@principal'
            ]);
            Route::get('novo-anuncio',[
                'as' => 'novo.anuncio',
                'uses' => 'AnuncioController@novoAnuncio'
            ]);
           Route::name('salvar.anuncio')->post('salvar-anuncio','AnuncioController@salvarAnuncio');

          Route::name('editar.anuncio')->get('{anuncio}/editar','AnuncioController@editarAnuncio');
          Route::name('cadastro.imagens')->get('{anuncio/cadastro-imagens','AnuncioController@cadastrarImagens');
        });
        Route::group(['prefix' => 'tipo-imovel'], function(){
            Route::get('/',[
                'as' => 'tipo.imovel',
                'uses'=> 'TipoController@principal'
            ]);
            Route::get('tipo',[
                'as' => 'tipo',
                'uses' => 'TipoController@novoTipo'
            ]);
            Route::get('novo-tipo',[
                'as' => 'tela.novo',
                'uses' => 'TipoController@novoTipo'
            ]);
            Route::get('editar-tipo/{id}',[
                'as' => 'editar.tipo',
                'uses' => 'TipoController@editarTipo'
            ]);

            Route::post('novo-tipo',[
                'as' => 'novo.tipo',
                'uses' => 'TipoController@salvarTipo'
            ]);

            Route::post('editar-tipo-salvar/{id}',[
                'as' => 'novo.tipo.salvar',
                'uses' => 'TipoController@editarTipoSalvar'
            ]);
            Route::get('remover-tipo/{id}',[
               'as' => 'remover.tipo',
               'uses' => 'TipoController@removerTipo'
            ]);
        });

        Route::group(['prefix' => 'localizacao'], function(){
           //rotas get
            Route::get('/',[
               'as' => 'localizacao',
               'uses'=> 'LocalizacaoController@principal'
           ]);
           Route::get('estado',[
               'as' => 'estado',
               'uses' => 'LocalizacaoController@estado'
           ]);
            Route::get('cidade',[
                'as' => 'cidade',
                'uses' => 'LocalizacaoController@cidade'
            ]);
            Route::get('bairro',[
                'as' => 'bairro',
                'uses' => 'LocalizacaoController@bairro'
            ]);
           //rotas post
            Route::post('salvar-estado',[
                'as' => 'salvar.estado',
                'uses' => 'LocalizacaoController@salvarEstado'
            ]);
            Route::post('salvar-cidade',[
                'as' => 'salvar.cidade',
                'uses' => 'LocalizacaoController@salvarCidade'
            ]);
            Route::post('salvar-bairro',[
                'as' => 'salvar.bairro',
                'uses' => 'LocalizacaoController@salvarBairro'
            ]);
        });
        Route::get('/interno','AdminController@interno');

    });

});