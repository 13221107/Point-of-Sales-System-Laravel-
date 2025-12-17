<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            // Electronics (category_id: 1)
            ['category_id' => 1, 'product_name' => 'Wireless Bluetooth Headphones', 'price' => 2500, 'description' => 'High-quality wireless headphones with noise cancellation and 20-hour battery life', 'stocklevel' => 50, 'is_test_record' => false],
            ['category_id' => 1, 'product_name' => 'Smart Watch Pro', 'price' => 8500, 'description' => 'Feature-rich smartwatch with fitness tracking, heart rate monitor, and GPS', 'stocklevel' => 30, 'is_test_record' => false],
            
            // Clothing (category_id: 2)
            ['category_id' => 2, 'product_name' => 'Cotton T-Shirt', 'price' => 350, 'description' => 'Premium 100% cotton t-shirt available in multiple colors and sizes', 'stocklevel' => 200, 'is_test_record' => false],
            ['category_id' => 2, 'product_name' => 'Denim Jeans', 'price' => 1200, 'description' => 'Classic fit denim jeans, durable and comfortable for everyday wear', 'stocklevel' => 80, 'is_test_record' => false],
            
            // Food & Beverages (category_id: 3)
            ['category_id' => 3, 'product_name' => 'Organic Green Tea', 'price' => 280, 'description' => 'Premium organic green tea leaves, 50 tea bags per box', 'stocklevel' => 150, 'is_test_record' => false],
            ['category_id' => 3, 'product_name' => 'Dark Chocolate Bar', 'price' => 120, 'description' => '70% cacao dark chocolate bar, 100g, imported from Belgium', 'stocklevel' => 300, 'is_test_record' => false],
            
            // Home & Garden (category_id: 4)
            ['category_id' => 4, 'product_name' => 'Indoor Plant Pot Set', 'price' => 650, 'description' => 'Set of 3 ceramic plant pots with drainage holes, perfect for succulents', 'stocklevel' => 60, 'is_test_record' => false],
            ['category_id' => 4, 'product_name' => 'LED Desk Lamp', 'price' => 1200, 'description' => 'Adjustable LED desk lamp with USB charging port and touch controls', 'stocklevel' => 45, 'is_test_record' => false],
            
            // Sports & Fitness (category_id: 5)
            ['category_id' => 5, 'product_name' => 'Yoga Mat', 'price' => 890, 'description' => 'Non-slip yoga mat with carrying strap, 6mm thickness', 'stocklevel' => 70, 'is_test_record' => false],
            ['category_id' => 5, 'product_name' => 'Water Bottle 1L', 'price' => 450, 'description' => 'Insulated stainless steel water bottle keeps drinks cold for 24 hours', 'stocklevel' => 100, 'is_test_record' => false],
        ]);
            
    }
}