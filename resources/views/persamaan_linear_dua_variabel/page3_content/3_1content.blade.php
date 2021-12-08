<p>
    <ol>
        <li value="{{$soal->id}}" class="float-left">
            {{-- \({{$soal->soal_1}}\)
            \({{$soal->soal_2}}\) --}}
            $${{ $soal->soal_1 }}$$
            $${{ $soal->soal_2 }}$$
            {{-- <div class="float-left">
                $${{$soal->soal_1}}$$
                $${{$soal->soal_2}}$$
            </div><br><br> --}}

        </li>
    </ol>
    <br><br><br><br><br>

    selesaikan masalah di atas dengan menggunakan metode grafik <br>
</p>

<form method="POST" action="{{route('post_latihan')}}">
    @csrf
    <input hidden name="id" value="{{$soal->id}}">
    <input hidden name="percobaan" value="{{$percobaan}}">
    <div class="overflow-auto">
        <table  class="table table-bordered" id="table_1">
            <thead class="text-center">
                <tr>
                    <th colspan="3">$${{$soal->soal_1}}$$</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>\(x\)</td>
                    <td @if (!$koreksi==null)
                        @if ($koreksi['jawaban_x_1_1']==false)
                            class="table-danger"
                        @else
                            class="table-success"
                        @endif
                    @endif><input step="0.1" type="number" name="x1_1" id="x1_1" value="{{old('x1_1')}}"></td>
                    <td @if (!$koreksi==null)
                            @if ($koreksi['jawaban_x_1_2']==false)
                                class="table-danger"
                            @else
                                class="table-success"
                            @endif
                        @endif><input step="0.1" type="number" name="x1_2" id="x1_2" value="{{old('x1_2')}}"></td>
                </tr>
                <tr>
                    <td>\(y\)</td>
                    <td @if (!$koreksi==null)
                            @if ($koreksi['jawaban_y_1_1']==false)
                                class="table-danger"
                            @else
                                class="table-success"
                            @endif
                        @endif><input step="0.1" type="number" name="y1_1" id="y1_1" value="{{old('y1_1')}}"></td>
                    <td @if (!$koreksi==null)
                        @if ($koreksi['jawaban_y_1_2']==false)
                            class="table-danger"
                        @else
                            class="table-success"
                        @endif
                    @endif><input step="0.1" type="number" name="y1_2" id="y1_2" value="{{old('y1_2')}}"></td>
                </tr>
                <tr>
                    <td>TP</td>
                    <td>( <input disabled type="number" id="input_1_1" name="input_1_1" value="{{old('input_1_1')}}"> , <input disabled type="number" id="input_1_2" name="input_1_2" value="{{old('input_1_2')}}"> )</td>
                    <td>( <input disabled type="number" id="input_2_1" name="input_2_1" value="{{old('input_2_1')}}"> , <input disabled type="number" id="input_2_2" name="input_2_2" value="{{old('input_2_2')}}"> )</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="overflow-auto">
        <table class="table table-bordered" id="table_2">
            <thead class="text-center">
                <tr>
                    <th colspan="3">$${{$soal->soal_2}}$$</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>\(x\)</td>
                    <td @if (!$koreksi==null)
                            @if ($koreksi['jawaban_x_2_1']==false)
                                class="table-danger"
                            @else
                                class="table-success"
                            @endif
                        @endif ><input step="0.1" id="x2_1" name="x2_1" type="number" value="{{old('x2_1')}}"></td>
                    <td @if (!$koreksi==null)
                            @if ($koreksi['jawaban_x_2_2']==false)
                                class="table-danger"
                            @else
                                class="table-success"
                            @endif
                        @endif><input step="0.1" id="x2_2" name="x2_2" type="number" value="{{old('x2_2')}}"></td>
                </tr>
                <tr>
                    <td>\(y\)</td>
                    <td @if (!$koreksi==null)
                            @if ($koreksi['jawaban_y_2_1']==false)
                                class="table-danger"
                            @else
                                class="table-success"
                            @endif
                        @endif><input step="0.1" id="y2_1" name="y2_1" type="number" value="{{old('y2_1')}}"></td>
                    <td @if (!$koreksi==null)
                            @if ($koreksi['jawaban_y_2_2']==false)
                                class="table-danger"
                            @else
                                class="table-success"
                            @endif
                        @endif><input step="0.1" id="y2_2" name="y2_2" type="number" value="{{old('y2_2')}}"></td>
                </tr>
                <tr>
                    <td>TP</td>
                    <td>( <input disabled type="number" id="input_3_1"> , <input disabled type="number" id="input_3_2"> )</td>
                    <td>( <input disabled type="number" id="input_4_1"> , <input disabled type="number" id="input_4_2"> )</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="overflow-auto">
        <table class="table table-bordered" id="table_3">
            <thead>
                <tr>
                    <th>Titik potong berada pada :</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td @if (!$koreksi==null)
                            @if ($koreksi['titik_potong_1']==false || $koreksi['titik_potong_2']==false)
                                class="table-danger"
                            @else
                                class="table-success"
                            @endif
                        @endif>( <input type="number" step="0.1" name="titik_potong_1" id="titik_potong_1" value="{{old('titik_potong_1')}}"> , <input type="number" step="0.1" name="titik_potong_2" id="titik_potong_2" value="{{old('titik_potong_2')}}"> )</td>
                </tr>
            </tbody>
        </table>
    </div>

<div class="row align-items-center">
    <div class="col">

    </div>
    <div class="col">
        <button type="submit" class="btn btn-success float-right m-4">Cek Jawaban</button>
        {{-- <button class="btn btn-success float-right m-4"></button> --}}
        <a href="{{route('spldv_3', $soal->id)}}" class="btn btn-success float-right m-4">Ulang</a>
    </div>
</div>
<p class="text-center">Soal :
    <a href="{{route("spldv_3", 1)}}" class="btn btn-light ">1</a>
    <a href="{{route("spldv_3", 2)}}" class="btn btn-light ">2</a>
    <a href="{{route("spldv_3", 3)}}" class="btn btn-light ">3</a>
</p>






</form>
