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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->date('period_start');
            $table->date('period_end');
            $table->timestamps();
            $table->string('report_type');
            $table->unsignedBigInteger('generated_by_user_id');
            
            $table->foreign('generated_by_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
        Schema::table('reports', function (Blueprint $table) {
            $table->dropForeign('reports_generated_by_user_id_foreign');
        });
    }
};
