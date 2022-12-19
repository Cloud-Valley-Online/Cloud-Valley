<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>@yield('title')</title> --}}

    {!! seo() !!}

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu {
                display: none;
            }

            .navbar .nav-item:hover .nav-link {}

            .navbar .nav-item:hover .dropdown-menu {
                display: block;
            }

            .navbar .nav-item .dropdown-menu {
                margin-top: 0;
            }
        }
    </style>


    <!-- Scripts & Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<body class="antialiased">
    <div class="container-fluid header mb-3">
        <!-- Header -->
        <div class="header-content row">
            <div class="row header-currency justify-content-end">
                @if (Auth::check())
                    <div class="col-4 white align-self-end">
                        <div class="row"">
                            <div class="col-sm-3 rounded mx-1 "
                                style="border:1px solid #8c8c8c3a; background:#3a3a3a; height:30px;"><i
                                    class="fa-solid fa-coins"></i> 500</div>
                            <div class="col-sm-3 rounded mx-1"
                                style="border:1px solid #8c8c8c3a; background:#3a3a3a; height:30px;"><i
                                    class="fa-solid fa-cloud"></i></i> 500</div>

                            <div class="col-sm-3 rounded"style="border:1px solid #8c8c8c3a; background:#3a3a3a;">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Hi, {{ userIdToUsername(Auth::id()) }}
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a></li>
                                            <li><a class="dropdown-item" href="#">settings</a></li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row header-main-content">
                <div class="col-sm-6">
                    <div class="row avi-area">
                        <div class="col-sm-3">
                            <h1 class="white">{{ config('app.name') }}</h1>
                        </div>
                        @if (Auth::check())
                            <div class="col-sm-4 col-md-9">
                                <!-- Avatar -->
                                <img class="avatar img-fluid d-none d-md-block"
                                    src="https://a1cdn.gaiaonline.com/dress-up/avatar/ava/c1/01/7fc8ff4b27701c1_flip.png?t=1670122533_6.00_11"
                                    alt="avatar">
                                <!-- Avatar -->
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6"></div>
            </div>

            <nav class="navbar navbar-expand-lg bg-light main-site-nav">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    MyStuff
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="dropdown-item" href={{ url('/home') }}>Home</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{ url('/currency') }}><i class="fa-solid fa-cloud"></i>
                                    Clouds</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Shops
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Forums
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href={{ url('/forum') }}>Forum</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link">Games</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" class="form-control" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <button class="btn btn-sm btn-outline-primary" type="submit">Search</button>
                            </div>

                        </form>
                    </div>
                </div>
            </nav>
            <!-- Header -->
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted opacity-75 mt-3" id="footer">
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
                    <i class="fab fa-instagram"></i>
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
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt repellendus suscipit
                            veritatis, consectetur odio dolor. Dolorum eligendi, corrupti, nihil ea itaque quisquam fuga
                            temporibus nam maxime debitis soluta, quibusdam repellendus?
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
                        <p><i class="fas fa-phone me-3"></i> + 555-555-5555</p>
                        <p><i class="fas fa-print me-3"></i> + 555-555-5555</p>
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
            {{ config('app.name') }}
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>
