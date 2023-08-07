@extends('layout')
@section('titulo', 'Lojas')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/lojas.css')}}">
@endsection
@section('Conta')

@if($sessao->nomeLoja)
<a href="{{route('LojaController.dadosLoja',['slug'=>$sessao->slug])}}">{{$sessao->nomeLoja}}</a>
@elseif($sessao->nomeUser)
<a href="{{route('UserController.dadosUser',['slug'=>$sessao->slug])}}">{{$sessao->nomeUser}}</a>
@endif
@endsection

@section('conteudo')
<div class="lojas-container">
@foreach ($lojas as $loja)
  <div class="loja">
  <img src="{{url("storage/{$loja->imagemLoja}")}}" alt="Imagem da Loja 1" class="loja-img" />
 <div class="conteudoLoja"> 
  <a href="#" class="loja-links">{{$loja->nomeLoja}}</a>
  <p class="loja-endereco"><i class="fas fa-map-marker-alt"></i>{{$loja->enderecoLoja}}</p>
  <p class="loja-produtos">{{$loja->produtosVendasLoja}}</p>
  <a href="#" class="loja-links">Seguir</a>
  <button type="submit" class="loja-whatsapp"><i class="fab fa-whatsapp"></i>{{$loja->whatsappLoja}}</button>
 </div> 
</div>

@endforeach   
 </div>
 <div class="pagination">
    @if ($lojas->currentPage() > 1)
      <a href="{{ $lojas->previousPageUrl() }}" class="page-btn">&lt;</a>
    @endif

    @for ($i = 1; $i <= $lojas->lastPage(); $i++)
      <a href="{{ $lojas->url($i) }}" class="page-btn {{ $i === $lojas->currentPage() ? 'active' : '' }}">{{ $i }}</a>
    @endfor

    @if ($lojas->currentPage() < $lojas->lastPage())
      <a href="{{ $lojas->nextPageUrl() }}" class="page-btn">&gt;</a>
    @endif

</div> 


  <!-- Modal -->
  <div id="meuModal" class="modal">
    <div class="modal-content">
      <span id="fecharModalBtn">&times;</span>
    <img id="modal-imagem" src="{{url("storage/{$loja->imagemLoja}")}}" alt="Imagem Modal" class="modal-conteudo">  
  
    </div>
  </div>

  <script src="{{asset('js/modal.js') }}"></script>
  
@endsection


@section('link-celulares'){{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'Todos-Celulares'])}}@endsection

@section('link-computadores'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-video-jogos'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-som'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-maisElotronicos'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection

@section('link-lojas'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection