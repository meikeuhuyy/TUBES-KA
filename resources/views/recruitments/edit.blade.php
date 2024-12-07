<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/master.css">
</head>
<body>
    @include('sweetalert::alert')
    @extends('layouts.app')

    @section('content')

    <!-- navbar
    <nav class="navbar navbar-expand-lg navbar-dark warna5">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-4 mt-1">
                        <img src="/image/logoblue.png" style="width: 30px;" alt="">
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/projects">Job</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/forms">Forms</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/recruitments/create">Recruitments</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle warna3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown button
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/recruitments">Admin</a></li>
            </ul>
        </div>
    </nav> -->

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row" action="{{ route('recruitments.update', $recruitment) }}">
            @csrf
            <!-- @method('PUT') -->
                    <div class="col-lg-5 mb-4">
                        <img src="{{ url('/image/'.$recruitment->image) }}"  style="width: 620px;" alt="">
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <h1>Name : {{ old('name', $recruitment->name) }}</h1><hr>
                        <p class="fs-5">
                            <strong>Email :</strong> {{ old('email', $recruitment->email) }}
                        </p><hr>
                        <p class="fs-5"><strong>Address :</strong> {{ old('address', $recruitment->address) }}</p><hr>
                        <p align="justify" class="fs-5">
                            {{ old('description', $recruitment->description) }}
                        </p>
                    </div>
                    <div class="d-flex justify-content-between">
                    <form action="{{ route('recruitments.destroy', $recruitment) }}" method="POST">
                    <a href="{{ route('recruitments.index', $recruitment) }}" class="btn btn-primary" role="button" aria-disabled="true">Home</a><br><br>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>

    @endsection
    <!-- <div class="container-fluid py-5 warna5 text-light">
        <div class="container d-flex justify-content-between">
            <label>Follow us:</label>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://www.instagram.com/izumiidesu/?hl=id"><i class="fab fa-instagram fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://www.instagram.com/izumiidesu/?hl=id"><i class="fab fa-twitter fs-2"></i></a>
                </div>
                <div class="col-sm-1 d-flex justify-content-center mb-2">
                    <a class="link" href="https://www.instagram.com/izumiidesu/?hl=id"><i class="fab fa-whatsapp fs-2"></i></a>
                </div>
            <label>&copy;Izumiidesu</label>
        </div>
    </div> -->

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>