<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'      => 'User',
            'email'     => 'user@gmail.com',
            'school'    => 'SG',
            'education' => 'Bsc',
            'gender'    => 'male',
            'address'   => 'Mandalay',
            'role'      => 'user',
            'password'  => Hash::make('password'),
        ]);
        User::factory()->create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'school'    => 'SG',
            'education' => 'Bsc',
            'gender'    => 'male',
            'address'   => 'Mandalay',
            'role'      => 'admin',
            'password'  => Hash::make('password'),
        ]);
        User::factory()->create([
            'name'      => 'Student',
            'email'     => 'student@gmail.com',
            'school'    => 'SG',
            'education' => 'Bsc',
            'gender'    => 'male',
            'address'   => 'Mandalay',
            'role'      => 'student',
            'password'  => Hash::make('password'),
        ]);
    }
}
