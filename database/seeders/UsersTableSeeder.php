<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Insert 10 demo users
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'name' => "Demo User $i",
                'email' => "demo$i@example.com",
                'type' => '1', // Modify as needed
                'email_verified_at' => now(),
                'password' => Hash::make("password$i"),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
