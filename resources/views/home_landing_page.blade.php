
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Bangladesh Institute of Health Sciences Hospital</title>
        <meta name="description" content="Union is a beautiful Bootstrap 4 template for multipurpose landing pages." />

        <!--Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i" rel="stylesheet">

        <!--vendors styles-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Bootstrap CSS / Color Scheme -->
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/default.css') }}" id="theme-color">
    </head>
    <body>

        <!--navigation-->
        <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top sticky-navigation">
            {{-- <a class="navbar-brand mx-auto" href="index.html">
                Union
            </a> --}}

            <div class="navbar-brand mx-auto">
                <img style="width: 170px" src="{{ asset('assets/frontend/logo/download.png') }}" alt="">
            </div>


            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Pre-Visit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">Registration</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                    </li> --}}
                </ul>
            </div>
        </nav>

        <!--hero header-->
        <section class="pt-7 pt-md-8" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto my-auto text-center">
                        <h1> Bangladesh Institute of Health Sciences Hospital </h1>
                        <p class="lead mt-4 mb-5">
                            Welcome to Bangladesh Institute of Health Sciences General Hospital
                        </p>
                        {{-- <p><img class="img-fluid" src="img/mockup.png" alt="Mockup" /></p> --}}
                    </div>
                </div>
            </div>
        </section>

        <!--footer / contact-->
        <footer class="bg-light fixed-bottom" style="height:80px">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-muted text-center" style="margin-top: 25px">
                        &copy; 2021 BIHS - All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.5.0/feather.min.js"></script>
        <script src="{{ asset('assets/frontend/js/scripts.js') }}"></script>
    </body>
</html>
