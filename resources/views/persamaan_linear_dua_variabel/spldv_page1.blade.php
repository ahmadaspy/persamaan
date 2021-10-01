@extends('template.template')
@section('script')
<link href="{{asset('CustomCSS/CustomStyleMateri.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Persamaan linear dua variabel</h6>
    </div>
    <div class="card-body">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    \(a_1x + b_1y = c_1\)
                </div>
                <div class="text-center">
                    \(a_2x + b_2y = c_2\)
                </div>
                <div class="text-center">
                    dengan \(a_1, b_1, a_2, b_2, c_1, c_2\) adalah bilangan real
                </div>
            </div>
        </div>
        <br>
        <h3>Mari Mengamati</h3>
        <div class="overflow-auto">
            <table class="table table-info" id="table-mengamati">
                <thead colsspan="2" class="text-center table-info">
                    Manakah yang termasuk persamaan linear dua variabel
                </thead>
                <tbody>
                    <tr>
                        <td>\(x + 2 = 4\)</td>
                        <td>
                            <button type="button" class="btn btn-success"  autocomplete="off"  id="yes0">Termasuk</button>
                            <button type="button" class="btn btn-danger"  autocomplete="off"  id="no0">Tidak termasuk</button>
                        </td>
                        <td>
                            <i id="jawaban0" class=""></i>
                        </td>
                    </tr>
                    <tr>
                        <td>\(2x + 4y < 10\)</td>
                        <td>
                            <button disabled type="button" class="btn btn-success"  autocomplete="off" id="yes1">Termasuk</button>
                            <button disabled type="button" class="btn btn-danger"  autocomplete="off" id="no1">Tidak termasuk</button>
                        </td>
                        <td>
                            <i id="jawaban1" class=""></i>
                        </td>
                    </tr>
                    <tr>
                        <td>\(2x + 4y = 12\)</td>
                        <td>
                            <button disabled type="button" class="btn btn-success"  autocomplete="off" id="yes2">Termasuk</button>
                            <button disabled type="button" class="btn btn-danger"  autocomplete="off" id="no2">Tidak termasuk</button>
                        </td>
                        <td>
                            <i id="jawaban2" class=""></i>
                        </td>
                    </tr>
                    <tr>
                        <td>\(6g - 2i = 28\)</td>
                        <td>
                            <button disabled type="button" class="btn btn-success"  autocomplete="off" id="yes3">Termasuk</button>
                            <button disabled type="button" class="btn btn-danger"  autocomplete="off" id="no3">Tidak termasuk</button>
                        </td>
                        <td>
                            <i id="jawaban3" class=""></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapsePenjelasan" aria-expanded="false" aria-controls="collapsePenjelasan" id="accordionpenjelasan" disabled>
                        Dari Kegiatan di atas maka dapat disimpulkan bentuk dari persamaan linear dua variabel merupakan :
                        </button>
                    </h2>
                </div>

                <div id="collapsePenjelasan" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p class="text-center">Mempunyai dua buah variabel di dalam persamaannya dengan variabel tidak hanya terpaku kepada \(x\) dan \(y\), variabel bebas bisa seperti \(j\) dan \(k\), atau lainnya.<br>
                        Persamaan linear ditunjukan adanya tanda "\(=\)"</p>
                    </div>
                </div>
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
    var jawaban = {!! json_encode($jawaban) !!};
    var penjelasan = {!! json_encode($penjelasan) !!};
    var i;
    document.getElementById('yes0').onclick = function(){yesfunction(0)}
    document.getElementById('yes1').onclick = function(){yesfunction(1)}
    document.getElementById('yes2').onclick = function(){yesfunction(2)}
    document.getElementById('yes3').onclick = function(){yesfunction(3)}
    document.getElementById('no0').onclick = function(){nofunction(0)}
    document.getElementById('no1').onclick = function(){nofunction(1)}
    document.getElementById('no2').onclick = function(){nofunction(2)}
    document.getElementById('no3').onclick = function(){nofunction(3)}
    var row, cell;
    var j = 1;
    var k;
    function yesfunction(i){
        if(jawaban[i]=="termasuk"){
            document.getElementById("jawaban"+i.toString()).className = "fas fa-check";
            document.getElementById('no'+i.toString()).disabled = true;
            document.getElementById('yes'+i.toString()).disabled = true;
            row = document.getElementById('table-mengamati').insertRow(j);
            cell = row.insertCell(0);
            cell.colSpan = 3;
            cell.innerHTML=penjelasan[i];
            j = j+2;
            k = i+1;
            if(i<3){
                document.getElementById('yes'+k.toString()).disabled = false;
                document.getElementById('no'+k.toString()).disabled = false;

            }else{
                document.getElementById('accordionpenjelasan').disabled =false;
            }

        }else{
            document.getElementById("jawaban"+i.toString()).className = "fas fa-times";
            document.getElementById('no'+i.toString()).disabled = true;
            document.getElementById('yes'+i.toString()).disabled = true;
            row = document.getElementById('table-mengamati').insertRow(j);
            cell = row.insertCell(0);
            cell.colSpan = 3;
            cell.innerHTML=penjelasan[i];
            j = j+2;
            var k = i+1;
            if(i<3){
                document.getElementById('yes'+k.toString()).disabled = false;
                document.getElementById('no'+k.toString()).disabled = false;

            }else{
                document.getElementById('accordionpenjelasan').disabled =false;
            }
        }
    }
    function nofunction(i){
        if(jawaban[i]=="tidak termasuk"){
            document.getElementById("jawaban"+i.toString()).className = "fas fa-check";
            document.getElementById('yes'+i.toString()).disabled = true;
            document.getElementById('no'+i.toString()).disabled = true;
            row = document.getElementById('table-mengamati').insertRow(j);
            cell = row.insertCell(0);
            cell.colSpan = 3;
            cell.innerHTML=penjelasan[i];
            j = j+2;
            var k = i+1;
            if(i<3){
                document.getElementById('yes'+k.toString()).disabled = false;
                document.getElementById('no'+k.toString()).disabled = false;

            }else{
                document.getElementById('accordionpenjelasan').disabled =false;
            }
        }else{
            document.getElementById("jawaban"+i.toString()).className = "fas fa-times";
            document.getElementById('yes'+i.toString()).disabled = true;
            document.getElementById('no'+i.toString()).disabled = true;
            row = document.getElementById('table-mengamati').insertRow(j);
            cell = row.insertCell(0);
            cell.colSpan = 3;
            cell.innerHTML=penjelasan[i];
            j = j+2;
            var k = i+1;
            if(i<3){
                document.getElementById('yes'+k.toString()).disabled = false;
                document.getElementById('no'+k.toString()).disabled = false;

            }else{
                document.getElementById('accordionpenjelasan').disabled =false;
            }
        }
    }
</script>
@endsection
