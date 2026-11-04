<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use App\Models\Student;
use App\Models\Subjects;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Student::factory(10)->create();
        // ClassRoom::factory(10)->create();
        ClassRoom::factory(10)->hasStudents(5)->create();
        Subjects::factory(10)->hasTeacher(1)->create();
    }
}
