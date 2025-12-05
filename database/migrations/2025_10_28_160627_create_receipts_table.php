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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('printed_by_user_id');

            $table->foreign('printed_by_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
        Schema::table('receipts', function (Blueprint $table) {
            $data->dropForeign('receipts_printed_by_user_id_foreign');
        });
    }
};
