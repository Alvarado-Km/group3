<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products_ids = Product::pluck('id');

        Post::factory($products_ids->count())->sequence(fn ($sqn) => [
            'product_id' => $products_ids[$sqn->index]
        ])->create();
    }
}
