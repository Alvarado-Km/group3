<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            'user_id' => $this->users()->random(),
            'post_id' => $this->posts()->random(),
            'rating' => 3,
            'comment' => BUENO,
            'post_date' => 12/07/2035,
        ];

        Review::factory(count($reviews))->sequence( fn ($sqn) => $reviews[$sqn->index])->create();
    }
}
