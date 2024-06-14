<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Silla',
                'description' => 'Esta silla esta hecha con madera muy resisgtente',
                'price' => 10,
                'stock_quantity' => 2,
                'category_id' => 'Madera',
                'user_id' => 'Pablo Sanchez',
            ],
            [
                'name' => 'Silla Artesanal',
                'description' => 'Esta silla está hecha con madera muy resistente y tallada a mano.',
                'price' => 50,
                'stock_quantity' => 5,
                'category_id' => 'Muebles',
                'user_id' => 'Pablo Sanchez',
            ],
            [
                'name' => 'Jarrón de Cerámica',
                'description' => 'Jarrón pintado a mano con diseños tradicionales.',
                'price' => 30,
                'stock_quantity' => 10,
                'category_id' => 'Cerámica',
                'user_id' => 'Maria Gonzalez',
            ],
            [
                'name' => 'Tapiz Andino',
                'description' => 'Tapiz hecho a mano con lana de alpaca.',
                'price' => 80,
                'stock_quantity' => 3,
                'category_id' => 'Textiles',
                'user_id' => 'Carlos Ramirez',
            ],
            [
                'name' => 'Canasta de Mimbre',
                'description' => 'Canasta tejida a mano ideal para decoraciones.',
                'price' => 25,
                'stock_quantity' => 15,
                'category_id' => 'Mimbre',
                'user_id' => 'Ana Fernandez',
            ],
            [
                'name' => 'Collar de Cuentas',
                'description' => 'Collar hecho a mano con cuentas de vidrio y piedras naturales.',
                'price' => 20,
                'stock_quantity' => 25,
                'category_id' => 'Joyería',
                'user_id' => 'Luis Martinez',
            ],
            [
                'name' => 'Escultura de Piedra',
                'description' => 'Escultura tallada a mano en piedra volcánica.',
                'price' => 60,
                'stock_quantity' => 7,
                'category_id' => 'Escultura',
                'user_id' => 'Sofia Diaz',
            ],
            [
                'name' => 'Bolso de Tela',
                'description' => 'Bolso hecho a mano con tejidos tradicionales.',
                'price' => 40,
                'stock_quantity' => 12,
                'category_id' => 'Accesorios',
                'user_id' => 'Miguel Torres',
            ],
            [
                'name' => 'Alfombra de Lana',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 150,
                'stock_quantity' => 4,
                'category_id' => 'Textiles',
                'user_id' => 'Lucia Chavez',
            ],
            [
                'name' => 'Lámpara de Vidrio',
                'description' => 'Lámpara artesanal hecha con vidrio reciclado.',
                'price' => 45,
                'stock_quantity' => 6,
                'category_id' => 'Decoración',
                'user_id' => 'Ricardo Flores',
            ],
            [
                'name' => 'Caja de Madera',
                'description' => 'Caja decorativa tallada a mano en madera.',
                'price' => 35,
                'stock_quantity' => 8,
                'category_id' => 'Madera',
                'user_id' => 'Elena Moreno',
            ],
            [
                'name' => 'Máscara de Carnaval',
                'description' => 'Máscara pintada a mano con detalles únicos.',
                'price' => 55,
                'stock_quantity' => 9,
                'category_id' => 'Cerámica',
                'user_id' => 'Fernando Rios',
            ],
            [
                'name' => 'Sombrero de Paja',
                'description' => 'Sombrero tejido a mano con paja natural.',
                'price' => 15,
                'stock_quantity' => 20,
                'category_id' => 'Accesorios',
                'user_id' => 'Isabella Vega',
            ],
            [
                'name' => 'Cartera de Cuero',
                'description' => 'Cartera artesanal hecha de cuero genuino.',
                'price' => 70,
                'stock_quantity' => 5,
                'category_id' => 'Joyería',
                'user_id' => 'Jorge Herrera',
            ],
            [
                'name' => 'Portavelas de Cerámica',
                'description' => 'Portavelas decorativo hecho a mano.',
                'price' => 20,
                'stock_quantity' => 14,
                'category_id' => 'Cerámica',
                'user_id' => 'Daniela Ruiz',
            ],
            [
                'name' => 'Tazón de Barro',
                'description' => 'Tazón hecho a mano con barro natural.',
                'price' => 10,
                'stock_quantity' => 18,
                'category_id' => 'Cerámica',
                'user_id' => 'Alberto Vargas',
            ]
            ];

            Product::factory(count($products))->sequence( fn ($sqn) => $products[$sqn->index])->create();
    }
}
