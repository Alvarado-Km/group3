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
            'comment' => 'Este producto esta hecho de muy buena calidad',
            ],
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
                'rating' => 2,
                'comment' => 'El producto es regular, podría mejorar',
            ],
            [
                'user_id' => $this->users()->random(),
                'product_id' => $this->product()->random(),
                'rating' => 1,
                'comment' => 'No estoy satisfecho con la calidad del producto',
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
                'rating' => 2,
                'comment' => 'No es lo que esperaba, la calidad puede mejorar',
            ],
        ];

        Review::factory(count($reviews))->sequence( fn ($sqn) => $reviews[$sqn->index])->create();
    }
}
