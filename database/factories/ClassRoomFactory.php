<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ClassRoom>
 */
class ClassRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $major = fake()->randomElement([
            'PPLG',
            'DKV',
            'ANIMASI',
        ]);
        $grade = fake()->randomElement([10,11,12]);
        $number = fake()->randomElement([1,2,3]);

        return [
            'name'=>"{$grade} {$major} {$number}",
            'major' => $major
        ];
    }
}
