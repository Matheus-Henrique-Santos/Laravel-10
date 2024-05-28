@extends('site.layouts.app')

@section('titulo', 'Titulo')

@section('conteudo')


<div class="conteudo-destaque">
    <div class="esquerda">
        <div class="informacoes">
            <h1>Sistema Super Gestão MHS</h1>
            <p style="color:#0000ff; font-family:verdana; font-size:3px;">Sistema Super Gestão MHS</p>
            <p>Software para gestão empresarial ideal para sua empresa...<p>
            <div class="chamada">
                <img src="/img/check.png">
                <span class="texto-branco">Gestão completa e descomplicada</span>
            </div>
            <div class="chamada">
                <img src="img/check.png">
                <span class="texto-branco">Sua empresa na nuvem,</span>
            </div>
        </div>

        <div class="video">
            <img src="img/player_video.jpg">
        </div>
    </div>

    <div class="direita">
        <div class="contato">
            <h1>Contato</h1>
            <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
            @component('site.layouts._components.form_contact',  ['class' => 'borda-branca'])
            @endcomponent
        </div>
    </div>
</div>
@endsection
