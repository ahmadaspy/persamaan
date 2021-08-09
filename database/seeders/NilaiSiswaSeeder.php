<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\NilaiSiswa;

class NilaiSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NilaiSiswa::factory()->count(10)->create();
    }
}
