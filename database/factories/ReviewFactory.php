<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
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
            'user_id' => $this->users()->random(),
            'post_id' => $this->posts()->random(),
            'rating' => $this->faker->numberBetween(0,10),
            'comment' => $this->faker->sentence(),
            'post_date' => $this->faker->date(),
        ];
    }
}


