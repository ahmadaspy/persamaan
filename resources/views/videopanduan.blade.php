@extends('template.panduan')
@section('title')
Panduan
@endsection
@section('script')
<style>
    video {
        width: 80%;
        height: auto;
    }
    #petunjuk{
        font-size: 10px
    }
    .card-header .nav-link{
        color:#4FB286 !important;
    }
</style>
<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
@endsection
@section('konten')
<p>Tekan tombol <i class="fas fa-play-circle"></i> untuk memulai video</p>
<p>Tekan tombol <i class="fas fa-expand"></i> untuk memperbesar video</p>
<video width="400" controls>
    <source src="assets/Cheater Cod MW.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
{{-- <iframe>
    <video width="400" controls>
        <source src="{{asset('assets/Cheater Cod MW.mp4')}}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</iframe> --}}
{{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/U3t44o1_QI8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}

{{-- <iframe src="/assets/Cheater Cod MW.mp4"></iframe> --}}
<p id="petunjuk"><em>Apabila kalian mengalami masalah koneksi lelet kalian bisa klik <a href="{{route('deskripsipanduan')}}">deskripsi</a></em></p>
    {{-- <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7mFR_0ykir8"></iframe>
    </div> --}}

    {{-- <video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="640"
    height="264"
    poster="MY_VIDEO_POSTER.jpg"
    data-setup="{}"
  >
    <source src="{{asset('assets/Cheater Cod MW.mp4')}}" type="video/mp4" />
    <source src="MY_VIDEO.webm" type="video/webm" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video> --}}
@endsection
@section('scriptbawah')
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
@endsection
