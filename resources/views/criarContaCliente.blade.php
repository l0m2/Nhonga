@extends('layout')
@section('titulo', 'Criar Conta-Cliente')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/criarContaCliente.css')}}">
@endsection

@section('Conta')
Conta
@endsection

@section('conteudo')

<div class="criar-conta-cliente-container">
    <h2>Criar Conta Cliente</h2>
    <form action="{{route('UserController.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="input-container">
            <label for="nomeUser">Nome Completo</label>
            <input type="text" name="nomeUser" id="nomeUser" placeholder="Digite seu nome completo" required autofocus>
        </div>
        <div class="input-container">
            <label for="emailUser">E-mail</label>
            <input type="email" name="emailUser" id="emailUser" placeholder="Digite seu e-mail" required>
        </div>
        <div class="input-container">
            <label for="sexoUser">Sexo</label>
            <select name="sexoUser" id="sexoUser" required>
                <option value="Nao Definido" disabled selected>Selecione o Sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>
        </div>
        <div class="input-container">
            <label for="telefoneUser">Número de Telefone</label>
            <input type="tel" name="telefoneUser" id="telefoneUser" placeholder="(ex: 258849155311)" required>
        </div>
        <div class="input-container">
            <label for="whatsappUser">Número WhatsApp</label>
            <input type="tel" name="whatsappUser" id="whatsappUser" placeholder="(ex: 258849155311)" required>
        </div>
        <div class="input-container">
            <label for="senhaUser">Senha</label>
            <input type="password" name="senhaUser" id="senhaUser" placeholder="Digite sua senha" required>
        </div>
        <div class="input-container">
            <label for="confirmarSenhaUser">Confirmação de Senha</label>
            <input type="password" name="confirmarSenhaUser" id="confirmarSenhaUser" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit">Criar Conta</button>
        <div class="links-criar-conta">
            <a href="{{route('SiteController.entrar')}}">Entrar</a>
            <a href="{{route('LojaController.criarContaLoja')}}">Criar conta_loja</a>
        </div>
    </form>
</div>
@endsection