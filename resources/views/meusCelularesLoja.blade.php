@extends('layout')
@section('titulo', 'Minha-Loja-Celulares')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/gerirLoja.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@endsection

@section('conteudo')
<div class="main-container">
    <div class="menu-container">
        <h3>Celulares</h3>         
       
        <ul class="menu-list">
            <li><a href="#" id="openModalBtn" >NOVO-CELULAR</a></li>
            <li><a href="{{route('CelularController.celularesMinhaLoja',['slug'=>$sessao->slug])}}">Todos Celulares</a></li>
            <li><a href="{{route('LojaController.dadosLoja',['slug'=>$sessao->slug])}}">Minha Loja</a> </li>
            <li><a href="#">IPHONE</a> </li>
            <li><a href="#">SAMSUNG</a> </li>
            <li><a href="#">HUAWEI</a> </li>
            <li><a href="#">TECNO</a> </li>
            <li><a href="#">REDMIN</a> </li>
            <li><a href="#">INFINIX</a> </li>
            <li><a href="#">ITEL</a> </li>
            <li><a href="#">OUTROS</a> </li>
            <li><a href="#">Capas-IPHONE</a> </li>
            <li><a href="#">AIR-PODS</a> </li> <b>
            
        </ul>
        <div class="publicacoes-loja">
            <p>Número de Celulares:</p>
        </div>
    </div>

    <div class="content-container">

        <div class="lojas-container">
    @foreach($celulares as $celular)
            <div class="loja">
                <img src="{{url("storage/{$celular->imagemCelular}")}}" alt="Imagem da Loja 1" class="loja-img" />
                <h3>{{$celular->marcaCelular}}</h3>
                <p>Modelo:{{$celular->modeloCelular}}</p>
                <p>Cor:{{$celular->corCelular}}</p>
                <a href="#" class="seguir-btn">Seguir</a>
                <a href="#" class="visitar-btn">Visitar</a>
            </div>
        @endforeach       
        </div>
</div>



<div id="meuModal" class="modal">
    <div class="modal-content">
      <span id="fecharModalBtn">&times;</span>
     <h3>NOVO CELULAR</h3>

      <form class="modal-form" action="{{route('CelularController.store', ['slug'=>$sessao->slug])}}" method="POST" enctype="multipart/form-data">
        @csrf 
        <label for="imagemCelular">Imagem do Celular</label>
         <input type="file" id="imagemCelular" name="imagemCelular" accept="image/*" required autofocus />
     
         <label for="marcaCelular">Marca</label>
         <select id="marcaCelular" name="marcaCelular" required >
           <option value="Não definido" disabled selected>Selecione a Marca</option>
           <option value="APPLE">APPLE</option>
           <option value="SAMSUNG">SAMSUNG</option>  
           <option value="HUAWEI">HUAWEI</option>
           <option value="TECNO">TECNO</option> 
           <option value="REDMIN">REDMIN</option>
           <option value="INFINIX">INFINIX</option>
           <option value="ITEL">ITEL</option>
           <option value="VODACOM-MOBILE">VODACOM-MOBILE</option> 
           <option value="MOVITEL-MOBILE">MOVITEL-MOBILE</option>
           <option value="XIAOMI">XIAOMI</option>
           <option value="OPPO">OPPO</option>
           <option value="VIVO">VIVO</option>
           <option value="LG">LG</option>
           <option value="SONY">SONY</option>
           <option value="NOKIA">NOKIA</option>
           <option value="MOTOROLA">MOTOROLA</option>
           <option value="LENOVO">LENOVO</option>
           <option value="GOOGLE(Pixel)">GOOGLE(Pixel)</option>
           <option value="ONEPLUS">ONEPLUS</option>
           <option value="ASUS">ASUS</option>
           <option value="HTC">HTC</option>
           <option value="BLACKBERRY">BLACKBERRY</option>
           <option value="ACATEL">ALCATEL</option>
           <option value="ZTE">ZTE</option>
           <option value="MEIZU">MEIZU</option>
           <option value="REALME">REALME</option>
           <option value="GIONEE">GIONEE</option>
           <option value="SHARP">SHARP</option>
           <option value="PARASONIC">PARASONIC</option>
       </select>
     
         <label for="modeloCelular">Modelo</label>
         <input type="text" id="modeloCelular" name="modeloCelular" required />
     
     
         <label for="capacidadeArmazenamentoCelular">Capacidade de Armazenamento (GB)</label>
         <input type="number" id="capacidadeArmazenamentoCelular" name="capacidadeArmazenamentoCelular" min="0" required  />

         <label for="memoriaRamCelular">Memória RAM (GB)</label>
         <input type="number" id="memoriaRamCelular" name="memoriaRamCelular" min="1" required  />
     
         <label for="corCelular">Cor</label>
         <select id="corCelular" name="corCelular" required>
             <option value="Não definido" disabled selected>Selecione a cor</option>
             <option value="Preto">Preto</option>
             <option value="Branco">Branco</option>   
             <option value="Prateado">Prateado</option>
             <option value="Dourado">Dourado</option>   
             <option value="Rosa">Rosa</option>
             <option value="Azul">Azul</option>   
             <option value="Vermelho">Vermelho</option>
             <option value="Verde">Verde</option>   
             <option value="Cinza">Cinza</option> 
             <option value="Roxo">Roxo</option>
             <option value="Laranja">Laranja</option>     
             <option value="Amarelo">Amarelo</option>
             <option value="Bronze">Bronze</option>   
             <option value="Não definido">Não Definir</option>    
         </select>
      
           <label for="tamanhoTelaCelular">Tamanho da Tela (polegadas)</label>
           <input type="number" id="tamanhoTelaCelular" name="tamanhoTelaCelular" step="0.01" required/>
      
           <label>Sistema Operacional</label>
           <div class="radio-container">
               <input type="radio" id="android" name="sistemaOperacionalCelular" value="Android" required/>
               <label for="android">Android</label>
               <input type="radio" id="ios" name="sistemaOperacionalCelular" value="iOS" required />
               <label for="ios">iOS</label>
           </div>
     
           <label for="bateriaCelular">Capacidade da Bateria (mAh)</label>
           <input type="number" id="bateriaCelular" name="bateriaCelular" min="1" required/>
       
<br>
           <label for="situacaoCelular">Situação</label>
           <div class="radio-container">
           <input type="radio" id="novoCelular" name="situacaoCelular" value="Novo" checked required />
           <label for="novoCelular">Novo</label>
           <input type="radio" id="segundaMaoCelular" name="situacaoCelular" value="Segunda Mão" required/>
           <label for="segundaMaoCelular">Segunda Mão</label>
           </div>
<br>      
      
           <label for="precoCelular">Preço (MT)</label>
           <input type="number" id="precoCelular" name="precoCelular" step="0.01" required />
     
           <label for="descricaoCelular">Descrição</label>
     <textarea id="descricaoCelular" name="descricaoCelular" rows="4" required></textarea>

     <input type="hidden" name="idLoja" value="{{$sessao->id}}"> 

     <button type="submit">Salvar</button>
     </form>
     
 
    </div>

    <script src="{{asset('js/modal.js') }}"></script>
  </div>
@endsection


@section('link-lojas'){{route('LojaController.index',['slug'=>$sessao->slug])}}@endsection
@section('link-celulares'){{route('CelularController.index',['slug'=>$sessao->slug, 'opcao' => 'Todos-Celulares'])}}@endsection
