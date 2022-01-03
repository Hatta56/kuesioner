<?php

use Illuminate\Database\Seeder;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen Menyampaikan Kontrak Perkuliah Kepada Mahasiswa',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
        ]);
        // DB::table('pertanyaans')->insert([
        //     'judulpertanyaan' => 'Dosen Menyampaikan Kontrak Perkuliah Kepada Mahasiswa',
           
        // ]);
        DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen Menyampaikan Tujuan Perkuliahan Yang akan dicapai',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen Tepat Waktu Dalam mengawali dan Mengakhiri Perkuliahan',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen Menggunakan Media/alat pembelajaran dalam setiap pertemuan',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen menguasai materi kuliah pada saat mengajar',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen Mengguanakan metoda perkuliahan yang bervariasi',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen selalu membuka sesi tanya jawab',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen memberikan pertemuan tambahan jika mater kurang',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen mampu memotivasi siswa agar aktif dalam proses belajar mengajar',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Penampilan dosen dalam berpakaian rapi, bersih, dan serasi',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Penggunaan bahasa dalam pelaksanaan perkuliahan: jelas, sopan, dan santun',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen bersedia melakukan melakukan konsultasi bila mahasiswa kesulitan dalam perkuliahan',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen menerima saran dan kritik dari mahasiswa',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Soal ujian sesuai dengan materi kuliah yang disampaikan',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'Dosen obyektif dan transparan dalam memberikan nilai kepada mahasiswa ',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);DB::table('pertanyaans')->insert([
            'judulpertanyaan' => 'jika ada keberatan atas nilai mahasiswa, dosen menerima keberatan tersebut',
            'nilai1'=>'kurang',
            'nilai2'=>'cukup',
            'nilai3'=>'baik',
            'nilai4'=>'sangat baik'
           
        ]);

    }
}
