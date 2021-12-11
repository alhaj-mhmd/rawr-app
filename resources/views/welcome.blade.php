<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>RAWR</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('welcome/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('welcome/css/bg.css') }}" rel="stylesheet" />
</head>

<body id="game-wrapper"> {{-- id="game-wrapper" <!-- where our canvas goes --> --}}
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    @if (Route::has('login'))
                         
                            @auth
                                <li class="nav-item"> <a href="{{ url('/home') }}"
                                        class="nav-link">Home</a></li>
                            @else
                                <li class="nav-item"> <a href="{{ route('login') }}"
                                        class="nav-link">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item"> <a href="{{ route('register') }}"
                                            class="nav-link">Register</a>
                                    </li>
                                @endif
                            @endauth
                         
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content-->
    <section>
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-6 text-light">

                    <p class="mt-5">Enhancing your online presence with
                    <h1 class=""> Digitalised data-centric solutions</h1>
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- where our music comes from -->
    <!-- DKC2 - Bramble Blast  -->
    <iframe width="560" height="315" src="https://www.youtube.com/embed/73n7HTcmb5g?autoplay=1" frameborder="0"
        allowfullscreen style="display:none"></iframe>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('welcome/js/scripts.js') }}"></script>
    <script src="{{ asset('welcome/js/bg.js') }}"></script>
</body>

</html>
