<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('admin123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane1@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane2@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane3@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janey@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane12@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Jane Smith',
                'email' => 'jane55@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Jane Smith',
                'email' => 'jane66@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane122@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Jane Smith',
                'email' => 'jane444@example.com',
                'password' => Hash::make('securepass'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
