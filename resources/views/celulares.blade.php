@extends('layout')
@section('titulo', 'Celulares')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/gerirLoja.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection

@section('Conta')

@if($sessao->nomeLoja)
<a href="{{route('LojaController.dadosLoja',['slug'=>$sessao->slug])}}">{{$sessao->nomeLoja}}</a>
@elseif($sessao->nomeUser)
<a href="{{route('UserController.dadosUser',['slug'=>$sessao->slug])}}">{{$sessao->nomeUser}}</a>
@endif
@endsection

@section('conteudo')

<div class="main-container">
    <div class="menu-container">
        <h3>Celulares</h3>         
      
        <ul class="menu-list">
<li><a href="{{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'Todos-Celulares'])}}">Todos Celulares</a> </li>
<li><a href="{{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'APPLE'])}}">APPLE</a> </li>
<li><a href="{{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'SAMSUNG'])}}">SAMSUNG</a> </li>
<li><a href="{{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'HUAWEI'])}}">HUAWEI</a> </li>
<li><a href="#">TECNO</a> </li>
<li><a href="#">REDMIN</a> </li>
<li><a href="#">INFINIX</a> </li>
<li><a href="#">ITEL</a> </li>
            <li><a href="#">OUTROS</a> </li>
            <li><a href="#">Capas-IPHONE</a> </li>
            <li><a href="#">AIR-PODS</a> </li> <b>        
        </ul>     
    </div>


     
    <div class="lojas-container">
        @foreach ($celulares as $celular)
          <div class="loja">
          <div class ="imagemLoja">
          <img src="{{url("storage/{$celular->imagemCelular}")}}" alt="Imagem da Loja 1" class="loja-img" />
          </div>
         <div class="conteudoLoja"> 
          <h3>{{$celular->modeloCelular}}</h3>
          <a href="#" class="loja-links">Publicado por:{{$sessao->nomeLoja}}</p>
          <button type="submit" class="loja-whatsapp"><i class="fab fa-whatsapp"></i>{{$sessao->whatsappLoja}}</button>
         </div> 
        </div>
        
        @endforeach   
         </div>
         <div class="pagination">
            @if ($celulares->currentPage() > 1)
              <a href="{{ $celulares->previousPageUrl() }}" class="page-btn">&lt;</a>
            @endif
        
            @for ($i = 1; $i <= $celulares->lastPage(); $i++)
              <a href="{{ $celulares->url($i) }}" class="page-btn {{ $i === $celulares->currentPage() ? 'active' : '' }}">{{ $i }}</a>
            @endfor
        
            @if ($celulares->currentPage() < $celulares->lastPage())
              <a href="{{ $celulares->nextPageUrl() }}" class="page-btn">&gt;</a>
            @endif
        
        </div>

</div>    

@endsection


@section('link-celulares'){{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'Todos-Celulares'])}}@endsection

@section('link-computadores'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-video-jogos'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-som'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-maisElotronicos'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-lojas'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection