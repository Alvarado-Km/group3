<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Juan López',
                'email' => 'juan2020@gmail.com',
                'state' => 'La Libertad',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Maria Gonzalez',
                'email' => 'maria.gonzalez@gmail.com',
                'state' => 'La Unión',
                'is_artisan' => '1'
            ],
            [
                'name' => 'Carlos Ramirez',
                'email' => 'carlos.r@gmail.com',
                'state' => 'Sonsonate',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Ana Fernandez',
                'email' => 'ana.fer@gmail.com',
                'state' => 'San Miguel',
                'is_artisan' => '1'
            ],
            [
                'name' => 'Luis Martinez',
                'email' => 'luis.m@gmail.com',
                'state' => 'Santa Ana',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Sofia Diaz',
                'email' => 'sofia.d@gmail.com',
                'state' => 'La Libertad',
                'is_artisan' => '1'
            ],
            [
                'name' => 'Miguel Torres',
                'email' => 'miguel.t@gmail.com',
                'state' => 'Cabañas',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Lucia Chavez',
                'email' => 'lucia.c@gmail.com',
                'state' => 'Usulután',
                'is_artisan' => '1'
            ],
            [
                'name' => 'Ricardo Flores',
                'email' => 'ricardo.f@gmail.com',
                'state' => 'Chalatenango',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Elena Moreno',
                'email' => 'elena.m@gmail.com',
                'state' => 'La Paz',
                'is_artisan' => '1'
            ],
            [
                'name' => 'Fernando Rios',
                'email' => 'fernando.r@gmail.com',
                'state' => 'Ahuachapán',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Isabella Vega',
                'email' => 'isabella.v@gmail.com',
                'state' => 'Sonsonate',
                'is_artisan' => '1'
            ],
            [
                'name' => 'Jorge Herrera',
                'email' => 'jorge.h@gmail.com',
                'state' => 'Cuscatlán',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Daniela Ruiz',
                'email' => 'daniela.r@gmail.com',
                'state' => 'San Salvador',
                'is_artisan' => '1'
            ],
            [
                'name' => 'Alberto Vargas',
                'email' => 'alberto.v@gmail.com',
                'state' => 'San Vicente',
                'is_artisan' => '0'
            ],
            [
                'name' => 'Camila Soto',
                'email' => 'camila.s@gmail.com',
                'state' => 'Morazán',
                'is_artisan' => '1'
            ]
        ];

        User::factory(count($users))->sequence(fn ($sqn) => $users[$sqn->index])->create();

        //User::factory()->create([
          //  'email' => 'vendedor@example.com',
            //'password' => 'password',
          //  'role_id' => 1
        //]);

    }
}
