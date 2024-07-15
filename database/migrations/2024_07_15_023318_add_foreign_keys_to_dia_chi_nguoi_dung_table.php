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
        Schema::table('dia_chi_nguoi_dung', function (Blueprint $table) {
            $table->foreign(['id_nguoi_dung'], 'dia_chi_nguoi_dung_ibfk_1')->references(['id'])->on('nguoi_dung')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dia_chi_nguoi_dung', function (Blueprint $table) {
            $table->dropForeign('dia_chi_nguoi_dung_ibfk_1');
        });
    }
};
