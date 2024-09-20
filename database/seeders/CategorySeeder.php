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
                'name' => 'Joyería',
                'img' => '/img/categories/joyeria.jpg'
            ],
            [
                'name' => 'Textiles',
                'img' => '/img/categories/ropa.jpeg'
            ],
            [
                'name' => 'Velas',
                'img' => '/img/categories/velas.png'
            ],
            [
                'name' => 'Muebles',
                'img' => '/img/categories/muebles.jpg'
            ],
            //[
              //  'name' => 'Alfarería',
              //  'img' => ''
            //],
            [
                'name' => 'Cerámica',
                'img' => '/img/categories/ceramica.jpeg'
            ],
           // [
             //   'name' => 'Textiles',
              //  'img' => ''
            //],
           // [
           //     'name' => 'Madera',
           //     'img' => ''
           // ],
            [
                'name' => 'Instrumentos',
                'img' => '/img/categories/instrumentos.jpg'
            ],
            //[
            //    'name' => 'Arte con metal',
            //    'img' => ''
            //],
            [
                'name' => 'Vidrio',
                'img' => '/img/categories/vidrios.jpg'
            ],
            [
                'name' => 'Dulces típicos',
                'img' => '/img/categories/dulces.jpg'
            ],
        ];

        Category::factory(count($categories))->sequence( fn ($sqn) => $categories[$sqn->index])->create();
    }
}
