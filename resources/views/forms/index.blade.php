<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    @include('sweetalert::alert')

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark warna5" style="background-color:#633971">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4 mt-1">
                        <img src="/image/logo1.png" style="height: 45px;" alt="">
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/">Home</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/projects">Job</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/forms">Forms</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item me-4">
                    <a class="nav-link" style="color:#F5E9CF;" href="/recruitments/create">Recruitments</a>
                    </li>
                </ul>
            </div>
    </nav>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div style="margin-left: 200px;" class="container text-left text-light">
            <h1 style="font-size: 47px; font-family: arial;"><strong>Make your best portfolio with Us</strong></h1>
        </div>
        <div class="container text-white">
            <img src="/image/hero.png" alt="" style="height: 650px;">
            <div class="col-md-8 offset-md-2">
            </div>
        </div>
    </div>

    <!-- baru -->
    <section class="about">
        <div class="container">
            <div class="mt-5">
                <div class=" mb-5">
                <form action="{{ route('forms.store') }}" method="POST">
                @csrf
                    <h2>Biodata</h2><br>
                    <div>
                        <!-- <label for="name">Name:</label> -->
                        <input type="text" id="name" name="name" class="form-control"  placeholder="insert your name here" required autofocus autocomplete="off">
                        <input type="text" id="email" name="email" class="form-control"  placeholder="insert your email here" required autofocus autocomplete="off">
                        <input type="number" id="phone" name="phone" class="form-control"  placeholder="insert your number phone here" required autofocus autocomplete="off">
                    </div>
                    <h2>Kritik dan Saran</h2><br>
                    <textarea rows="5" cols="33" name="description" id="description" class="form-control" placeholder=""></textarea>
                    {{-- Message --}}
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>Success !</strong> {{ session('success') }}
                        </div>
                    @endif
                    <button class="send"><a style="text-decoration: none; color: white;">Send</a></button>
                </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <div class="container-fluid py-5 warna5 text-light">
        <div class="container d-flex justify-content-between">
            <label>Follow Us:</label>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://www.instagram.com/izumiidesu/?hl=id"><i class="fab fa-instagram fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://twitter.com"><i class="fab fa-twitter fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="wa.me/6289524309404"><i class="fab fa-whatsapp fs-2"></i></a>
                </div>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>