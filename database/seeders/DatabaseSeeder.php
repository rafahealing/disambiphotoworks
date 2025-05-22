<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Ade Setiawan',
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'phone' => '085600190898',
                'phone_verified_at' => now(),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Azzam Musthofa',
                'password' => Hash::make('password123'),
                'remember_token' => Str::random(10),
                'phone' => '085600190899',
                'phone_verified_at' => now(),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
