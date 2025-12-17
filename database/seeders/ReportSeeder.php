<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reports')->insert([
            [
                'period_start' => now()->startOfMonth()->format('Y-m-d'),
                'period_end' => now()->endOfMonth()->format('Y-m-d'),
                'report_type' => 'Monthly Sales Report',
                'generated_by_user_id' => 8, // Administrator
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'period_start' => now()->subMonth()->startOfMonth()->format('Y-m-d'),
                'period_end' => now()->subMonth()->endOfMonth()->format('Y-m-d'),
                'report_type' => 'Monthly Sales Report',
                'generated_by_user_id' => 4, // Manager
                'created_at' => now()->subMonth(),
                'updated_at' => now()->subMonth(),
            ],
            [
                'period_start' => now()->startOfWeek()->format('Y-m-d'),
                'period_end' => now()->endOfWeek()->format('Y-m-d'),
                'report_type' => 'Weekly Inventory Report',
                'generated_by_user_id' => 6, // Inventory Staff
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'period_start' => now()->startOfQuarter()->format('Y-m-d'),
                'period_end' => now()->endOfQuarter()->format('Y-m-d'),
                'report_type' => 'Quarterly Financial Report',
                'generated_by_user_id' => 9, // Administrator
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'period_start' => now()->subWeek()->startOfWeek()->format('Y-m-d'),
                'period_end' => now()->subWeek()->endOfWeek()->format('Y-m-d'),
                'report_type' => 'Weekly Sales Report',
                'generated_by_user_id' => 5, // Manager
                'created_at' => now()->subWeek(),
                'updated_at' => now()->subWeek(),
            ],
            [
                'period_start' => now()->format('Y-m-d'),
                'period_end' => now()->format('Y-m-d'),
                'report_type' => 'Daily Sales Report',
                'generated_by_user_id' => 1, // Cashier
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'period_start' => now()->startOfYear()->format('Y-m-d'),
                'period_end' => now()->endOfYear()->format('Y-m-d'),
                'report_type' => 'Annual Performance Report',
                'generated_by_user_id' => 10, // Administrator
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'period_start' => now()->subDays(7)->format('Y-m-d'),
                'period_end' => now()->format('Y-m-d'),
                'report_type' => 'Product Performance Report',
                'generated_by_user_id' => 7, // Inventory Staff
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'period_start' => now()->startOfMonth()->format('Y-m-d'),
                'period_end' => now()->format('Y-m-d'),
                'report_type' => 'Customer Transaction Report',
                'generated_by_user_id' => 4, // Manager
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'period_start' => now()->subMonths(3)->format('Y-m-d'),
                'period_end' => now()->format('Y-m-d'),
                'report_type' => 'Tax Compliance Report',
                'generated_by_user_id' => 8, // Administrator
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}