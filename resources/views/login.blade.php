@extends('template.login')
@section('title')
Login
@endsection
@section('scriptatas')
<link href="{{asset('CustomCSS/CustomStyle.css')}}" rel="stylesheet">
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
    <form class="user" action="{{route('login')}}" method="POST">
    @csrf
    <div class="form-group">
        <input type="email" name="email" id="email" class="form-control " aria-describedby="email" placeholder="Masukan Email" value="{{old('email')}}">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" class="form-control " placeholder="Masukan Password">
    </div>
    <button class="btn" type="submit" id="button">Login</button>
    </form>
@endsection
