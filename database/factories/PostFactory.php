<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'body' => $this->faker->paragraph(),
            'state' => $this->faker->randomElement([
                'Ahuachapán',
                'Cabañas',
                'Chalatenango',
                'Cuscatlán',
                'La Libertad',
                'Morazán',
                'La Paz',
                'Santa Ana',
                'San Miguel',
                'San Salvador',
                'San Vicente',
                'Sonsonate',
                'La Unión',
                'Usulután',
            ]),
        ];
    }
}


