<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert([
            'name' => \Str::random(10),
            'email' => 'test@test',
            'utype' => 'user',
            'password' => \Hash::make('test'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'remember_token' => \Str::random(10)
        ]);

        \DB::table('users')->insert([
            'name' => \Str::random(10),
            'email' => 'admin@admin',
            'utype' => 'admin',
            'password' => \Hash::make('test'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'remember_token' => \Str::random(10)
        ]);

    }
}