<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $collection = collect([ 'guru', 'admin']);
        $collection = collect([
            ['nama' => 'sutijah', 'code_ref' => '1234'],
            ['nama' => 'setoyo', 'code_ref' => '4321']
        ]);
        $guru = $collection->random();
        return [
            'name' => $this->faker->name(),
            'email' => $email = $this->faker->unique()->safeEmail(),
            // 'level' => $collection->random(),
            'level' => 'siswa',
            'nama_guru' => $guru['nama'],
            'code_referral' => $guru['code_ref'],
            'email_verified_at' => now(),
            'password' => $email,
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
