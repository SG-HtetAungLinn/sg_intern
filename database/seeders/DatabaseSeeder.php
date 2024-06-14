<?php

namespace Database\Seeders;

use App\Models\Project;
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
        User::factory()->create([
            'name'      => 'Student2',
            'email'     => 'student2@gmail.com',
            'school'    => 'SG',
            'education' => 'Bsc',
            'gender'    => 'male',
            'address'   => 'Mandalay',
            'role'      => 'student',
            'password'  => Hash::make('password'),
        ]);
        User::factory()->create([
            'name'      => 'Student3',
            'email'     => 'student3@gmail.com',
            'school'    => 'SG',
            'education' => 'Bsc',
            'gender'    => 'male',
            'address'   => 'Mandalay',
            'role'      => 'student',
            'password'  => Hash::make('password'),
        ]);
        Project::factory()->create([
            'url' => 'url 1',
            'name' => 'Project 1',
            'student_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam libero rerum consectetur nemo praesentium ut, laboriosam vitae. Iusto est omnis magni? Iste deserunt a nostrum odit corporis recusandae amet modi?',
            'table_count' => '3',
            'language' => 'HTML, CSS, JS, PHP'
        ]);
        Project::factory()->create([
            'url' => 'url 2',
            'name' => 'Project 2',
            'student_id' => 2,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam libero rerum consectetur nemo praesentium ut, laboriosam vitae. Iusto est omnis magni? Iste deserunt a nostrum odit corporis recusandae amet modi?',
            'table_count' => '6',
            'language' => 'HTML, CSS, JS, PHP'
        ]);
        Project::factory()->create([
            'url' => 'url 3',
            'name' => 'Project 3',
            'student_id' => 3,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam libero rerum consectetur nemo praesentium ut, laboriosam vitae. Iusto est omnis magni? Iste deserunt a nostrum odit corporis recusandae amet modi?',
            'table_count' => '9',
            'language' => 'HTML, CSS, JS, PHP'
        ]);
        Project::factory()->create([
            'url' => 'url 4',
            'name' => 'Project 4',
            'student_id' => 4,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam libero rerum consectetur nemo praesentium ut, laboriosam vitae. Iusto est omnis magni? Iste deserunt a nostrum odit corporis recusandae amet modi?',
            'table_count' => '10',
            'language' => 'HTML, CSS, JS, PHP'
        ]);
    }
}
