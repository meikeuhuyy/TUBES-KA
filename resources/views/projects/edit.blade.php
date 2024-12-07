<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/master.css">
</head>

<style>
    form div{
        margin-bottom: 10px;
    }
</style>

<body>
    <!-- navbar -->
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
                        <img src="image/logoblue.png" style="width: 30px;" alt="">
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="/projects">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <h2>Edit Product</h2>

        <div class="col-12 col-md-6 mb-5">
            <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
                <div>
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Insert Product Name" value="{{ old('name', $project->name) }}" required autofocus>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Insert Product Price" value="{{ old('price', $project->price) }}" required>
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" value="{{ old('image', $project->image) }}" required>
                </div>
                <div>
                    <label for="description">Detail:</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Insert Product Description" value="{{ old('description', $project->description) }}" required>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>