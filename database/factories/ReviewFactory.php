<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{

    public function users()
    {
        return once(function () {
            return User::pluck('id');
        });
    }
    public function product()
    {
        return once(function () {
            return Product::pluck('id');
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->users()->random(),
            'product_id' => $this->product()->random(),
            'rating' => $this->faker->numberBetween(0,10),
            'comment' => $this->faker->sentence(),
        ];
    }
}


