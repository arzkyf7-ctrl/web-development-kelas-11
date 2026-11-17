<?php

namespace Database\Factories;

use App\Models\Subjects;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subjects>
 */
class SubjectsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Pendidikan Agama dan Budi Pekerti',
                'Pendidikan Pancasila dan Kewarganegaraan',
                'Bahasa Indonesia',
                'Matematika',
                'Bahasa Inggris',
                'Pendidikan Jasmani, Olahraga, dan Kesehatan',
                'Projek Kreatif dan Kewirausahaan',
                'Animasi 2D',
                'Animasi 3D',
                'Modeling 3D',
                'Rigging dan Texturing',
                'Storyboard dan Desain Karakter',
                'Motion Graphic',
                'Sound Design dan Audio',
                'Desain Grafis',
                'Desain Branding dan Identitas Visual',
                'Desain Kemasan',
                'Desain Periklanan',
                'Desain Publikasi dan Layout',
                'Desain UI/UX',
                'Fotografi dan Videografi',
                'Pemrograman Berorientasi Objek',
                'Basis Data',
                'Pemrograman Web',
                'Pemrograman Mobile',
                'Pemrograman Game',
                'Rekayasa Perangkat Lunak',
                'Pengujian Perangkat Lunak',
            ]),
        ];
    }
}
