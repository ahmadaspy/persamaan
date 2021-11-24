@extends('template.template')
@section('script')
<link href="{{asset('CustomCSS/CustomStyleMateri.css')}}" rel="stylesheet">
@endsection
@section('title')
Koordinat Geogebra
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h6 class="font-weight-bold">Gunakan koordinat \(x\) dan \(y\) di bawah untuk membantu kalian mencari titik potong</h6>
    </div>
    <div class="card-body">
        <div class="embed-responsive embed-responsive-1by1">
            <iframe class="embed-responsive-item" src="https://www.geogebra.org/classic/bsugmt7h" class="hape" id="geogebra" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0">
            </iframe>
        </div>
    </div>
</div>
@endsection
