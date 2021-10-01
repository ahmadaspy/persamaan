@extends('template.template')
@section('script')
<style>
    .card-header .nav-link{
        color:#4FB286 !important;
    }
</style>
@endsection
@section('content')
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link font-weight-bold
                @if (Request::is('videopanduan'))
                    active
                @endif" aria-current="true" href="{{route('videopanduan')}}">Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-weight-bold
                @if (Request::is('deskripsipanduan'))
                active
                @endif" href="{{route('deskripsipanduan')}}">Deskripsi</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        @yield('konten')
    </div>
</div>
@endsection
