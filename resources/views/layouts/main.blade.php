<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Test de Placetopay</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('MainTheme/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('MainTheme/css/scrolling-nav.css" rel="stylesheet') }}">

</head>

<body id="page-top">

  <!-- Navigation -->


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Test de Placetopay</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <!--
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>-->
      </div>
    </div>
  </nav>
<br>
 <br><br><br>

     @yield('content')

 







  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Test PlacetoPay</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('MainTheme/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('MainTheme/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('MainTheme/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="{{ asset('MainTheme/js/scrolling-nav.js') }}"></script>

</body>

</html>
