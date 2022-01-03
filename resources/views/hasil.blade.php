
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
@extends('layout.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section('content')
<div>
    <div class="card text-center">
        <div class="card-body">




            <div class="row">
                <div class="col-sm">
                    <h3>Nama Dosen : {{ $dosen->nama_dosen}} </h3>
                </div>
                {{-- <div class="col-sm">
                  <h3>Mata Kuliah : {{ $dosen->matkul}}</h3>
            </div>
            <div class="col-sm">
                <h3>Prodi : {{ $dosen->prodi}}</h3>
            </div> --}}
        </div>
{{-- 
        @foreach ($kuisioner as $k)
        @php

        $p=16*0.10;
        $total=$k->jumlah/$p;
        @endphp

        @endforeach
        <br> --}}
        {{-- <svg class="rounded-circle" width="140" height="140"><rect width="100%" height="100%" fill="#00FFFF"/>
            <text  x="43%" y="50%" fill="#777" dy=".3em">{{$total}}</text>
        </svg> --}}

        {{-- <div class="col d-flex justify-content-center">

                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Rata-Rata Penilaian Dosen</div>
                    <div class="card-body">
                        <strong>
                            <h3>{{$total}}%</h3>
        </strong>
    </div>
</div>

</div> --}}

<div class="row">
    <div class="col-sm">
        <div class="card ">
            <div class="card-body">


                Dosen Menyampaikan Kontrak Perkuliah Kepada Mahasiswa ?
                <br><br>
                @foreach ($hasilkurang as $h)
                @php
                if ($h->hitungkurang != "") {
                echo " <div class='badge bg-danger text-wrap mx-2' style='width: 10rem;''>
                    Kurang = {$h->hitungkurang}
                </div>";
                }else {
                // $h->hitungkurang;
                echo "0";
                }
                @endphp

               
                @endforeach

                @foreach ($hasilcukup as $h)
                @php
                if ($h->hitungcukup == 0) {
                echo 0;
                }else {
                $h->hitungcukup;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2 " style="width: 8rem;">
                    Cukup = {{$h->hitungcukup}}
                </div>
                @endforeach


                @foreach ($hasilbaik as $h)
                @php
                if ($h->hitungbaik != NULL) {
                
                echo "<div class='badge bg-secondary text-wrap ' style='width: 8rem;'>
                    Baik = {$h->hitungbaik} </div>";
                }else {
                    echo 0;
                
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik as $h)
                @php
                if ($h->hitungsgbaik == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik}}
                </div>
                @endforeach

            </div>
        </div>
    </div>


    <!-- pertanyaan 2 -->
    <div class="col-sm">
        <div class="card ">
            <div class="card-body">
                Dosen Menyampaikan Tujuan Perkuliahan Yang akan dicapai
                <br><br>
                @foreach ($hasilkurang2 as $h)

                @php
                if ($h->hitungkurang2 == 0) {
                echo 0;
                }else {
                $h->hitungkurang2;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang2}}
                </div>
                @endforeach

                @foreach ($hasilcukup2 as $h)
                @php
                if ($h->hitungcukup2 == 0) {
                echo 0;
                }else {
                $h->hitungcukup2;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup2}}
                </div>

                @endforeach


                @foreach ($hasilbaik2 as $h)
                @php
                if ($h->hitungbaik2 >= 1) {
                echo "<div class='badge bg-secondary text-wrap ' style='width: 8rem;'>
                    Baik = {$h->hitungbaik2} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik2 as $h)
                @php
                if ($h->hitungsgbaik2 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik2;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik2}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- pertanyaan 3 -->
    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                Dosen Tepat Waktu Dalam mengawali dan Mengakhiri Perkuliahan
                <br><br>
                @foreach ($hasilkurang3 as $h)

                @php
                if ($h->hitungkurang3 == 0) {
                echo 0;
                }else {
                $h->hitungkurang3;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang3}}
                </div>
                @endforeach

                @foreach ($hasilcukup3 as $h)
                @php
                if ($h->hitungcukup3 == 0) {
                echo 0;
                }else {
                $h->hitungcukup3;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup3}}
                </div>

                @endforeach


                @foreach ($hasilbaik3 as $h)
                @php
                if ($h->hitungbaik3 >= 1) {
                echo "<div class='badge bg-secondary text-wrap ' style='width: 8rem;'>
                    Baik = {$h->hitungbaik3} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik3 as $h)
                @php
                if ($h->hitungsgbaik3 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik3;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik3}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="row my-4">
    <div class="col-sm">

        <div class="card ">
            <div class="card-body">
                <!-- pertanyaan 4 -->
                Dosen Menggunakan Media/alat pembelajaran dalam setiap pertemuan
                <br><br>
                @foreach ($hasilkurang4 as $h)

                @php
                if ($h->hitungkurang4 == 0) {
                echo 0;
                }else {
                $h->hitungkurang4;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang4}}
                </div>
                @endforeach

                @foreach ($hasilcukup4 as $h)
                @php
                if ($h->hitungcukup4 == 0) {
                echo 0;
                }else {
                $h->hitungcukup4;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup4}}
                </div>

                @endforeach


                @foreach ($hasilbaik4 as $h)
                @php
                if ($h->hitungbaik4 >= 1) {
                echo "<div class='badge bg-secondary text-wrap ' style='width: 8rem;'>
                    Baik = {$h->hitungbaik4} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik4 as $h)
                @php
                if ($h->hitungsgbaik4 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik4;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik4}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- pertanyaan 5 -->
    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                Dosen menguasai materi kuliah pada saat mengajar
                <br><br>
                @foreach ($hasilkurang5 as $h)

                @php
                if ($h->hitungkurang5 == 0) {
                echo 0;
                }else {
                $h->hitungkurang5;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang5}}
                </div>
                @endforeach

                @foreach ($hasilcukup5 as $h)
                @php
                if ($h->hitungcukup5 == 0) {
                echo 0;
                }else {
                $h->hitungcukup5;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup5}}
                </div>

                @endforeach


                @foreach ($hasilbaik5 as $h)
                @php
                if ($h->hitungbaik5 >= 1) {
                echo "<div class='badge bg-secondary text-wrap ' style='width: 8rem;'>
                    Baik = {$h->hitungbaik5} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik5 as $h)
                @php
                if ($h->hitungsgbaik5 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik5;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik5}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm">
        <div class="card">
            <div class="card-body">

                <!-- pertanyaan 6 -->
                Dosen Mengguanakan metoda perkuliahan yang bervariasi
                <br><br>
                @foreach ($hasilkurang6 as $h)

                @php
                if ($h->hitungkurang6 == 0) {
                echo 0;
                }else {
                $h->hitungkurang6;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang6}}
                </div>
                @endforeach

                @foreach ($hasilcukup6 as $h)
                @php
                if ($h->hitungcukup6 == 0) {
                echo 0;
                }else {
                $h->hitungcukup6;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup6}}
                </div>

                @endforeach


                @foreach ($hasilbaik6 as $h)
                @php
                if ($h->hitungbaik6 >= 1) {
                echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                    Baik = {$h->hitungbaik6} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik6 as $h)
                @php
                if ($h->hitungsgbaik6 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik6;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik6}}
                </div>
                @endforeach
            </div>
        </div>
    </div>


