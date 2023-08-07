<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @yield('estilo')
</head>
<body>
    <header>
       
        <h1 class="logo">nhonga</h1>
        <nav>
            <ul>
                <li><a href="@yield('link-lojas')" >Lojas</a></li>
             
                <li><a href="#">Eletrônicos</a>
                    <ul>
                        <li><a href="@yield('link-celulares')">Celulares</a></li>
                        <li><a href="@yield('link-computadores')">Computadores</a></li>
                        <li><a href="@yield('link-video-jogos')">Video-Jogos</a> </li>
                        <li><a href="@yield('link-som')">Som</a> </li>
                        <li><a href="@yield('link-maisElotronicos')">Mais-Eletrônicos</a> </li>    
                    </ul>
                </li> 
               
                <li><a href="#">Veiculos</a>
                    <ul>
                        <li><a href="#">Toyota</a></li>
                        <li><a href="#">Mazda</a></li>
                        <li><a href="#">Bmw</a></li>
                        <li><a href="#">Lexus</a></li>
                        <li><a href="#">VW</a></li>
                        <li><a href="#">Nissan</a></li>
                        <li><a href="#">Outros</a></li>
                        <!-- Adicione mais marcas de carros aqui -->
                    </ul>
                </li>
                <li><a href="#">Boutique</a>
                    <ul>
                        <li><a href="#">Roupa-Homens</a></li>
                        <li><a href="#">Roupa-Mulheres</a></li>
                        <li><a href="#">Sapatilhas</a></li>
                        <li><a href="#">Perfumaria</a></li>
                      
                        <!-- Adicione mais marcas de roupas aqui -->
                    </ul>
                </li>
                <li><a href="#">Sobre Nos</a></li>
            </ul>
        </nav>
        <div class="user-links">
       @yield('Conta')
        </div>
    </header>

    <main>
        <!-- Conteúdo da seção principal aqui -->
     @yield('conteudo')
     @stack('scripts')
    </main>

    <footer>
        &copy; 2023 Seu Site | Todos os direitos reservados.
    </footer>
</body>
</html>