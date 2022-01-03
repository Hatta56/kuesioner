<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
{{-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> --}}
{{-- <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script> --}}

@extends('layout.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')
<div class="card text-center">

    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Dosen</th><th>Matkul</th><th>Prodi</th><th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($dosen as $d)
                <tr>
                    <td>
                        {{$d->nama_dosen}}         
                    </td>
                    <td>
                        {{$d->matkul}}
                    </td>
                    <td>
                        {{$d->prodi}}
                    </td>
                    <td>
                        <a href="/hasil/{{$d->id}}">Lihat Hasil</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
    </div>
  </div>
  @endsection
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>