</div>

<div class="row my-4">
    <div class="col-sm">

        <div class="card ">
            <div class="card-body">
                <!-- pertanyaan 7-->
                Dosen selalu membuka sesi tanya jawab
                <br><br>
                @foreach ($hasilkurang7 as $h)

                @php
                if ($h->hitungkurang7 == 0) {
                echo 0;
                }else {
                $h->hitungkurang7;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang7}}
                </div>
                @endforeach

                @foreach ($hasilcukup7 as $h)
                @php
                if ($h->hitungcukup7 == 0) {
                echo 0;
                }else {
                $h->hitungcukup7;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup7}}
                </div>

                @endforeach


                @foreach ($hasilbaik7 as $h)
                @php
                if ($h->hitungbaik7 >= 1) {
                echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                    Baik = {$h->hitungbaik7} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik7 as $h)
                @php
                if ($h->hitungsgbaik7 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik7;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik7}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                <!--- Pertanyaan 8 -->
                Dosen memberikan pertemuan tambahan jika mater kurang
                <br><br>
                @foreach ($hasilkurang8 as $h)

                @php
                if ($h->hitungkurang8 == 0) {
                echo 0;
                }else {
                $h->hitungkurang8;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang8}}
                </div>
                @endforeach

                @foreach ($hasilcukup8 as $h)
                @php
                if ($h->hitungcukup8 == 0) {
                echo 0;
                }else {
                $h->hitungcukup8;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup8}}
                </div>

                @endforeach


                @foreach ($hasilbaik8 as $h)
                @php
                if ($h->hitungbaik8 >= 1) {
                echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                    Baik = {$h->hitungbaik8} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik8 as $h)
                @php
                if ($h->hitungsgbaik8 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik8;
                }
                @endphp
                <div class="badge bg-primary text-wrap" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik8}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                <!-- pertanyaan 9 -->
                Dosen mampu memotivasi siswa agar aktif dalam proses belajar mengajar
                <br><br>

                @foreach ($hasilkurang9 as $h)

                @php
                if ($h->hitungkurang9 == 0) {
                echo 0;
                }else {
                $h->hitungkurang9;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang9}}
                </div>
                @endforeach

                @foreach ($hasilcukup9 as $h)
                @php
                if ($h->hitungcukup9 == 0) {
                echo 0;
                }else {
                $h->hitungcukup9;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup9}}
                </div>

                @endforeach


                @foreach ($hasilbaik9 as $h)
                @php
                if ($h->hitungbaik9 >= 1) {
                echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                    Baik = {$h->hitungbaik9} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik9 as $h)
                @php
                if ($h->hitungsgbaik9 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik9;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik9}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

