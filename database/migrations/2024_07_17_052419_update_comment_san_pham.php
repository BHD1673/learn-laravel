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
        Schema::table('tb_binh_luan', function (Blueprint $table) {
            $table->string('ten_nguoi_dung')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
            $table->dropColumn('thoi_gian');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_binh_luan', function (Blueprint $table) {
            $table->dropColumn('ten_nguoi_dung');
            $table->dropTimestamps();
        });
    }
};
