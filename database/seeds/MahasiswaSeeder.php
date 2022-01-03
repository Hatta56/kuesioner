<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'npm'=>'201943500056',
            'nama'=>'Budiman',
            'jurusan'=>'Informatika'
        ]);
    }
}
