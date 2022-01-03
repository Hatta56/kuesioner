<?php

use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosens')->insert([
            'nama_dosen'=>'Hatta',
            'prodi'=>'informatika',
            'matkul'=>'Algoritma'
        ]);
    }
}
