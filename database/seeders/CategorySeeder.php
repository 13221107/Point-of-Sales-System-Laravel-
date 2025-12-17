<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([[
                'category_name' => 'Electronics',
                'description' => 'Electronic devices, gadgets, and accessories including smartphones, laptops, and audio equipment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Clothing',
                'description' => 'Apparel, fashion items, and accessories for men, women, and children',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Food & Beverages',
                'description' => 'Food products, snacks, beverages, and grocery items',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Home & Garden',
                'description' => 'Home decor, furniture, kitchen items, and gardening supplies',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Sports & Fitness',
                'description' => 'Sports equipment, fitness gear, and outdoor recreational items',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
            
        

    }
}