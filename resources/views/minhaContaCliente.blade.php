@extends('layout')
@section('titulo', 'Minha-Conta')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/gerirLoja.css')}}">
@endsection

@section('conteudo')
<div class="main-container">
    <div class="menu-container">
        <h3>{{$sessao->nomeUser}}</h3>         
       
        <ul class="menu-list">
            <li><a href="{{route('UserController.dadosUser')}}">Minha Conta</a></li>
            <li><a href="#">Lojas a seguir</a>
        </ul>
        <div class="publicacoes-loja">
            <p>Número de Lojas a seguir:</p>
        </div>
    </div>
    <div class="content-container">

        <div class="loja-info">
            <div class="loja-dados">
                <p><strong>Nome de Usuario:</strong>{{$sessao->nomeUser}}</p>
                <p><strong>Email:</strong>{{$sessao->emailUser}}</p>
                <p><strong>Sexo:</strong>{{$sessao->sexoUser}}</p>
                <p><strong>Telefone:</strong>{{$sessao->telefoneUser}}</p>
                <p><strong>WhatsApp:</strong>{{$sessao->whatsappUser}}</p>
                <button class="editar-btn">Editar</button>
            </div>  
        </div>
</div>
</div>
@endsection

@section('link-celulares'){{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'Todos-Celulares'])}}@endsection

@section('link-computadores'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-video-jogos'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-som'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-maisElotronicos'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-lojas'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection