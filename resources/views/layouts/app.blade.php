<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <!-- Scripts & Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
    body {
        font-family: 'Nunito', sans-serif;
        background-image: url('	https://graphics.gaiaonline.com/images/global_bg/bg2.jpg');

    }

    .header {
        
        background: url(https://graphics.gaiaonline.com/images/gaia_global/gaia_header/new_header/rs_header_bg_barton_tile_sprite.jpg?v=1) repeat-x top left;
        background-position: 0 -150px;
    }

    .header-content {
        background: url(https://graphics.gaiaonline.com/images/gaia_global/gaia_header/new_header/il_header_bg_barton_sprite.jpg?v=4) no-repeat bottom left;
        background-position: 0 -150px;
    }

    .avatar {
        position: relative;
        bottom:30px;
        height: 150px;
    }

    .main-content-wrapper {
        background: transparent url(https://www.toptal.com/designers/subtlepatterns/uploads/white_wall_hash.png) repeat;
    }

    .main-content {}

    .main-site-nav {
      background-color: white !important;
    }

    footer:hover {
      opacity: 1 !important;
    }

    </style>
</head>

<body class="antialiased">
    <div class="container-fluid header mb-3" >
        <div class="header-content row">
            <div class="row header-currency">
                <div class="col-8"></div>

                <div class="col-4" style="color:white;">
                    <div class="row">
                        <div class="col-sm-3">Dive</div>
                        <div class="col-sm-3">Coins</div>
                        <div class="col-sm-3">Cash</div>
                        <div class="col-sm-3">account</div>
                    </div>
                </div>

            </div>

            <div class="row header-main-content">
                <div class="col-sm-6">
                    <div class="row avi-area " style="height:124px;">
                        <div class="col-sm-3">
                            <h1 style="color:white;">[Site name] online</h1>
                        </div>
                        <div class="col-sm-4 col-md-9">
                            <img class="avatar img-fluid d-none d-md-block"
                                src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/c1/01/7fc8ff4b27701c1_flip.png?t=1670122533_6.00_11"
                                alt="avatar">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6"></div>
            </div>


            <!-- @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                    </div> -->
                    <nav class="navbar navbar-expand-lg bg-light main-site-nav">
                        <div class="container-fluid">
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">[Currency]</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Shops
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><hr class="dropdown-divider"></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link">Forums</a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link">Games</a>
                              </li>
                            </ul>
                            <form class="d-flex" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-primary" type="submit">Search</button>
                            </form>
                          </div>
                        </div>
                      </nav>
        </div>
    </div>
    
    @yield('content')

  <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted opacity-75 mt-3">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>[Site name]
          </h6>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt repellendus suscipit veritatis, consectetur odio dolor. Dolorum eligendi, corrupti, nihil ea itaque quisquam fuga temporibus nam maxime debitis soluta, quibusdam repellendus?
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Cat 1
          </h6>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Cat 2
          </h6>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Option</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    [Site name]
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>

</html>