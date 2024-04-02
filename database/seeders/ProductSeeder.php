<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder {
    /**
     * Run the database seeds.
     */

    public function run(): void {
        Product::create([
            'title' => 'Tempor reprehenderit nostrud nisi ea amet deserunt officia proident consectetur.',
            'price' => 29.99,
            'quantity' => 3,
            'category_id' => 1,
            'brand_id' => 1,
            'description' => 'Minim nisi id irure anim quis labore exercitation laborum.'
        ]);
    }
}
