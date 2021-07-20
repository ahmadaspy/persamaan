<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('CustomCSS/CustomStyle.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <title>SPLTV</title>
</head>

<body>
    {{-- navigasi --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SPLTV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="#">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- isi 1 --}}
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">Sistem Persamaan Linear Tiga Variabel</p>
                    <p>
                        Belajar matematika bisa menyenangkan kapanpun dan dimanapun
                    </p>
                </div>
                <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active fill">
                                <img src="{{ asset('img/1.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item fill">
                                <img src="{{ asset('img/2.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item fill">
                                <img src="{{ asset('img/3.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('img/wave1.png')}}" class="bottom-img">
    </section>

    {{-- isi 2 --}}

    <div class="container">
        <div id="isi2" class="row text-center">
            <div class="col">
                <p>Daftarkan diri kalian siswa !</p>

            </div>
            <div class="col">
                <p>Kalian sudah mempunyai akun ? Login disini</p>

            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <a href="{{route('register')}}" class="btn" id="button">Register</a>
            </div>
            <div class="col">
                <a href="{{route('loginview')}}" class="btn" id="button">Login</a>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <section id="footer">
        <img src="{{asset('img/wave2.png')}}" class="footer-img">
        <div id="find-me"class="row text-center">
            <p>Find me on social media</p>
        </div>
        <div id="social-media" class="text-center">
            <a href=""><img src="{{asset('img/instagram.png')}}" alt="instagram"></a>
            <a href=""><img src="{{asset('img/twitter.png')}}" alt="twitter"></a>
            <a href=""><img src="{{asset('img/Youtube.png')}}" alt="youtube"></a>
        </div>
        <div id="copyright" class="row text-center">
            <span>Copyright &copy; Ahmad Aspiannoor</span>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>
