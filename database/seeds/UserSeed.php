<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $fac)
    {
        DB::table('users')->insert([
            'full_name' => $fac->name,
            'email' => $fac->unique()->safeEmail,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('123456'),
            'type' => 'admin',
            'country' => 'afghanistan',
            'city' => 'kabul',
            'address' => 'shahid mazari destrict',
            'photo' => '09808098098.jpg',
            'status' => '1',
            'permit' => str_random(10),
            'remember_token' => str_random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
