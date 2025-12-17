<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReceiptSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('receipts')->insert([[
                'date' => now()->subDays(25)->format('Y-m-d'),
                'printed_by_user_id' => 1,
                
            ],
            [
                'date' => now()->subDays(22)->format('Y-m-d'),
                'printed_by_user_id' => 2,
                
            ],
            [
                'date' => now()->subDays(18)->format('Y-m-d'),
                'printed_by_user_id' => 3,
                
            ],
            [
                'date' => now()->subDays(15)->format('Y-m-d'),
                'printed_by_user_id' => 4,
                
            ],
            [
                'date' => now()->subDays(12)->format('Y-m-d'),
                'printed_by_user_id' => 5,
                
            ],
            [
                'date' => now()->subDays(9)->format('Y-m-d'),
                'printed_by_user_id' => 6,
                
            ],
            [
                'date' => now()->subDays(7)->format('Y-m-d'),
                'printed_by_user_id' => 7,
                
            ],
            [
                'date' => now()->subDays(5)->format('Y-m-d'),
                'printed_by_user_id' => 8,
                
            ],
            [
                'date' => now()->subDays(3)->format('Y-m-d'),
                'printed_by_user_id' => 9,
                
            ],
            [
                'date' => now()->subDays(1)->format('Y-m-d'),
                'printed_by_user_id' => 10,
                
            ],
        ]);

    }
}