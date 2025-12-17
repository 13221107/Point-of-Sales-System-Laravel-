<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transactions
        ')->insert([
            [
                'transaction_date' => now()->subDays(25)->format('Y-m-d'),
                'total_amount' => 4,040.00,
                'status' => 'completed',
                'user_id' => 1,
                'receipt_id' => 1,
                
            ],
            [
                'transaction_date' => now()->subDays(22)->format('Y-m-d'),
                'total_amount' => 10,280.00,
                'status' => 'pending',
                'user_id' => 2,
                'receipt_id' => 2,
                
            ],
            [
                'transaction_date' => now()->subDays(18)->format('Y-m-d'),
                'total_amount' => 3350.00,
                'status' => 'completed',
                'user_id' => 3,
                'receipt_id' => 3,
                
            ],
            [
                'transaction_date' => now()->subDays(15)->format('Y-m-d'),
                'total_amount' => 7250.00,
                'status' => 'processing',
                'user_id' => 4,
                'receipt_id' => 4,
                
            ],
            [
                'transaction_date' => now()->subDays(12)->format('Y-m-d'),
                'total_amount' => 2090.00,
                'status' => 'completed',
                'user_id' => 5,
                'receipt_id' => 5,
                
            ],
            [
                'transaction_date' => now()->subDays(9)->format('Y-m-d'),
                'total_amount' => 9,540.00,
                'status' => 'cancelled',
                'user_id' => 6,
                'receipt_id' => 6,
                
            ],
            [
                'transaction_date' => now()->subDays(7)->format('Y-m-d'),
                'total_amount' => 3,800.00,
                'status' => 'completed',
                'user_id' => 7,
                'receipt_id' => 7,
                
            ],
            [
                'transaction_date' => now()->subDays(5)->format('Y-m-d'),
                'total_amount' => 4280.00,
                'status' => 'pending',
                'user_id' => 8,
                'receipt_id' => 8,
                
            ],
            [
                'transaction_date' => now()->subDays(3)->format('Y-m-d'),
                'total_amount' => 11,550.00,
                'status' => 'completed',
                'user_id' => 9,
                'receipt_id' => 9,
                
            ],
            [
                'transaction_date' => now()->subDays(1)->format('Y-m-d'),
                'total_amount' => 3,540.00,
                'status' => 'processing',
                'user_id' => 10,
                'receipt_id' => 10,
                
            ],
        ]);
    }
}