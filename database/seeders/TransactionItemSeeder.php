<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_items')->insert([
            // Transaction #1 (3 items)
            [
                'quantity' => 1,
                'unit_price' => 2500.00,
                'subtotal' => 2500.00,
                'transaction_id' => 1,
                'product_id' => 1, // Wireless Bluetooth Headphones
                
            ],
            [
                'quantity' => 2,
                'unit_price' => 350.00,
                'subtotal' => 700.00,
                'transaction_id' => 1,
                'product_id' => 3, // Cotton T-Shirt
                
            ],
            [
                'quantity' => 3,
                'unit_price' => 280.00,
                'subtotal' => 840.00,
                'transaction_id' => 1,
                'product_id' => 5, // Organic Green Tea
                
            ],

            // Transaction #2 (2 items)
            [
                'quantity' => 1,
                'unit_price' => 8500.00,
                'subtotal' => 8500.00,
                'transaction_id' => 2,
                'product_id' => 2, // Smart Watch Pro
                
            ],
            [
                'quantity' => 2,
                'unit_price' => 890.00,
                'subtotal' => 1780.00,
                'transaction_id' => 2,
                'product_id' => 9, // Yoga Mat
                
            ],

            // Transaction #3 (4 items)
            [
                'quantity' => 1,
                'unit_price' => 1200.00,
                'subtotal' => 1200.00,
                'transaction_id' => 3,
                'product_id' => 4, // Denim Jeans
                
            ],
            [
                'quantity' => 2,
                'unit_price' => 450.00,
                'subtotal' => 900.00,
                'transaction_id' => 3,
                'product_id' => 10, // Water Bottle 1L
                
            ],
            [
                'quantity' => 5,
                'unit_price' => 120.00,
                'subtotal' => 600.00,
                'transaction_id' => 3,
                'product_id' => 6, // Dark Chocolate Bar
                
            ],
            [
                'quantity' => 1,
                'unit_price' => 650.00,
                'subtotal' => 650.00,
                'transaction_id' => 3,
                'product_id' => 7, // Indoor Plant Pot Set
                
            ],

            // Transaction #4 (3 items)
            [
                'quantity' => 1,
                'unit_price' => 1200.00,
                'subtotal' => 1200.00,
                'transaction_id' => 4,
                'product_id' => 8, // LED Desk Lamp
                
            ],
            [
                'quantity' => 3,
                'unit_price' => 350.00,
                'subtotal' => 1050.00,
                'transaction_id' => 4,
                'product_id' => 3, // Cotton T-Shirt
                
            ],
            [
                'quantity' => 2,
                'unit_price' => 2500.00,
                'subtotal' => 5000.00,
                'transaction_id' => 4,
                'product_id' => 1, // Wireless Bluetooth Headphones
                
            ],

            // Transaction #5 (2 items)
            [
                'quantity' => 1,
                'unit_price' => 890.00,
                'subtotal' => 890.00,
                'transaction_id' => 5,
                'product_id' => 9, // Yoga Mat
                
            ],
            [
                'quantity' => 1,
                'unit_price' => 1200.00,
                'subtotal' => 1200.00,
                'transaction_id' => 5,
                'product_id' => 4, // Denim Jeans
                
            ],

            // Transaction #6 (3 items)
            [
                'quantity' => 2,
                'unit_price' => 280.00,
                'subtotal' => 560.00,
                'transaction_id' => 6,
                'product_id' => 5, // Organic Green Tea
                
            ],
            [
                'quantity' => 4,
                'unit_price' => 120.00,
                'subtotal' => 480.00,
                'transaction_id' => 6,
                'product_id' => 6, // Dark Chocolate Bar
                
            ],
            [
                'quantity' => 1,
                'unit_price' => 8500.00,
                'subtotal' => 8500.00,
                'transaction_id' => 6,
                'product_id' => 2, // Smart Watch Pro
                
            ],

            // Transaction #7 (4 items)
            [
                'quantity' => 1,
                'unit_price' => 650.00,
                'subtotal' => 650.00,
                'transaction_id' => 7,
                'product_id' => 7, // Indoor Plant Pot Set
                
            ],
            [
                'quantity' => 2,
                'unit_price' => 450.00,
                'subtotal' => 900.00,
                'transaction_id' => 7,
                'product_id' => 10, // Water Bottle 1L
                
            ],
            [
                'quantity' => 1,
                'unit_price' => 1200.00,
                'subtotal' => 1200.00,
                'transaction_id' => 7,
                'product_id' => 8, // LED Desk Lamp
                
            ],
            [
                'quantity' => 3,
                'unit_price' => 350.00,
                'subtotal' => 1050.00,
                'transaction_id' => 7,
                'product_id' => 3, // Cotton T-Shirt
                
            ],

            // Transaction #8 (2 items)
            [
                'quantity' => 2,
                'unit_price' => 890.00,
                'subtotal' => 1780.00,
                'transaction_id' => 8,
                'product_id' => 9, // Yoga Mat
                
            ],
            [
                'quantity' => 1,
                'unit_price' => 2500.00,
                'subtotal' => 2500.00,
                'transaction_id' => 8,
                'product_id' => 1, // Wireless Bluetooth Headphones
                
            ],

            // Transaction #9 (3 items)
            [
                'quantity' => 1,
                'unit_price' => 8500.00,
                'subtotal' => 8500.00,
                'transaction_id' => 9,
                'product_id' => 2, // Smart Watch Pro
                
            ],
            [
                'quantity' => 2,
                'unit_price' => 1200.00,
                'subtotal' => 2400.00,
                'transaction_id' => 9,
                'product_id' => 4, // Denim Jeans
                
            ],
            [
                'quantity' => 1,
                'unit_price' => 650.00,
                'subtotal' => 650.00,
                'transaction_id' => 9,
                'product_id' => 7, // Indoor Plant Pot Set
                
            ],

            // Transaction #10 (4 items)
            [
                'quantity' => 3,
                'unit_price' => 280.00,
                'subtotal' => 840.00,
                'transaction_id' => 10,
                'product_id' => 5, // Organic Green Tea
                
            ],
            [
                'quantity' => 2,
                'unit_price' => 450.00,
                'subtotal' => 900.00,
                'transaction_id' => 10,
                'product_id' => 10, // Water Bottle 1L
                
            ],
            [
                'quantity' => 1,
                'unit_price' => 1200.00,
                'subtotal' => 1200.00,
                'transaction_id' => 10,
                'product_id' => 8, // LED Desk Lamp
                
            ],
            [
                'quantity' => 5,
                'unit_price' => 120.00,
                'subtotal' => 600.00,
                'transaction_id' => 10,
                'product_id' => 6, // Dark Chocolate Bar
                
            ],
        ]);
    }
}