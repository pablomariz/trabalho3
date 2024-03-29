<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Cursos</title>
</head>

<body>
  <nav class="red">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Cursos</a>
      <ul class="right">
        <li>
          <a href="{{route('admin.cursos.index')}}">Cursos</a>
        </li>
    </div>
  </nav>

    <div class="container">
        @yield('conteudo-principal')
    </div>

    <div>
        @yield('secundário')
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>

    </script>
</body>

</html>