<div class="row my-4">
    <div class="col-sm">

        <div class="card ">
            <div class="card-body">
                <!--- pertanyaan 10 -->
                Penampilan dosen dalam berpakaian rapi, bersih, dan serasi
                <br><br>
                @foreach ($hasilkurang10 as $h)

                @php
                if ($h->hitungkurang10 == 0) {
                echo 0;
                }else {
                $h->hitungkurang10;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang10}}
                </div>
                @endforeach

                @foreach ($hasilcukup10 as $h)
                @php
                if ($h->hitungcukup10 == 0) {
                echo 0;
                }else {
                $h->hitungcukup10;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup10}}
                </div>

                @endforeach


                @foreach ($hasilbaik10 as $h)
                @php
                if ($h->hitungbaik10 >= 1) {
                echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                    Baik = {$h->hitungbaik10} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik10 as $h)
                @php
                if ($h->hitungsgbaik10 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik10;
                }
                @endphp
                <div class="badge bg-primary text-wrap" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik10}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                <!-- pertanyaan 11 -->
                Penggunaan bahasa dalam pelaksanaan perkuliahan: jelas, sopan, dan santun
                <br><br>
                @foreach ($hasilkurang11 as $h)

                @php
                if ($h->hitungkurang11 == 0) {
                echo 0;
                }else {
                $h->hitungkurang11;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang11}}
                </div>
                @endforeach

                @foreach ($hasilcukup11 as $h)
                @php
                if ($h->hitungcukup11 == 0) {
                echo 0;
                }else {
                $h->hitungcukup11;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup11}}
                </div>

                @endforeach


                @foreach ($hasilbaik11 as $h)
                @php
                if ($h->hitungbaik11 >= 1) {
                echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                    Baik = {$h->hitungbaik11} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik11 as $h)
                @php
                if ($h->hitungsgbaik11 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik11;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik11}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-sm">
        <div class="card">
            <div class="card-body">
                <!-- Pertanyaan 12-->
                Dosen bersedia melakukan melakukan konsultasi bila mahasiswa kesulitan dalam perkuliahan ?
                <br><br>
                @foreach ($hasilkurang12 as $h)

                @php
                if ($h->hitungkurang12 == 0) {
                echo 0;
                }else {
                $h->hitungkurang12;
                }
                @endphp

                <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                    Kurang = {{$h->hitungkurang12}}
                </div>
                @endforeach

                @foreach ($hasilcukup12 as $h)
                @php
                if ($h->hitungcukup12 == 0) {
                echo 0;
                }else {
                $h->hitungcukup12;
                }
                @endphp
                <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                    Cukup = {{$h->hitungcukup12}}
                </div>

                @endforeach


                @foreach ($hasilbaik12 as $h)
                @php
                if ($h->hitungbaik12 >= 1) {
                echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                    Baik = {$h->hitungbaik12} </div>";
                }else {
                echo 0;
                }
                @endphp
                @endforeach

                @foreach ($hasilsgbaik12 as $h)
                @php
                if ($h->hitungsgbaik12 == 0) {
                echo 0;
                }else {
                $h->hitungsgbaik12;
                }
                @endphp
                <div class="badge bg-primary text-wrap my-3" style="width: 12rem;">
                    Sangat Baik = {{$h->hitungsgbaik12}}
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

