@extends('template.template')
@section('script')
<link href="{{asset('CustomCSS/CustomStyleMateri.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Metode Grafik</h6>
    </div>
    <div class="card-body">
        <p>
            Metode grafik merupakan cara mencari titik potong pada persamaan linear dua variabel dengan memisalkan salah satu variabel menjadi nol,
            dalam setiap persamaan satu dan persamaan kedua.
        </p>
        <br>
        <div class="card">
            <div class="card-body">
            <p>
                cara : <br>
                <ol>
                    <li>Pilih persamaan satu dan misalkan \(x = 0\) dan hitung persamaan tersebut sehingga menghasilkan \(y = ...\)</li>
                    <li>Misalkan \(y = 0\) dengan menghitung seperti langkah pertama sehingga menghasilkan \(x = ...\)</li>
                    <li>Dari permisalan \(x = 0\) dan \(y = 0\) maka mendghasilkan dua titik potong yang akan dimasukan ke dalam grafik</li>
                    <li>Lakukan langddkah 1 sampai 3 untuk persamaan kedua</li>
                    <li>Masukan ke dalam grafik titik potong dari kedua persamaan sehingga mendapatkan titik potong dari kedua persamaan tersebut</li>
                </ol>
            </p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('halaman')
@include('persamaan_linear_dua_variabel.page')
@endsection
