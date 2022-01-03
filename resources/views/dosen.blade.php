@extends('layout.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')
<div class="card text-center">
    <div class="card-body">
        <form action="/insert-dosen" method="POST">
            
            @csrf
            <div class="row">
                <div class="col-sm my-2">
                   <h4><strong>Masukan Nama Dosen</strong> </h4>
                </div>
                
                <div class="col-sm">
                    <input type="text" name="nama_dosen" placeholder="Nama Dosen" class="form-control">
                </div>

               
                
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm my-2">
                    <h4><strong>Masukan Nama Prodi</strong> </h4>
                 </div>
                <div class="col-sm">
                  
                    <select name="prodi" id="" class="form-control">
                        <option value="" disabled selected hidden>Pilih Nama Prodi</option>
                        @foreach ($prodi as $p)
                        <option value="{{$p->nama_prodi}}">{{$p->nama_prodi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <hr>
            <div class="row">
                <div class="col-sm my-2">
                    <h4><strong>Masukan Nama Mata Kuliah</strong> </h4>
                 </div>
                <div class="col-sm">
                   
                    <select name="matkul" id="" class="form-control">
                        <option value="" disabled selected hidden>Pilih Mata Kuliah</option>
                        @foreach ($matkul as $m)
                        <option value="{{$m->nama_matkul}}">{{$m->nama_matkul}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <hr>
           <button type="submit" class="btn btn-success">
            Input Dosen
           </button>
            
        </form>
    </div>
</div>
@endsection