<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            return User::pluck('id');
        });
    }
    public function posts()
    {
        return once(function () {
            return Post::pluck('id');
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
            'name' => $this->faker->words($this->faker->randomDigitNotNull(), true),
            'description' => $this->faker->sentences(3, true),
            'price' => $this->faker->numberBetween(1, 50),
            'stock_quantity' => $this->faker->numberBetween(1, 50),
            'category_id' => $this->categories()->random(),
            'user_id' => $this->users()->random(),
            'post_id' => $this->posts()->random(),
        ];
    }
}


