@extends('layout')
@section('titulo', 'Entrar')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/gerirLoja.css')}}">
@endsection

@section('conteudo')
<div class="main-container">
    <div class="menu-container">
        <h3>{{$sessao->nomeLoja}}</h3>         
        <div class="loja-perfil">
            <img src="{{url("storage/{$sessao->imagemLoja}")}}" class="perfil-img" />
        </div>
        <ul class="menu-list">
            <li><a href="{{route('LojaController.dadosLoja',['slug'=>$sessao->slug])}}">Minha Loja</a></li>
            <li><a href="{{route('CelularController.celularesMinhaLoja',['slug'=>$sessao->slug])}}">Gerir Celulares</a>
            <li><a href="#">Gerir Computadores</a>
            <li><a href="#">Gerir Video Jogos</a></li>
            <li><a href="#">Gerir Sounds</a></li>
            <li><a href="#">Gerir Carros</a></li>
            <li><a href="#">Gerir Roupas</a></li>
            <!-- Adicione mais links conforme necessário -->
        </ul>
        <div class="publicacoes-loja">
            <p>Número de Seguidores:</p>
        </div>
    </div>
    <div class="content-container">

        <div class="loja-info">
            <div class="loja-dados">
                <p><strong>Nome da Loja:</strong>{{$sessao->nomeLoja}}</p>
                <p><strong>Endereço:</strong>{{$sessao->enderecoLoja}}</p>
                <p><strong>Email:</strong>{{$sessao->emailLoja}}</p>
                <p><strong>Telefone:</strong>{{$sessao->telefoneLoja}}</p>
                <p><strong>WhatsApp:</strong>{{$sessao->whatsappLoja}}</p>
                <p><strong>Horários de Funcionamento:</strong></p>
                <ul>
                    <li><strong>Segunda-feira:</strong> {{$sessao->segundaAbertura}} Ate {{$sessao->segundaFechamento}}</li>
                    <li><strong>Terca-feira:</strong> {{$sessao->tercaAbertura}} Ate {{$sessao->tercaFechamento}}</li>
                    <li><strong>Quarta-feira:</strong> {{$sessao->quartaAbertura}} Ate {{$sessao->quartaFechamento}}</li>
                    <li><strong>Quinta-feira:</strong> {{$sessao->quintaAbertura}} Ate {{$sessao->quintaFechamento}}</li>
                    <li><strong>Sexta-feira:</strong> {{$sessao->sextaAbertura}} Ate {{$sessao->sextaFechamento}}</li>
                    <li><strong>Sabado:</strong> {{$sessao->sabadoAbertura}} Ate {{$sessao->sabadoFechamento}}</li>
                    <li><strong>Domingo:</strong> {{$sessao->domingoAbertura}} Ate {{$sessao->domingoFechamento}}</li>
                </ul>
                <p><strong>Disponibilidade para Entrega:</strong>{{$sessao->disponibilidadeEntregaLoja}}</p>
                <p><strong>Produtos para Vendas:</strong>{{$sessao->produtosVendasLoja}}</p>
               
                <h3>Descrição da Loja</h3>
                <div class="descricao-loja">
                    
                    <p>{{$sessao->descricaoLoja}}</p>
                </div>
               
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