@extends('layout')
@section('titulo', 'Entrar')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/entrar.css')}}">
@endsection

@section('Conta')
Conta
@endsection

@section('conteudo')

<div class="entrar-container">
    <h2>Entrar</h2>
    <form action="{{route('SiteController.login')}}" method="POST" enctype="multipart/form-data">
        @csrf 
        <div class="input-container">
            <label for="usuario">Usuário</label>
            <input type="tel" id="usuario" name="usuario" placeholder="Digite seu WhatSApp  ex: 258849155311" required autofocus>
        </div>
        <div class="input-container">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit">Entrar</button>
    </form>

    <div class="links-criar-conta">
        <a href="{{route('UserController.criarContaCliente')}}">Criar conta_cliente</a>
        <a href="{{route('LojaController.criarContaLoja')}}">Criar conta_loja</a>
    </div>
</div>

@endsection