<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function roles()
    {
        return once(function () {
            return Role::pluck('id');
        });
    }

    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'age' => fake()->numberBetween(15, 80),
            'role_id' => $this->roles()->random(),
            'state' => fake()->randomElement([
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
            'type_craft' => fake()->randomElement([
                'Joyería',
                'Ropa',
                'Velas',
                'Muebles',
                'Alfarería',
                'Cerámica',
                'Textiles',
                'Madera',
                'Instrumentos',
                'Arte con metal',
                'Vidrio',
                'Dulces típicos',
            ]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
