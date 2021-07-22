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
    <link rel="icon" href="{{asset('img/icon.png')}}">
    <title>SPLTV</title>
</head>

<body>
    {{-- navigasi --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/icon.png')}}" alt="" id="logo">SPLTV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bold" aria-current="page" href="{{route('about')}}">About us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- isi 1 --}}
    <section id="banner">

        <img src="{{asset('img/wave1.png')}}" class="bottom-img">
    </section>

    <div id="isi">
        <div class="container">
            <div class="row">
                <h1>Tentang Aplikasi</h1>
                <div class="col-8">
                    <p>Aplikasi ini dibuat sebagaimana bertujuan untuk mempermudah para siswa dalam memahami materi
                        persamaan linear tiga variabel kelas X SMA/MA.
                        Aplikasi ini juga bertujuan untuk memenuhi persyartaan dalam memenuhi
                        menyelsaikan pendidikan strata-1 FKIP Universitas Lambung Mangkurat.
                    </p>
                </div>
                <div class="col-4">
                    <img id="icon2" src="{{asset('img/icon.png')}}" alt="">
                </div>
            </div>
            <div class="row">
                    <h1 id="h1-right">Tentang Pengembang</h1>
                <div class="col-4">
                    <img id="foto-pengembang" src="{{asset('img/IMG_24882.JPG')}}" alt="">
                </div>
                <div class="col-8">
                    <p>Bernama Ahmad Aspiannoor seorang mahasiswa yang ingin lulus tapi susah lulus,
                        aplikasi ini merupakan buatannya karena pengen lulus.
                        berkuliah di Universitas Lambung Mangkurat jurusan Pendidikan Ilmu Komputer.
                    </p>
                    <p id="qoute">-susah adalah ke enakan yang tertunda-</p>
                </div>
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
