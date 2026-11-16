<?php

namespace Database\Seeders;

use App\Models\Teachers;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        Teachers::factory(10)->create();
    }
}
