@extends('template.template')
@section('script')
<link href="{{asset('CustomCSS/CustomStyleMateri.css')}}" rel="stylesheet">
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
                        <p class="text-center">Mempunyai dua buah variabel di dalam persamaannya dengan variabel tidak hanya terpaku kepada \(x\) dan \(y\), variabel bebas bisa seperti \(j\) dan \(k\), atau lainnya.<br>
                        Persamaan linear ditunjukan adanya tanda "\(=\)"</p>
                    </div>
                </div>
            </div>
        </div>
        @include('persamaan_linear_dua_variabel.page3_content.3_1content')
        </table>
        <div class="card">
            <div class="card-header">
                <h6 class="font-weight-bold">Gunakan koordinat \(x\) dan \(y\) di bawah untuk membantu kalian mencari titik potong</h6>
            </div>
            <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.geogebra.org/classic/bsugmt7h" class="hape" id="geogebra" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0">
                    </iframe>
                </div>
            </div>
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
                <button type="button" class="btn btn-primary btn-lg btn-block"><a href="" class="text-light">Pembahasan</a></button>
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
