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
        Schema::table('don_hang', function (Blueprint $table) {
            $table->foreign(['id_nguoi_dung'], 'don_hang_ibfk_1')->references(['id'])->on('nguoi_dung')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_dia_chi_nguoi_dung'], 'don_hang_ibfk_2')->references(['id'])->on('dia_chi_nguoi_dung')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('don_hang', function (Blueprint $table) {
            $table->dropForeign('don_hang_ibfk_1');
            $table->dropForeign('don_hang_ibfk_2');
        });
    }
};
