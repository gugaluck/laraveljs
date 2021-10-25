<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">  
    
    <title>@yield('titulo')</title>
  </head>
  <body>

    <!-- verificar autenticação -->

  

    <a href="/api/time/formulario">Cadastro - Time</a>
    <a href="/time">Times</a>
    <a href="/api/atleta/formulario">Cadastro - Atleta</a>
    <a href="/api/atleta">Atletas</a>
    <a href="/api/campeonato/formulario">Cadastro - Campeonato</a>
    <a href="/api/campeonato">Campeonatos</a>
    <a href="/api/timecampeonato/formulario">Cadastro - Time x Campeonato</a>
    <a href="/api/timecampeonato">Time x Campeonato</a>

    <div class="container">
        @yield('conteudo')
    </div>

    <!-- else -->

    <!-- tela de login -->

  </body>
</html>
