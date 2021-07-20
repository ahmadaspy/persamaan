<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="icon" href="{{ asset('assets/logo/logo.png') }}">
        <!-- Custom fonts for this template-->
        <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
        <style>
            .fill img {
                object-fit: cover;
                width: 50px;
                height: 500px;
            }
            #icon{
                height: 30px;
                width: 30px;
            }
            .fa-vials{
                color:#4FB286;
            }
            .sidebar-brand-text{
                color: #4FB286;
            }
        </style>
        @yield('scriptatas')
    </head>
    <body>
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <a class="navbar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                  {{-- <img id="icon" src="fa" alt=""> --}}
                  <i class="fas fa-vials"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SPLTV</div>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}" id="Register">
                        <span>Register</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('loginview')}}" id="Login">
                        <span>Login</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container">
            @yield('alert')
            <div class="row justify-content-center">

                <div class="col-xl-10 col-lg-12 col-md-9">

                  <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                      <!-- Nested Row within Card Body -->
                      <div class="row">
                        <div class="col-lg-6 d-none d-lg-block" id="resize">
                          <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
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
                              <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="p-5">
                            <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">@yield('lognregisjudul')</h1>
                            </div>
                            @yield('form')
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

              </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('assets/js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('assets/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('assets/js/demo/chart-pie-demo.js')}}"></script>
        @yield('costumescript')
    </body>
</html>



