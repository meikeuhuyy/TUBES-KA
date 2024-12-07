<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
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

    <!-- body -->
    <section class="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-15">
                    <h3 class="text-center mb-3">Berbagai Divisi Kami</h3><br><br>
                    <!-- <a href="{{ route('projects.create') }}" class="btn btn-primary">Create</a><br><br> -->
                    <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <div class="image-box">
                                    <img src="{{ url('/image/'.$project->image) }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project->name }}</h5>
                                    <p class="card-text text-truncate">{{ $project->description }}</p>
                                    <p class="card-text text-harga">{{ $project->price }}</p>
                                    <!-- <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary" role="button" aria-disabled="true">Edit</a><br><br>
                                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form> -->
                                </div>
                            </div> 
                        </div>
                    @endforeach
                    </div>
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