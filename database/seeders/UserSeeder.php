<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'vendedor@example.com',
            'password' => 'password',
            'role_id' => 1
        ]);

        User::factory()->create([
            'email' => 'comprador@example.com',
            'password' => 'password',
            'role_id' => 2
        ]);

        User::factory(20)->create();
    }
}
