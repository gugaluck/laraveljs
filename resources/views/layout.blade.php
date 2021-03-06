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
  <style>
    .modal {
      width: 500px;
      height: 500px;
      background-color: darkgray;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display:none;
    }

    .fechar {
      width: 30px;
      height: 30px;
      background-color: darkgray;
      border-radius: 50%;
      float: right;
      cursor: pointer;
    }

  </style>
  <body>

    <!-- verificar autenticação -->
    <?php 
    if (true) {
      echo '<a href="/time">Times</a>
      <a href="/atleta">Atletas</a>
      <a href="/campeonato">Campeonatos</a>
      <a href="/timecampeonato">Time x Campeonato</a>';
  
      echo '<div class="container">'; ?>
               @yield('conteudo')
      <?php 
      echo '</div>';
    } else {
      echo 'oi';
    }
    ?>
  


  </body>

</html>