<div class="row my-4">
    <div class="col-sm">

        <div class="card ">
            <div class="card-body">
                <!-- pertanyaan 13 -->
                Dosen menerima saran dan kritik dari mahasiswa
                <br><br>
                          @foreach ($hasilkurang13 as $h)

                          @php
                           if ($h->hitungkurang13 == 0) {
                             echo 0;
                           }else {
                             $h->hitungkurang13;
                           }   
                          @endphp
                         
                         <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                          Kurang = {{$h->hitungkurang13}}
                        </div>
                          @endforeach
                        
                          @foreach ($hasilcukup13 as $h)
                          @php
                           if ($h->hitungcukup13 == 0) {
                             echo 0;
                           }else {
                             $h->hitungcukup13;
                           }   
                          @endphp
                         <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                          Cukup = {{$h->hitungcukup13}}
                        </div>

                          @endforeach
                  

                          @foreach ($hasilbaik13 as $h)
                          @php
                           if ($h->hitungbaik13 >= 1) {
                             echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                                    Baik = {$h->hitungbaik13} </div>";
                           }else {
                             echo 0;
                           }   
                          @endphp
                          @endforeach

                          @foreach ($hasilsgbaik13 as $h)
                          @php
                           if ($h->hitungsgbaik13 == 0) {
                             echo 0;
                           }else {
                             $h->hitungsgbaik13;
                           }   
                          @endphp
                         <div class="badge bg-primary text-wrap my-3"  style="width: 12rem;" >
                          Sangat Baik = {{$h->hitungsgbaik13}}
                        </div>
                          @endforeach 
            </div>
        </div>
    </div>

    <div class="col-sm">
        <div class="card">
            <div class="card-body">
              <!-- pertanyaan 14 -->
              Soal ujian sesuai dengan materi kuliah yang disampaikan ?
              <br><br>
                          @foreach ($hasilkurang14 as $h)

                          @php
                           if ($h->hitungkurang14 == 0) {
                             echo 0;
                           }else {
                             $h->hitungkurang14;
                           }   
                          @endphp
                         
                         <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                          Kurang = {{$h->hitungkurang14}}
                        </div>
                          @endforeach
                        
                          @foreach ($hasilcukup14 as $h)
                          @php
                           if ($h->hitungcukup14 == 0) {
                             echo 0;
                           }else {
                             $h->hitungcukup14;
                           }   
                          @endphp
                         <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                          Cukup = {{$h->hitungcukup14}}
                        </div>

                          @endforeach
                  

                          @foreach ($hasilbaik14 as $h)
                          @php
                           if ($h->hitungbaik14 >= 1) {
                             echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                                    Baik = {$h->hitungbaik14} </div>";
                           }else {
                             echo 0;
                           }   
                          @endphp
                          @endforeach

                          @foreach ($hasilsgbaik14 as $h)
                          @php
                           if ($h->hitungsgbaik14 == 0) {
                             echo 0;
                           }else {
                             $h->hitungsgbaik14;
                           }   
                          @endphp
                         <div class="badge bg-primary text-wrap my-3"  style="width: 12rem;" >
                          Sangat Baik = {{$h->hitungsgbaik14}}
                        </div>
                          @endforeach 
            </div>
        </div>
    </div>

    <div class="col-sm">
        <div class="card">
            <div class="card-body">
              <!-- pertanyaan 15 -->
              Dosen obyektif dan transparan dalam memberikan nilai kepada mahasiswa ?
              <br><br>
                          @foreach ($hasilkurang15 as $h)

                          @php
                           if ($h->hitungkurang15 == 0) {
                             echo 0;
                           }else {
                             $h->hitungkurang15;
                           }   
                          @endphp
                         
                         <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                          Kurang = {{$h->hitungkurang15}}
                        </div>
                          @endforeach
                        
                          @foreach ($hasilcukup15 as $h)
                          @php
                           if ($h->hitungcukup15 == 0) {
                             echo 0;
                           }else {
                             $h->hitungcukup15;
                           }   
                          @endphp
                         <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                          Cukup = {{$h->hitungcukup15}}
                        </div>

                          @endforeach
                  

                          @foreach ($hasilbaik15 as $h)
                          @php
                           if ($h->hitungbaik15 >= 1) {
                             echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                                    Baik = {$h->hitungbaik15} </div>";
                           }else {
                             echo 0;
                           }   
                          @endphp
                          @endforeach

                          @foreach ($hasilsgbaik15 as $h)
                          @php
                           if ($h->hitungsgbaik15 == 0) {
                             echo 0;
                           }else {
                             $h->hitungsgbaik15;
                           }   
                          @endphp
                         <div class="badge bg-primary text-wrap my-3"  style="width: 12rem;" >
                          Sangat Baik = {{$h->hitungsgbaik15}}
                        </div>
                          @endforeach 

            </div>
            
        </div>
    </div>
    
      

