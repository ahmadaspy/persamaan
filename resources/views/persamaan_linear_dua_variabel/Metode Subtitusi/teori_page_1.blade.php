@extends('template.template')
@section('script')
<link href="{{asset('CustomCSS/CustomStyleMateri.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Metode Subtiusi</h6>
    </div>
    <div class="card-body">
        Dalam Menyelesaikan asalah persamaan linear kita dapat menggunakan metode subtitus dengan menyutibtusikan persamaan pertama ke persamaan kedua
        sehingga hasil akhir dapat mengetahui variabel yang disubtitusikan
        <br>
        <br>
        <div class="card">
            <div class="card-body">
                test
            </div>
        </div>
    </div>
</div>
@endsection
@section('halaman')
@include('persamaan_linear_dua_variabel.Metode Subtitusi.Subtitusi_page')
@endsection
