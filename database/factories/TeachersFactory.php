<?php

namespace Database\Factories;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teachers>
 */
class TeachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'niy'=>$this->faker->randomNumber(9, true),
            'subjects' => $this->faker->word(),
            'start-date' => $this->faker->date(),
        ];
    }
}