</div>

<div class="row">
    <div class="col-sm">
        {{-- One of three columns --}}
      </div>
  <div class="col-sm">
    <div class="card justify-content-center">
      <div class="card-body">
        <!-- pertanyaan 16 -->
        jika ada keberatan atas nilai mahasiswa, dosen menerima keberatan tersebut
        <br><br>
                          @foreach ($hasilkurang16 as $h)

                          @php
                           if ($h->hitungkurang16 == 0) {
                             echo 0;
                           }else {
                             $h->hitungkurang16;
                           }   
                          @endphp
                         
                         <div class="badge bg-danger text-wrap mx-2" style="width: 10rem;">
                          Kurang = {{$h->hitungkurang16}}
                        </div>
                          @endforeach
                        
                          @foreach ($hasilcukup16 as $h)
                          @php
                           if ($h->hitungcukup16 == 0) {
                             echo 0;
                           }else {
                             $h->hitungcukup16;
                           }   
                          @endphp
                         <div class="badge bg-warning text-wrap mx-2" style="width: 8rem;">
                          Cukup = {{$h->hitungcukup16}}
                        </div>

                          @endforeach
                  

                          @foreach ($hasilbaik16 as $h)
                          @php
                           if ($h->hitungbaik16 >= 1) {
                             echo "<div class='badge bg-secondary text-wrap' style='width: 8rem;'>
                                    Baik = {$h->hitungbaik16} </div>";
                           }else {
                             echo 0;
                           }   
                          @endphp
                          @endforeach

                          @foreach ($hasilsgbaik16 as $h)
                          @php
                           if ($h->hitungsgbaik16 == 0) {
                             echo 0;
                           }else {
                             $h->hitungsgbaik16;
                           }   
                          @endphp
                         <div class="badge bg-primary text-wrap my-3"  style="width: 12rem;" >
                          Sangat Baik = {{$h->hitungsgbaik16}}
                        </div>
                          @endforeach 
      </div>
    </div>
  </div>
  <div class="col-sm">
    {{-- One of three columns --}}
  </div>
</div>


</div>

</div>


</div>
@endsection
