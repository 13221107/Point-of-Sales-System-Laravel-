<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('unit_price',10,2);
            $table->decimal('subtotal',10,2);
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('transaction_id')->references('id')->on(table: 'transactions');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_items');
        schema::table('transaction_items', function (Blueprint $table) {
            $table->dropForeign('transaction_items_transaction_id_foreign');
        });
        Schema::table('transaction_items', function (Blueprint $table) {
            $table->dropForeign('transaction_items_product_id_');
        });
    }
};
