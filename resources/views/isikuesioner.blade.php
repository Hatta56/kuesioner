@extends('layout.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')


<div class="container">


</div>
<div class="container">
    <div class="card ">
        <div class="card-body">


            <form action="/input-kuesioner" method="post">
                @csrf

                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <label for=""> Pilih Nama Dosen </label>
                            <select name="id_dosen" class="form-control">
                                <option value="" disabled selected hidden>Pilih Nama</option>
                                @foreach ($dosen as $d)
                                <option value="{{$d->id}}">{{$d->nama_dosen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for=""> Pilih Nama Mata Kuliah </label>
                            <select name="matkul" id="" class="form-control">
                                <option value="" disabled selected hidden>Pilih Mata Kuliah</option>
                                @foreach ($matkul as $m)
                                <option value="{{$m->nama_matkul}}">{{$m->nama_matkul}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for=""> Pilih Nama Prodi </label>
                            <select name="prodi" id="" class="form-control">
                                <option value="" disabled selected hidden>Pilih Nama Prodi</option>
                                @foreach ($prodi as $p)
                                <option value="{{$p->nama_prodi}}">{{$p->nama_prodi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <label for="">Masukan Nama Mahasiswa </label>
                            <input type="text" name="nama_mahasiswa" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="">Masukan Jurusan </label>
                            <input type="text" name="jurusan" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for=""> Masukan NPM </label>
                            <input type="number" name="npm" class="form-control col-8">

                        </div>
                    </div>
                </div>
                @php
                $i=1;
                @endphp
                <hr>
                @foreach ($pertanyaan as $p)
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            {{$p->judulpertanyaan}}<br>
                        </div>
                        <br>
                        <div class="col-4">
                            <input type="radio" name="hasil{{$i}}" value="1"> {{$p->nilai1}}
                            <input type="radio" name="hasil{{$i}}" value="2"> {{$p->nilai2}}
                            <input type="radio" name="hasil{{$i}}" value="3"> {{$p->nilai3}}
                            <input type="radio" name="hasil{{$i}}" value="4"> {{$p->nilai4}}
                            <br>
                        </div>
                    </div>
                    <hr>
                </div>
                @php
                $i++;
                @endphp
                <br>
                @endforeach



                <button class="btn btn-success" type="submit">Isi</button>
            </form>

        </div>
    </div>
</div>
@endsection
