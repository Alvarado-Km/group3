<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Joyería y bisutería',
                'img' => '/img/categories/joyeria.png'
            ],
            [
                'name' => 'Cerámica',
                'img' => '/img/categories/ceramica.jpg'
            ],
            [
                'name' => 'Vidrio',
                'img' => '/img/categories/vidrio.webp'
            ],
            [
                'name' => 'Intrumentos',
                'img' => '/img/categories/instrumentos.jpg'
            ],
            [
                'name' => 'Textiles y bordados',
                'img' => '/img/categories/textiles.jpg'
            ],
            [
                'name' => 'Decoración y hogar',
                'img' => '/img/categories/casa.png'
            ],
            [
                'name' => 'Velas',
                'img' => '/img/categories/velas.jpg'
            ],

            [
                'name' => 'Bolsos y carteras',
                'img' => '/img/categories/bolsos.jpg'
            ],
            [
                'name' => 'Muebles',
                'img' => '/img/categories/muebles.jpg'
            ],
            [
                'name' => 'Juguetes',
                'img' => '/img/categories/juguetes.webp'
            ],
        ];

        Category::factory(count($categories))->sequence( fn ($sqn) => $categories[$sqn->index])->create();
    }
}
