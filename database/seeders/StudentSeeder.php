<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'name' => 'Amit Kumar',
                'age' => 21,
                'email' => 'amit@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Priya Sharma',
                'age' => 22,
                'email' => 'priya@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rahul Verma',
                'age' => 20,
                'email' => 'rahul@example.com',
                'password' => Hash::make('rahulpass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
