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
        ];

        Category::factory(count($categories))->sequence( fn ($sqn) => ['name' => $categories[$sqn->index]])->create();
    }
}
