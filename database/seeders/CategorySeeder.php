<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Beverages',
                'description' => 'Includes soft drinks, juices, coffee, and tea products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Snacks',
                'description' => 'Covers chips, biscuits, candies, and other light foods.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Dairy Products',
                'description' => 'Milk, cheese, yogurt, and other dairy-based products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Personal Care',
                'description' => 'Shampoos, soaps, toothpaste, and hygiene essentials.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Household Supplies',
                'description' => 'Detergents, cleaning materials, and other home supplies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Frozen Goods',
                'description' => 'Frozen meats, seafood, vegetables, and ready-to-cook meals.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Bakery Items',
                'description' => 'Cakes, bread, pastries, and other baked goods.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Health & Wellness',
                'description' => 'Vitamins, supplements, and other health-related products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_name' => 'Canned Goods',
                'description' => 'Canned fruits, vegetables, meats, and soups.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_Name' => 'Stationery',
                'description' => 'Office and school supplies like pens, paper, and notebooks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
