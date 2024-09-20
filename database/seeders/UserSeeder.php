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
                'email' => 'artisan@example.com',
                'state' => 'La Libertad',
                'is_artisan' => '1',
                'description' => 'Mi nombre es Juan López, desde joven me dedico a la artesanía, aprendiendo de generaciones anteriores que me enseñaron el arte de trabajar la madera. Cada pieza que creo lleva consigo el legado de mi familia y el orgullo de representar nuestra cultura.'
            ],
            [
                'name' => 'María González',
                'email' => 'customer@example.com',
                'state' => 'La Unión',
                'is_artisan' => '0'
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
                'is_artisan' => '1',
                'description' => 'Soy Ana Fernandez, nací en San Miguel, donde aprendí el arte del bordado a mano. Desde pequeña, me encantaba crear diseños detallados y coloridos en telas, transformando simples materiales en obras de arte que reflejan la rica cultura salvadoreña.'
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
                'is_artisan' => '1',
                'description' => 'Soy Sofia Diaz, artesana desde hace 15 años en el arte de la cerámica. Mi pasión es moldear el barro con mis manos y crear piezas únicas que reflejen la belleza natural de El Salvador.'
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
                'is_artisan' => '1',
                'description' => 'Me llamo Lucia Chavez y soy una apasionada artesana del tejido. Desde que tengo memoria, el hilo y la aguja han sido mis herramientas favoritas para expresar mi creatividad y amor por las tradiciones de Usulután.'
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
                'is_artisan' => '1',
                'description' => 'Soy Elena Moreno, y llevo más de 20 años creando joyería artesanal. Mis piezas están inspiradas en la naturaleza y las tradiciones ancestrales, utilizando materiales locales para fabricar accesorios llenos de historia y significado.'
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
                'is_artisan' => '1',
                'description' => 'Mi nombre es Isabella Vega y soy una artesana especializada en la fabricación de vidrio decorativo. Cada pieza que creo refleja mi amor por los colores vibrantes y las formas abstractas que encuentro en la naturaleza.'
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
                'is_artisan' => '1',
                'description' => 'Soy Daniela Ruiz, nacida y criada en San Salvador. Desde pequeña, he trabajado el cuero para crear accesorios funcionales y estéticos, poniendo siempre atención al detalle y la durabilidad de cada producto.'
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
                'is_artisan' => '1',
                'description' => 'Soy Camila Soto, y desde Morazán he perfeccionado el arte del tejido en telar. Mis creaciones reflejan la conexión profunda que siento con mis raíces y la tierra que me ha enseñado el valor del trabajo artesanal.'
            ],
        ];

        User::factory(count($users))->sequence( fn ($sqn) => $users[$sqn->index])->create();

        //User::factory()->create([
          //  'email' => 'vendedor@example.com',
            //'password' => 'password',
          //
        //]);

    }
}
