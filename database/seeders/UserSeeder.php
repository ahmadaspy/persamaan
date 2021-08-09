<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\GuruFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collection = collect([
            ['nama' => 'sutijah', 'code_ref' => '1234'],
            ['nama' => 'setoyo', 'code_ref' => '4321']
        ]);
        DB::table('users')->insert([
            'name' => $collection[0]['nama'],
            'email' => $email = $collection[0]['nama'].'@gmail',
            'level' => 'guru',
            'code_referral' => $collection[0]['code_ref'],
            'email_verified_at' => now(),
            'password' => bcrypt($email),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => $collection[1]['nama'],
            'email' => $email = $collection[1]['nama'].'@gmail',
            'level' => 'guru',
            'code_referral' => $collection[1]['code_ref'],
            'email_verified_at' => now(),
            'password' => bcrypt($email),
            'remember_token' => Str::random(10),
        ]);
        // User::factory()->count(10)->create();
        // GuruFactory::factoryForModel('User')->count(2)->create();
    }
}

