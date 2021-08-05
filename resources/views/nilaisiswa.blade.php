@extends('template.templateguru')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Nilai Siswa</h6>
        </div>
        <div class="card-body">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="" class="btn btn-primary" >Print</a>
            </div>
            <br>
            <div class="overflow-auto">
                <table class="table table-hover">
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Nilai Kuis 1</th>
                        <th>Nilai Kuis 2</th>
                        <th>Evaluasi</th></th>
                    </tr>
                    <tr>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                        <td>test</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
