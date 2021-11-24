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
                            $$6x + 3y = 12$$
                            $$6(0) + 3y = 12$$
                            $$3y = 12$$
                            $$y = {12 \over 3}$$
                            $$y = 4$$
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="overflow-auto">
                            <p>Dengan \(y = 0\) :</p>
                            $$6x + 3y = 12$$
                            $$6x + 3(0) =12$$
                            $$6x = 12$$
                            $$x = {12 \over 6}$$
                            $$x = 2$$
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
                        $$8x - 2y = 4$$
                        $$8(0) - 2y = 4$$
                        $$-2y = 4$$
                        $$y = {4 \over -2}$$
                        $$y = -2$$
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p>Dengan \(y = 0\) :</p>
                        $$8x - 2y = 4$$
                        $$8x - 2(0) = 4$$
                        $$8x = 4$$
                        $$x = {4 \over 8}$$
                        $$y = 0.5$$
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
        <div class="row">
            {{-- <iframe src="https://www.geogebra.org/calculator/mmytqypq?embed" width="800" height="600" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0"></iframe> --}}
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.geogebra.org/calculator/mmytqypq?embed" class="hape" id="geogebra" allowfullscreen style="border: 1px solid #e4e4e4;border-radius: 4px;" frameborder="0">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
