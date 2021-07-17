@extends('template.panduan')
@section('script')
<style>
    video {
        width: 80%;
        height: auto;
    }
</style>
<link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
@endsection
@section('konten')
<video width="400" controls>
    <source src="{{asset('assets/Cheater Cod MW.mp4')}}" type="video/mp4">
    Your browser does not support HTML5 video.
</video>
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
