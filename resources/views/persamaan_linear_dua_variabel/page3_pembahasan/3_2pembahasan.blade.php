@extends('template.template')
@section('title')
Pembahasan Soal {{$jawaban->id}}
@endsection
@section('script')
<link href="{{asset('CustomCSS/CustomStyleMateri.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Pembahasan Soal {{$jawaban->id}}</h6>
    </div>
    <div class="card-body">
        <ol>
            <li value="{{$jawaban->id}}">
                \({{$jawaban->soal_1}}\)<br>
                \({{$jawaban->soal_2}}\)
            </li>
        </ol>
        <span><b>Pembahasan : </b></span><br>
        <span>\({{$jawaban->soal_1}}\)</span>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="overflow-auto">
                        <div class="card-body">
                            <p>dengan \(x = 0\) :</p>
                            $$3x + y = 15$$
                            $$3(0) + y = 15$$
                            $$y = 15$$
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="overflow-auto">
                            <p>Dengan \(y = 0\) :</p>
                            $$3x + y = 15$$
                            $$3x + (0) =15$$
                            $$3x = 15$$
                            $$x = {15 \over 3}$$
                            $$x = 5$$
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="overflow-auto">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th colspan="3">\({{$jawaban->soal_1}}\)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 10%">\(x\)</td>
                                <td>{{$jawaban->jawaban_x_1_1}}</td>
                                <td>{{$jawaban->jawaban_x_1_2}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%">\(y\)</td>
                                <td>{{$jawaban->jawaban_y_1_1}}</td>
                                <td>{{$jawaban->jawaban_y_1_2}}</td>
                            </tr>
                            <tr>
                                <td>TP</td>
                                <td>({{$jawaban->jawaban_x_1_1}} , {{$jawaban->jawaban_y_1_1}})</td>
                                <td>({{$jawaban->jawaban_x_1_2}} , {{$jawaban->jawaban_y_1_2}})</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <span>\({{$jawaban->soal_2}}\)</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Dengan \(x = 0\) :</p>
                        $$x + y = 7$$
                        $$(0) + y = 7$$
                        $$y = 7$$
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Dengan \(y = 0\) :</p>
                        $$x + y = 7$$
                        $$x + (0) = 7$$
                        $$x = 7$$
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <div class="overflow-auto">
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th colspan="3">\({{$jawaban->soal_2}}\)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 10%">\(x\)</td>
                                <td>{{$jawaban->jawaban_x_2_1}}</td>
                                <td>{{$jawaban->jawaban_x_2_2}}</td>
                            </tr>
                            <tr>
                                <td style="width: 10%">\(y\)</td>
                                <td>{{$jawaban->jawaban_y_2_1}}</td>
                                <td>{{$jawaban->jawaban_y_2_2}}</td>
                            </tr>
                            <tr>
                                <td>TP</td>
                                <td>({{$jawaban->jawaban_x_2_1}} , {{$jawaban->jawaban_y_2_1}})</td>
                                <td>({{$jawaban->jawaban_x_2_2}} , {{$jawaban->jawaban_y_2_2}})</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
