<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    public function categories() {
        return once( function () {
            return Category::pluck('id');
        });
    }


    public function users() {
        return once( function () {
            return User::where('is_artisan', true)->pluck('id');
        });
    }

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
                'category_id' => 4,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Silla Artesanal',
                'description' => 'Esta silla está hecha con madera muy resistente y tallada a mano.',
                'price' => 50,
                'stock_quantity' => 5,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Jarrón de Cerámica',
                'description' => 'Jarrón pintado a mano con diseños tradicionales.',
                'price' => 30,
                'stock_quantity' => 10,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Tapiz Andino',
                'description' => 'Tapiz hecho a mano con lana de alpaca.',
                'price' => 80,
                'stock_quantity' => 3,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Canasta de Mimbre',
                'description' => 'Canasta tejida a mano ideal para decoraciones.',
                'price' => 25,
                'stock_quantity' => 15,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Collar de Cuentas',
                'description' => 'Collar hecho a mano con cuentas de vidrio y piedras naturales.',
                'price' => 20,
                'stock_quantity' => 25,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Escultura de Piedra',
                'description' => 'Escultura tallada a mano en piedra volcánica.',
                'price' => 60,
                'stock_quantity' => 7,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Bolso de Tela',
                'description' => 'Bolso hecho a mano con tejidos tradicionales.',
                'price' => 40,
                'stock_quantity' => 12,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Alfombra de Lana',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 150,
                'stock_quantity' => 4,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Lámpara de Vidrio',
                'description' => 'Lámpara artesanal hecha con vidrio reciclado.',
                'price' => 45,
                'stock_quantity' => 6,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Caja de Madera',
                'description' => 'Caja decorativa tallada a mano en madera.',
                'price' => 35,
                'stock_quantity' => 8,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Máscara de Carnaval',
                'description' => 'Máscara pintada a mano con detalles únicos.',
                'price' => 55,
                'stock_quantity' => 9,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Sombrero de Paja',
                'description' => 'Sombrero tejido a mano con paja natural.',
                'price' => 15,
                'stock_quantity' => 20,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Cartera de Cuero',
                'description' => 'Cartera artesanal hecha de cuero genuino.',
                'price' => 70,
                'stock_quantity' => 5,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Portavelas de Cerámica',
                'description' => 'Portavelas decorativo hecho a mano.',
                'price' => 20,
                'stock_quantity' => 14,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Tazón de Barro',
                'description' => 'Tazón hecho a mano con barro natural.',
                'price' => 10,
                'stock_quantity' => 18,
                'category_id' => $this->categories()->random(),
                'user_id' => $this->users()->random(),
            ]
            ];

            Product::factory(count($products))->sequence( fn ($sqn) => $products[$sqn->index])->create();
    }
}
