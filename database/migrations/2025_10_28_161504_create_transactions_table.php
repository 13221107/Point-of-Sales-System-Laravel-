<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function Symfony\Component\Clock\now;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->date('transaction_date'); 
            $table->decimal('total_amount',10,2)->default(0);
            $table->string('status', length: 50 )->default('pending');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('receipt_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('receipt_id')->references('id')->on('receipts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_user_id_foreign');
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transaction_receipt_id_foreign');
        });
    }
};
