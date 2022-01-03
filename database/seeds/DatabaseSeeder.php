<?php

use Illuminate\Database\Seeder;
use App\sysuser;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PertanyaanSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(MahasiswaSeeder::class);
    }
}
