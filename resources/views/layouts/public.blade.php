<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mexspacio Inmobiliarios</title>
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
  <link href="{{ asset('css/font_awesome.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-app static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo_white.png') }}" class="logo" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Propiedades</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nosotros</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield("content")
  <footer class="footer p-4">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <img src="{{ asset('images/logo.png') }}" class="logo-footer" alt="">
          <p class="name">
            <strong>Mexspacio Inmobiliaria</strong>
          </p>
          <p>Platanares de Ziracuaretiro 147-139, Cinco de Mayo, 58230 Morelia, Mich.</p>
          <p>443 644 4891</p>
        </div>
        <div class="col-sm-3">
          <h4 class="">Propiedades</h4>
          <br>
          <ul>
            <li>
              <a href="">
                <i class="fas fa-chevron-right"></i>Casa
              </a>
            </li>
            <li>
              <a href="">
                <i class="fas fa-chevron-right"></i>Departamentos
              </a>
            </li>
            <li>
              <a href="">
                <i class="fas fa-chevron-right"></i>Terrenos
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>