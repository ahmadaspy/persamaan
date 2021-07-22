@extends('template.login')
@section('scriptatas')
<link href="{{asset('CustomCSS/CustomStyle.css')}}" rel="stylesheet">
@endsection
@section('title')
Register
@endsection
@section('alert')
    @if (session()->has('gagal'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session()->get('gagal')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
@endsection
@section('form')
    <form action="{{route('postregister')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control form-control-user" placeholder="Nama Kamu" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control form-control-user" placeholder="Email Kamu" required>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" name="password" class="form-control form-control-user" placeholder="Password" id="password1" required>
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" placeholder="Konfirmasi Password" id="password2" required>
            </div>
        </div>
        <div class="form-group">
            <input type="number" name="code_referral" class="form-control form-control-user" placeholder="Kode dari guru kamu" required>
        </div>
        <button class="btn" id="button" type="submit" onclick="return Validate()">Register</button>
    </form>
@endsection
@section('costumescript')
    <script>
        function Validate(){
            var passwordd = document.getElementById("password1").value;
            var confirmPassword = document.getElementById("password2").value;
            // console.log(passwordd);
            // console.log(confirmPassword);
            if (passwordd != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>
@endsection
