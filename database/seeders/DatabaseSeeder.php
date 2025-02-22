<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Shoe;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Shoe::create([
            'name' => 'Nike Air Max',
            'image' => 'https://via.placeholder.com/150',
            'price' => 120.99
        ]);

        Shoe::create([
            'name' => 'Adidas Superstar',
            'image' => 'https://via.placeholder.com/150',
            'price' => 99.99
        ]);

        Shoe::create([
            'name' => 'Puma Classic',
            'image' => 'https://via.placeholder.com/150',
            'price' => 89.99
        ]);
    }
}
