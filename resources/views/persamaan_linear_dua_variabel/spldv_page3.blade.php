@extends('template.template')
@section('script')
<link href="{{asset('CustomCSS/CustomStyleMateri.css')}}" rel="stylesheet">
@endsection
@section('title')
Mari Mencoba SPLDV soal {{$soal->id}}
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Waduh !</strong> Kalian harus isi semua box !.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session()->has('benar'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <form method="POST" target="_blank" rel="noreferrer noopener" action="{{route('pembahasan_mencoba_1')}}">
            @csrf
            <input hidden name="id" value="{{$soal->id}}">
            <input hidden name="percobaan" value=4>
            <strong>Benar !</strong> kalian bisa lihat pembahasan
            <button type="submit" class="btn btn-success" >Disini</button>
        </form>
        {{-- <strong>Benar !</strong> kalian bisa lihat pembahasan <a href="{{route('pembahasan_mencoba_1', $soal->id, 3)}}" target="_blank" rel="noreferrer noopener">disini</a>. --}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Mari Mencoba</h6>
    </div>
    <div class="card-body">
        <div class="accordion" id="petunjuk">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsePetunjuk" aria-expanded="false" aria-controls="collapsePetunjuk" id="accordionPetunjuk">
                        Klik disini untuk melihat petunjuk !
                        </button>
                    </h2>
                </div>

                <div id="collapsePetunjuk" class="collapse" aria-labelledby="headingOne" data-parent="#petunjuk">
                    <div class="card-body">
                        <ol>
                            <li><p>Semua kotak harus di isi</p></li>
                            <li>Klik tombol cek jawaban untuk mencek jawaban <button class="btn btn-success float-right m-4">Cek Jawaban</button></li>
                            <li>
                                <table class="table table-bordered">
                                    <thead>
                                        <th colspan="2">Soal</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>\(x\)</td>
                                            <td class="table-success">Hijau merupakan jawaban yang benar</td>
                                        </tr>
                                        <tr>
                                            <td>\(y\)</td>
                                            <td class="table-danger">Merah merupakan jawaban yang salah</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @include('persamaan_linear_dua_variabel.page3_content.3_1content')
        {{-- <div class="accordion" id="Koordinat">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseKoordinat" aria-expanded="false" aria-controls="collapseKoordinat" id="accordionKoordinat">
                            Gunakan koordinat \(x\) dan \(y\) di bawah untuk membantu kalian mencari titik potong
                        </button>
                    </h2>
                </div>

                <div id="collapseKoordinat" class="collapse" aria-labelledby="headingOne" data-parent="#Koordinat">
                    <div class="card-body">
                        <iframe class="embed-responsive-item" src="https://www.geogebra.org/classic/bsugmt7h" class="hape" id="geogebra" allowfullscreen  frameborder="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="card">
            <div class="card-header">
                <h6 class="font-weight-bold">Gunakan koordinat \(x\) dan \(y\) di bawah untuk membantu kalian mencari titik potong</h6>
            </div>
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.geogebra.org/classic/bsugmt7h" class="hape" id="geogebra" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0">
                    </iframe>
                </div>
            </div>
        </div> --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Gunakan koordinat \(x\) dan \(y\) untuk membantu kalian mencari titik potong !, klik <a href="{{route('koordinat_geogebra')}}" target="_blank" rel="noreferrer noopener">disini</a> untuk membuka !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Perhatian</h5>
                <button type="button" onclick="closemodal()" class="close" data-dismiss="Modal" aria-label="close">&times;</button>
            </div>
            <div class="modal-body">
				<p>Apabila kalian kesulitan dalam menyelesaikan masalah tersebut klik link dibawah untuk melihat pembahasan</p>
                <form method="POST" target="_blank" rel="noreferrer noopener" action="{{route('pembahasan_mencoba_1')}}">
                    @csrf
                    <input hidden name="id" value="{{$soal->id}}">
                    <input hidden name="percobaan" value="{{$percobaan}}">
                    <button type="submit" class="text-light btn btn-primary btn-lg active btn-block" >Pembahasan</button>
                </form>
                {{-- <a href="{{route('pembahasan_mencoba_1', $soal->id)}}" target="_blank" rel="noreferrer noopener" class="text-light btn btn-primary btn-lg active btn-block" role="button">Pembahasan</a> --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('halaman')
@include('persamaan_linear_dua_variabel.page')
@endsection
@section('scriptbawah')
<script>
    $("#x1_1, #y1_1, #x1_2, #y1_2, #x2_1, #y2_1, #x2_2, #y2_2").keyup(function(){
        update();
    })
    function update(){
        $("#input_1_1").val($('#x1_1').val());
        $("#input_1_2").val($('#y1_1').val());
        $("#input_2_1").val($('#x1_2').val());
        $("#input_2_2").val($('#y1_2').val());
        $("#input_3_1").val($('#x2_1').val());
        $("#input_3_2").val($('#y2_1').val());
        $("#input_4_1").val($('#x2_2').val());
        $("#input_4_2").val($('#y2_2').val());
    }
    function RefreshPage(){
        document.getElementById("x1_1").value = "";
        document.getElementById("y1_1").value = "";
        document.getElementById("x1_2").value = "";
        document.getElementById("y1_2").value = "";
        document.getElementById("x2_1").value = "";
        document.getElementById("y2_1").value = "";
        document.getElementById("x2_2").value = "";
        document.getElementById("y2_2").value = "";
        document.getElementById("titik_potong_1").value = "";
        document.getElementById("titik_potong_2").value = "";
        window.location.reload();
    }
    @if ($percobaan>3)
    $(document).ready(function(){
		$("#myModal").modal('show');
	});
    @endif
    function closemodal(){
        $("#myModal").modal('hide');
    }
</script>
@endsection
