@extends('layout')
@section('titulo', 'Criar Conta-Loja')
    
@section('estilo')
<link rel="stylesheet" href="{{asset('css/criarContaLoja.css')}}">
@endsection

@section('Conta')
Conta
@endsection

@section('conteudo')

<div class="criar-conta-loja-container">
    <h2>Criar Conta Loja</h2>
    <form action="{{route('LojaController.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-section">
            <h3>Dados da Loja</h3>
            <div class="input-container">
                <label for="imagem">Imagem</label>
                <input type="file" name="imagemLoja" id="imagemLoja" required autofocus>
            </div>
            <div class="input-container">
                <label for="nomeLoja">Nome da Loja</label>
                <input type="text" name="nomeLoja" id="nomeLoja" placeholder="Digite o nome da loja" required >
            </div>
            <div class="input-container">
                <label for="enderecoLoja">Endereço</label>
                <input type="text" name="enderecoLoja" id="enderecoLoja" placeholder="Digite o endereço da loja" required>
            </div>
            <div class="input-container">
                <label for="emailLoja">E-mail</label>
                <input type="email" name="emailLoja" id="emailLoja" placeholder="Digite o e-mail da loja" required>
            </div>
            <div class="input-container">
                <label for="telefoneLoja">Número de Telefone</label>
                <input type="tel" name="telefoneLoja" id="telefoneLoja" placeholder="(ex: 258849155311)" required>
            </div>
            <div class="input-container">
                <label for="whatsappLoja">Número WhatsApp</label>
                <input type="tel" name="whatsappLoja" id="whatsappLoja" placeholder="(ex: 258849155311)" required>
            </div>
            <div class="input-container">
                <label for="senhaLoja">Senha</label>
                <input type="password" name="senhaLoja" id="senhaLoja" placeholder="Digite a senha da loja" required>
            </div>
            <div class="input-container">
                <label for="confirmarSenhaLoja">Confirmação de Senha</label>
                <input type="password" name="confirmarSenhaLoja" id="confirmarSenhaLoja" placeholder="Confirme a senha da loja">
            </div>
        </div>

        <div class="form-section">
            <h3>Dados Adicionais</h3>
            <div class="horario-funcionamento">
                <p>Horário de Funcionamento:</p>
                <div class="input-container">
                    <label for="segunda">Segunda-feira</label>
                    <input type="time" name="segundaAbertura" id="segundaAbertura" required>
                    <input type="time" name="segundaFechamento" id="segundaFechamento" required>
                </div>
                <div class="input-container">
                    <label for="terca">Terça-feira</label>
                    <input type="time" name="tercaAbertura" id="tercaAbertura" required>
                    <input type="time" name="tercaFechamento"  id="tercaFechamento" required>
                </div>
                <div class="input-container">
                    <label for="segunda">Quarta-feira</label>
                    <input type="time" name="quartaAbertura" id="quartaAbertura" required>
                    <input type="time" name="quartaFechamento" id="quartaFechamento" required>
                </div>
                <div class="input-container">
                    <label for="terca">Quinta-feira</label>
                    <input type="time" name="quintaAbertura" id="quintaAbertura" required>
                    <input type="time" name="quintaFechamento" id="quintaFechamento" required>
                </div>
                <div class="input-container">
                    <label for="segunda">Sexta-feira</label>
                    <input type="time" name="sextaAbertura" id="sextaAbertura" required>
                    <input type="time" name="sextaFechamento" id="sextaFechamento" required>
                </div>
                <div class="input-container">
                    <label for="terca">Sabado</label>
                    <input type="time" name="sabadoAbertura" id="sabadoAbertura" required>
                    <input type="time" name="sabadoFechamento" id="sabadoFechamento" required>
                </div>
                <div class="input-container">
                    <label for="segunda">Domingo</label>
                    <input type="time" name="domingoAbertura"  id="domingoAbertura" required>
                    <input type="time" name="domingoFechamento" id="domingoFechamento" required>
                </div>   
            </div>
            <div class="input-container">
                <label>Disponível para Entrega</label>
                <select name="disponivelEntregaLoja" id="disponivelEntregaLoja" required>
                    <option value="nao">Não</option>
                    <option value="Apenas cidade de Maputo">Apenas cidade de Maputo</option>
                    <option value="Apenas Matola">Apenas Matola</option>
                    <option value="Apenas Maputo Provincia">Apenas Maputo Provincia</option>
                    <option value="Disponivel para qualquer Lugar do Pais">Qualquer Lugar do pais</option>
                </select>
            </div>
            <div class="input-container">
                <label>Vendas da Loja</label>
                <select name="produtosVendaLoja" id="produtosVendaLoja" required>
                    <option value="Todos os acessórios (Contacte para mais informações).">Todos os acessórios, Contacte para mais informações</option>
                    <option value="Celulares">Celulares</option>
                    <option value="Aparelhagem-Som.">Aparelhagem-Som</option>
                    <option value="Boutique.">Boutique</option>
                    <option value="Loja Unisexo.">Loja Unisexo</option>
                    <option value="Roupas para Homem.">Roupas para Homem</option>
                    <option value="Roupas para Mulher.">Roupas para Mulher</option>
                    <option value="Sapatilhas.">Sapatilhas</option>
                    <option value="Computadores.">Computadores</option>
                    <option value="Video-Jogos.">Jogos</option>
                    <option value="Carros.">Carros</option>
                    <option value= "Todos Eletrônicos.">Todos Eletrônicos</option>
                    <option value="Revendedor/a.">Revendedor/a</option>
                </select>
            </div>
        
            
          
            <div class="input-container">
            <label for="descricaoLoja">Descrição</label>
      <textarea id="descricaoLoja" name="descricaoLoja" rows="4" required></textarea>
            </div>
        </div>
        <button type="submit">Criar Conta</button>
        <div class="links-criar-conta">
            <a href="{{route('SiteController.entrar')}}">Entrar</a>
            <a href="{{route('UserController.criarContaCliente')}}">Criar conta_cliente</a>
        </div>
    </form>
</div>
@endsection