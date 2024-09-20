<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\Product;

class ReviewSeeder extends Seeder
{
    public function users() {
        return once( function () {
            return User::where('is_artisan', true)->pluck('id');
        });
    }
    public function product() {
        return once( function () {
            return Product::pluck('id');
        });
    }


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 3,
                'comment' => 'Este producto está hecho de muy buena calidad',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'El producto cumple con lo esperado',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 5,
                'comment' => 'Excelente calidad y buen precio',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'El producto es de buena calidad y estoy satisfecho',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'Muy satisfecho con la compra, lo recomendaría',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 5,
                'comment' => 'Muy buen producto, lo recomiendo',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 3,
                'comment' => 'Producto aceptable por el precio',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'Buen producto, entrega rápida',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 5,
                'comment' => 'Calidad superior, satisfecho con la compra',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'El producto superó mis expectativas',
            ],
            // Nuevas reseñas
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 3,
                'comment' => 'El producto es bueno, aunque esperaba algo más',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 5,
                'comment' => 'Perfecto, más de lo que esperaba',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'Buena relación calidad-precio, recomendable',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 5,
                'comment' => 'Sorprendentemente buena calidad, lo volvería a comprar',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 5,
                'comment' => 'Muy buena experiencia, lo recomendaría sin dudas',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 3,
                'comment' => 'Está bien, pero sigue siendo una buena compra',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'Cumple con lo prometido, satisfecho con la compra',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 5,
                'comment' => 'Increíble calidad por el precio, definitivamente lo recomiendo',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 4,
                'comment' => 'Muy buen producto, volvería a comprarlo',
            ],
        ];

        Review::factory(count($reviews))->sequence( fn ($sqn) => $reviews[$sqn->index])->create();
    }
}
