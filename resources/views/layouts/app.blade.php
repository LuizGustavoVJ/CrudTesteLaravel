<!doctype html>
<html lang="pt-br">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Gerenciador do Trabalho</title>
  </head>

  <body>
      <nav class="navbar navbar-expanded-lg  navbar-ligth bg-ligth">
          <a href="/" class=" navbar-brand ">Trabalho Laravel </a>
          <button class="navbar-togller"><span class="navbar-togller-icon"></span></button>
          <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                  <li class="nav-item active">
                      <a href="{{route('testes.index')}}" class="nav-link">Testes</a>
                      <a href="{{route('questoes.index')}}" class="nav-link">Questões</a>
                  </li>
              </ul>

          </div>
    </nav>

    <div class="container">
        @yield('content');
    </div>

  </body>
</html>
