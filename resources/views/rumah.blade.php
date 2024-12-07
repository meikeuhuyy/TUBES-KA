<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindfulMedia</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/css/master.css">
    
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
            <div class="dropdown">
                <button style="font-size:14px;" class="btn btn-secondary dropdown-toggle warna3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Login
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/recruitments">Admin</a></li>
            </ul>
        </div>
        </div>
    </nav>


    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div style="margin-left: 200px;" class="container text-left text-light">
            <h1 style="font-size: 47px; font-family: arial;"><strong>Make your best portfolio with Us</strong></h1>
            <button type="button" class="btn btn-primary" style="background-color: #633971;"><a class="link" style="text-decoration: none;" href="/recruitments/create">Connect</a></button>
        </div>
        <div class="container text-white">
            <img src="/image/hero.png" alt="" style="height: 650px;">
            <div class="col-md-8 offset-md-2">
            </div>
        </div>
    </div>
    
     <!-- bio -->
     <div class="text-center py-5">
            <h3 class="h3">About Us</h3>

            <section class="about">
                <div class="row">
                    {{-- <div class="images mt-3 mb-3">     
                        <img src="/image/blue.jfif" alt="">
                    </div> --}}
                    <div class="content">
                        <h3 style="font-size: 30px; color: #633971;">Description<br></h3>
                        <p align="justify" style="font-size: 20px;">
                           <strong> Deskripsi Perusahaan :</strong><br> 
                           Selamat datang di platform MindfulMedia yang inovatif dan terpercaya, di mana bakat-bakat kreatif dan profesional berkumpul untuk menghasilakan project yang luar biasa. Di sini, kami menyediakan lapangan kerja yang inspiratif dan memberdayakan, di mana para freelancer dapat mengejar passion mereka dalam berbagai bidang seperti desain grafis, animator, video editor, copywriting, dan banyak lagi. Kami berkomitmen untuk memberikan kesempatan berharga bagi klien dan freelancer untuk terhubung, berkolaborasi, dan meraih kesuksesan bersama. <br>
                        </p>
                        <h3 style="font-size: 30px; color: #633971;">Our Service</h3>
                        <p align="justify" style="font-size: 20px;">
                            <strong>Layanan yang kami tawarkan :</strong><br>
                            1. Editing Video: Kami dapat melakukan editing video anime yang meliputi pemotongan, penggabungan, transisi, efek khusus, penyesuaian warna, dan pengeditan 
                            suara.<br>
                            2. Presentasi: Kami menyediakan desain presentasi kreatif dengan elemen-elemen anime yang menarik, termasuk penggunaan ilustrasi, karakter anime, dan efek 
                            animasi.<br>
                            3. Editing Foto: Kami mengolah foto dengan tema anime, termasuk retouching, penyesuaian warna, penambahan elemen anime, dan manipulasi gambar.<br>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3 class="h3 py-3">Editing Video Example</h3>
                <div class="video">
                    <video id="video" controls loop autoplay src="video/uwu.mp4" style="width: 70%;"></video>
                </div>
        </div>
</div>
</div>

     <!-- bio -->
     <div class="text-center py-5">
        <h3 style="font-size: 30px; color: #633971;" class="h3">MindfullMedia</h3>

        <section class="about">
            <div class="row">
                <div class="content">
                    <h3 style="font-size: 30px; color: #633971;">Tim Kami<br></h3>
                    <p align="justify" style="font-size: 20px;">
                    Kami memiliki tim yang terdiri dari editor video, desainer presentasi, ilustrator dan retoucher foto yang berbakat dan berdedikasi dalam menciptakan karya-karya 
                    berkualitas tinggi. Setiap anggota tim kami memiliki pengetahuan yang mendalam tentang tool - tool, gaya visual, dan pengalaman dalam industri ini. Kami berkomitmen untuk memberikan hasil yang memenuhi harapan Anda.
                    </p>
                    <h3 style="font-size: 30px; color: #633971;">some words that describe MindfullMedia</h3>
                    <p align="justify" style="font-size: 20px;">
                        Kreativitas Tanpa Batas: Kami percaya bahwa dalam dunia video, hanya imajinasi yang dapat membatasi apa yang dapat kita capai. Dalam setiap proyek, kami berusaha 
                        untuk mengeksplorasi batas-batas kreativitas dan memberikan hasil yang menginspirasi.<br><br>
                        Berkualitas dan Profesionalisme: Setiap file proyek video yang kami tawarkan dan setiap proyek editan yang kami selesaikan mengutamakan kualitas tinggi dan profesionalisme. 
                        Kami menghargai setiap detail dan berusaha untuk memberikan hasil yang memenuhi harapan Anda.
                    </p>
                </div>
                <div class="images mt-3 mb-3">
                    <img src="/image/logo1.png" alt="">
                </div>
            </div>
        </section>
    </div>

    <!-- highlighted kategori --> 
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3 class="h3">Job We Offer</h3><br>
            <p align="justify" style="font-size: 19px; color: #633971;">Sebagai seorang web freelancer yang berfokus pada multimedia, Anda akan dituntut untuk menguasai sejumlah skill yang berhubungan dengan elemen-elemen multimedia seperti gambar, audio, video, dan animasi. Berikut adalah beberapa kata-kata deskripsi untuk skill yang diperlukan dalam web freelance multimedia:<br><br>
            <strong>1. Desain Grafis (Graphic Design):</strong> <br>Kemampuan untuk menciptakan elemen grafis yang menarik dan estetis, termasuk logo, banner, ilustrasi, dan grafik lainnya yang akan meningkatkan tampilan visual situs web.<br><br>
            <strong>2. Pengeditan Foto dan Gambar (Photo and Image Editing):</strong> <br>Mampu mengedit dan memanipulasi foto dan gambar agar tampil lebih profesional dan sesuai dengan kebutuhan proyek.<br><br>
            <strong>3. Pengembangan Audio (Audio Development):</strong> <br>Kemampuan untuk mengintegrasikan elemen audio seperti musik, suara latar, atau efek suara agar situs web lebih menarik dan interaktif.<br><br>
            <strong>4. Pengeditan Video (Video Editing):</strong> <br>Menguasai teknik pengeditan video untuk menciptakan konten video yang menarik dan relevan dengan konten situs web.<br><br>
            <strong>5. Animasi (Animation):</strong> <br> Mampu menciptakan animasi grafis atau animasi dalam bentuk video untuk menambahkan elemen dinamis dan interaktif pada situs web.<br><br>

            </p>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-keahlian keahlian-satu d-flex justify-content-center align-items-center">
                        {{-- <h4 class="text-white"><a class="no-decoration" href="#">coding website</a></h4> --}}
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-keahlian keahlian-dua d-flex justify-content-center align-items-center">
                        {{-- <h4 class="text-white"><a class="no-decoration" href="#">editing video</a></h4> --}}
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-keahlian keahlian-tiga d-flex justify-content-center align-items-center">
                        {{-- <h4 class="text-white"><a class="no-decoration" href="#">Playing Games</a></h4> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3 class="h3 py-3">My After Effect Project</h3>
                <div class="video">
                    <video id="video" controls loop src="video/elaina.mp4" style="width: 70%;"></video>
                </div>
        </div>
    </div>
</div>
    
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
    <script>
        window.onload = function () {
        var element = document.getElementById('video');
        element.muted = "muted";}
    </script>
</body>
</html>