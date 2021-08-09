<?php

namespace Database\Factories;

use App\Models\NilaiSiswa;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NilaiSiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NilaiSiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'siswa_id' => User::factory()->state(['level' => 'siswa']),
            'kuis_1' => mt_rand(0,100)/10,
            'kuis_2' => mt_rand(0,100)/10,
            'evaluasi' =>  mt_rand(0,100)/10,
        ];
    }
}
