<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class ProductSeeder extends Seeder
{
    public function categories()
    {
        return once(function () {
            return Category::pluck('id');
        });
    }


    public function users()
    {
        return once(function () {
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
                'description' => 'Esta silla esta hecha con madera muy resistente',
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
                'category_id' => 4,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Jarrón de Cerámica',
                'description' => 'Jarrón pintado a mano con diseños tradicionales.',
                'price' => 30,
                'stock_quantity' => 10,
                'category_id' => 6,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Tapiz Andino',
                'description' => 'Tapiz hecho a mano con lana de alpaca.',
                'price' => 80,
                'stock_quantity' => 3,
                'category_id' => 2,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Canasta de Mimbre',
                'description' => 'Canasta tejida a mano ideal para decoraciones.',
                'price' => 25,
                'stock_quantity' => 15,
                'category_id' => 4,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Collar de cuencas',
                'description' => 'Collar hecho a mano con cuencas de vidrio y piedras naturales.',
                'price' => 20,
                'stock_quantity' => 25,
                'category_id' => 1,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Escultura de Piedra',
                'description' => 'Escultura tallada a mano en piedra volcánica.',
                'price' => 60,
                'stock_quantity' => 7,
                'category_id' => 6,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Bolso de Tela',
                'description' => 'Bolso hecho a mano con tejidos tradicionales.',
                'price' => 40,
                'stock_quantity' => 12,
                'category_id' => 2,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Alfombra de Lana',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 150,
                'stock_quantity' => 4,
                'category_id' => 2,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Lámpara de Vidrio',
                'description' => 'Lámpara artesanal hecha con vidrio reciclado.',
                'price' => 45,
                'stock_quantity' => 6,
                'category_id' => 11,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Caja de Madera',
                'description' => 'Caja decorativa tallada a mano en madera.',
                'price' => 35,
                'stock_quantity' => 8,
                'category_id' => 4,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Máscara de Carnaval',
                'description' => 'Máscara pintada a mano con detalles únicos.',
                'price' => 55,
                'stock_quantity' => 9,
                'category_id' => 2,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Sombrero de Paja',
                'description' => 'Sombrero tejido a mano con paja natural.',
                'price' => 15,
                'stock_quantity' => 20,
                'category_id' => 2,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Cartera de Cuero',
                'description' => 'Cartera artesanal hecha de cuero genuino.',
                'price' => 70,
                'stock_quantity' => 5,
                'category_id' => 1,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Portavelas de Cerámica',
                'description' => 'Portavelas decorativo hecho a mano.',
                'price' => 20,
                'stock_quantity' => 14,
                'category_id' => 6,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Tazón de Barro',
                'description' => 'Tazón hecho a mano con barro natural.',
                'price' => 10,
                'stock_quantity' => 18,
                'category_id' => 6,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Flauta de bambú',
                'description' => 'Un instrumento de viento hecho de caña de bambú.',
                'price' => 20,
                'stock_quantity' => 8,
                'category_id' => 9,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Tambor',
                'description' => 'Un instrumento de percusión hecho a mano utilizando materiales naturales como madera, cuero y cuerda.',
                'price' => 25,
                'stock_quantity' => 10,
                'category_id' => 9,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Maracas',
                'description' => 'Son instrumentos hechos a mano con materiales como calabazas secas, cocos o madera, que se rellenan con semillas.',
                'price' => 20,
                'stock_quantity' => 5,
                'category_id' => 9,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Vela de vainilla',
                'description' => 'Una vela perfumada que emite un aroma cálido y dulce al encenderse.',
                'price' => 15,
                'stock_quantity' => 4,
                'category_id' => 3,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Vela aromáticas',
                'description' => 'Velas perfumadas con aceites esenciales o fragancias sintéticas .',
                'price' => 10,
                'stock_quantity' => 4,
                'category_id' => 3,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Vela de citronela',
                'description' => 'vela perfumada con aceite esencial de citronela.',
                'price' => 8,
                'stock_quantity' => 9,
                'category_id' => 3,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Cocada',
                'description' => 'Un dulce tradicional hecho a base de coco rallado y azúcar.',
                'price' => 1,
                'stock_quantity' => 12,
                'category_id' => 12,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Maní dulce',
                'description' => 'es un snack elaborado con maní cubierto de una capa de caramelo.',
                'price' => 1,
                'stock_quantity' => 6,
                'category_id' => 12,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Dulce de tamarindo',
                'description' => 'Una golosina elaborada a partir de la pulpa del tamarindo, mezclada con azúcar.',
                'price' => 1,
                'stock_quantity' => 20,
                'category_id' => 12,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Ventana colorida',
                'description' => 'Una ventana hecha a mano, a menudo con marcos de madera o metal y decorada con vidrios o cristales de colores.',
                'price' => 50,
                'stock_quantity' => 5,
                'category_id' => 11,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Ventana francesa',
                'description' => 'Una ventana con un diseño tradicional que suele tener marcos de madera pintados o barnizados a mano.',
                'price' => 20,
                'stock_quantity' => 4,
                'category_id' => 11,
                'user_id' => $this->users()->random(),
            ], [
                'name' => 'Florero',
                'description' => 'Un recipiente hecho a mano, con una variedad de materiales como cerámica, vidrio, madera, metal.',
                'price' => 10,
                'stock_quantity' => 2,
                'category_id' => 11,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Aretes de hilo',
                'description' => 'Joyas hechas a mano utilizando hilos, a menudo de materiales como algodón.',
                'price' => 10,
                'stock_quantity' => 20,
                'category_id' => 1,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Pulseras de cuero',
                'description' => 'Accesorios hechos a mano que utilizan cuero genuino para su confección.',
                'price' => 15,
                'stock_quantity' => 10,
                'category_id' => 11,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Vela con flores de colores',
                'description' => 'Velas decorativas que incorporan flores secas, prensadas o artificiales en su diseño.',
                'price' => 15,
                'stock_quantity' => 10,
                'category_id' => 3,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Vela arcoíris',
                'description' => 'Vela decorativa que presenta franjas de colores dispuestas en un patrón de arcoíris.',
                'price' => 15,
                'stock_quantity' => 10,
                'category_id' => 3,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Blusa añilada',
                'description' => 'Prenda de vestir que ha sido teñida con el color añil, un tono de azul profundo.',
                'price' => 15,
                'stock_quantity' => 10,
                'category_id' => 2,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Anillo de minbre',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 10,
                'stock_quantity' => 25,
                'category_id' => 1,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Collar de perla',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 10,
                'stock_quantity' => 10,
                'category_id' => 1,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Pulsera de tela',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 10,
                'stock_quantity' => 20,
                'category_id' => 1,
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Collar de piedras',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 10,
                'stock_quantity' => 20,
                'category_id' => 1,
                'user_id' => $this->users()->random(),
            ],
        ];

        Product::factory(count($products))->sequence(fn($sqn) => $products[$sqn->index])->create();
    }
}
