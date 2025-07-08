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
                'description' => 'Esta silla está hecha con madera muy resistente',
                'price' => 10.00,
                'stock_quantity' => 2,
                'category_id' => Category::where('name', 'Muebles')->first()->id,
                'user_id' => $this->users()->random(),
                'story' => 'En una cabaña enclavada en el corazón del bosque, un artesano selecciona cuidadosamente la mejor madera para crear sillas que no solo brindan comodidad, sino que también cuentan historias de la naturaleza misma.'
            ],
            [
                'name' => 'Silla Artesanal',
                'description' => 'Esta silla está hecha con madera muy resistente y tallada a mano.',
                'price' => 50.00,
                'stock_quantity' => 5,
                'category_id' => Category::where('name', 'Muebles')->first()->id,
                'story' => 'Cada curva de esta silla ha sido esculpida a mano con cuidado y pasión. Inspirada en las tradiciones de la carpintería ancestral, es una obra de arte que combina durabilidad y belleza.',
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Jarrón de Cerámica',
                'description' => 'Jarrón pintado a mano con diseños tradicionales.',
                'price' => 30.00,
                'stock_quantity' => 10,
                'category_id' => Category::where('name', 'Cerámica')->first()->id,
                'story' => 'Este jarrón cuenta la historia de la tierra y el fuego, moldeado por manos expertas que siguen técnicas de alfarería de siglos pasados.'
            ],
            [
                'name' => 'Tapíz Andino',
                'description' => 'Tapíz hecho a mano con lana de alpaca.',
                'price' => 80.00,
                'stock_quantity' => 3,
                'category_id' => Category::where('name', 'Textiles y bordados')->first()->id,
                'story' => 'Tejido a mano en los Andes, este tapiz representa los paisajes majestuosos de montañas y valles.'
            ],
            [
                'name' => 'Canasta de Mimbre',
                'description' => 'Canasta tejida a mano ideal para decoraciones.',
                'price' => 25.00,
                'stock_quantity' => 15,
                'category_id' =>  Category::where('name', 'Textiles y bordados')->first()->id,
                'story' => 'Tejida con fibras de mimbre recogidas a mano, esta canasta combina utilidad con una belleza natural.'
            ],
            [
                'name' => 'Collar de cuencas',
                'description' => 'Collar hecho a mano con cuencas de vidrio y piedras naturales.',
                'price' => 20.00,
                'stock_quantity' => 25,
                'category_id' => Category::where('name', 'Joyería y bisutería')->first()->id,
                'story' => 'Cada cuenca de este collar ha sido seleccionada meticulosamente por su brillo y belleza.'
            ],
            [
                'name' => 'Escultura de Piedra',
                'description' => 'Escultura tallada a mano en piedra volcánica.',
                'price' => 60.00,
                'stock_quantity' => 7,
                'category_id' => Category::where('name', 'Cerámica')->first()->id,
                'story' => 'Tallada en piedra volcánica, esta escultura representa la fuerza y la resistencia de la tierra.'
            ],
            [
                'name' => 'Bolso de Tela',
                'description' => 'Bolso hecho a mano con tejidos tradicionales.',
                'price' => 40.00,
                'stock_quantity' => 12,
                'category_id' => Category::where('name', 'Textiles y bordados')->first()->id,
                'story' => 'Tejido con hilos de tradición, este bolso refleja las manos de artesanos que han perfeccionado su arte.'
            ],
            [
                'name' => 'Alfombra de Lana',
                'description' => 'Alfombra tejida a mano con lana natural.',
                'price' => 150.00,
                'stock_quantity' => 4,
                'category_id' => Category::where('name', 'Textiles y bordados')->first()->id,
                'story' => 'Esta alfombra de lana natural trae la calidez de los pastos alpinos directamente a tu hogar.'
            ],
            [
                'name' => 'Lámpara de Vidrio',
                'description' => 'Lámpara artesanal hecha con vidrio reciclado.',
                'price' => 45.00,
                'stock_quantity' => 6,
                'category_id' => Category::where('name', 'Vidrio')->first()->id,
                'story' => 'Esta lámpara hecha de vidrio reciclado ilumina el hogar y brilla como un recordatorio de la sostenibilidad.'
            ],
            [
                'name' => 'Caja de Madera',
                'description' => 'Caja decorativa tallada a mano en madera.',
                'price' => 35.00,
                'stock_quantity' => 8,
                'category_id' => Category::where('name', 'Muebles')->first()->id,
                'story' => 'Tallada a mano, esta caja de madera es perfecta para guardar pequeños tesoros y decorar con elegancia.'
            ],
            [
                'name' => 'Máscara de Carnaval',
                'description' => 'Máscara pintada a mano con detalles únicos.',
                'price' => 55.00,
                'stock_quantity' => 9,
                'category_id' => Category::where('name', 'Joyería y bisutería')->first()->id,
                'story' => 'Cada máscara es única, pintada a mano para capturar la esencia vibrante de los festivales tradicionales.'
            ],
            [
                'name' => 'Sombrero de Paja',
                'description' => 'Sombrero tejido a mano con paja natural.',
                'price' => 15.00,
                'stock_quantity' => 20,
                'category_id' => Category::where('name', 'Textiles y bordados')->first()->id,
                'story' => 'Este sombrero de paja, tejido a mano, te protege del sol y añade un toque de estilo rústico.'
            ],
            [
                'name' => 'Cartera de Cuero',
                'description' => 'Cartera artesanal hecha de cuero genuino.',
                'price' => 70.00,
                'stock_quantity' => 5,
                'category_id' => Category::where('name', 'Textiles y bordados')->first()->id,
                'story' => 'Hecha a mano con cuero genuino, esta cartera ofrece durabilidad y un diseño elegante.'
            ],
            [
                'name' => 'Tazón de Barro',
                'description' => 'Tazón hecho a mano con barro natural.',
                'price' => 10.00,
                'stock_quantity' => 18,
                'category_id' => Category::where('name', 'Cerámica')->first()->id,
                'story' => 'Este tazón de barro hecho a mano te conecta con la simplicidad y la tradición.'
            ],
            [
                'name' => 'Flauta de bambú',
                'description' => 'Un instrumento de viento hecho de caña de bambú.',
                'price' => 20.00,
                'stock_quantity' => 8,
                'category_id' => Category::where('name', 'Instrumentos')->first()->id,
                'story' => 'Hecha de bambú, esta flauta transporta a quien la toca a los paisajes tranquilos de los bosques.'
            ],
            [
                'name' => 'Tambor',
                'description' => 'Un instrumento de percusión hecho a mano utilizando materiales naturales como madera, cuero y cuerda.',
                'price' => 25.00,
                'stock_quantity' => 10,
                'category_id' => Category::where('name', 'Instrumentos')->first()->id,
                'story' => 'Este tambor, hecho a mano, resuena con la energía de las ceremonias antiguas.'
            ],
            [
                'name' => 'Maracas',
                'description' => 'Son instrumentos hechos a mano con materiales como calabazas secas, cocos o madera, que se rellenan con semillas.',
                'price' => 20.00,
                'stock_quantity' => 5,
                'category_id' => Category::where('name', 'Instrumentos')->first()->id,
                'story' => 'Cada maraca está hecha a mano, creando sonidos rítmicos que evocan festividades llenas de vida.'
            ],
            [
                'name' => 'Vela de vainilla',
                'description' => 'Una vela perfumada que emite un aroma cálido y dulce al encenderse.',
                'price' => 15.00,
                'stock_quantity' => 4,
                'category_id' => Category::where('name', 'Velas')->first()->id,
                'story' => 'Inspirada en los recuerdos de tardes lluviosas, cuando una abuela amorosa preparaba su receta secreta de postres.'
            ],
            [
                'name' => 'Vela de citronela',
                'description' => 'Vela perfumada con aceite esencial de citronela.',
                'price' => 8.00,
                'stock_quantity' => 9,
                'category_id' => Category::where('name', 'Velas')->first()->id,
                'story' => 'Perfecta para ahuyentar insectos y perfumar el ambiente con un aroma fresco y revitalizante.'
            ],
            [
                'name' => 'Ventana colorida',
                'description' => 'Una ventana hecha a mano, a menudo con marcos de madera o metal y decorada con vidrios o cristales de colores.',
                'price' => 50.00,
                'stock_quantity' => 5,
                'category_id' => Category::where('name', 'Vidrio')->first()->id,
                'story' => 'Inspirada en las casas coloniales, esta ventana fue creada para traer luz y color a cualquier habitación.',
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Ventana francesa',
                'description' => 'Una ventana con un diseño tradicional que suele tener marcos de madera pintados o barnizados a mano.',
                'price' => 20.00,
                'stock_quantity' => 4,
                'category_id' => Category::where('name', 'Vidrio')->first()->id,
                'story' => 'El diseño clásico de la ventana francesa añade un toque de elegancia a cualquier hogar, inspirado en la arquitectura europea.',
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Florero',
                'description' => 'Un recipiente hecho a mano, con una variedad de materiales como cerámica, vidrio, madera, metal.',
                'price' => 10.00,
                'stock_quantity' => 2,
                'category_id' => Category::where('name', 'Cerámica')->first()->id,
                'story' => 'Este florero fue moldeado y pintado a mano por artesanos locales, cada pieza es única.',
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Aretes de hilo',
                'description' => 'Joyas hechas a mano utilizando hilos, a menudo de materiales como algodón.',
                'price' => 10.00,
                'stock_quantity' => 20,
                'category_id' => Category::where('name', 'Joyería y bisutería')->first()->id,
                'story' => 'Estos aretes combinan técnicas tradicionales de tejido con un diseño moderno, inspirados en la cultura andina.',
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Vela arcoíris',
                'description' => 'Vela decorativa que presenta franjas de colores dispuestas en un patrón de arcoíris.',
                'price' => 15.00,
                'stock_quantity' => 10,
                'category_id' => Category::where('name', 'Velas')->first()->id,
                'story' => 'Esta vela simboliza la esperanza y la diversidad, hecha a mano por artesanos que cuidan cada detalle en la mezcla de colores.',
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Pulsera de tela',
                'description' => 'Pulsera hecha a mano con telas de colores vibrantes.',
                'price' => 10.00,
                'stock_quantity' => 20,
                'category_id' => Category::where('name', 'Joyería y bisutería')->first()->id,
                'story' => 'Esta pulsera es creada utilizando técnicas ancestrales de tejido, llevando consigo la historia de las culturas textiles locales.',
                'user_id' => $this->users()->random(),
            ],
            [
                'name' => 'Collar de piedras',
                'description' => 'Collar hecho a mano utilizando piedras naturales seleccionadas cuidadosamente.',
                'price' => 10.00,
                'stock_quantity' => 20,
                'category_id' => Category::where('name', 'Joyería y bisutería')->first()->id,
                'story' => 'Cada piedra de este collar cuenta una historia, extraídas de las montañas y seleccionadas por su belleza natural.',
                'user_id' => $this->users()->random(),
            ]
        ];

        Product::factory(count($products))->sequence(fn($sqn) => $products[$sqn->index])->create();
    }
}
