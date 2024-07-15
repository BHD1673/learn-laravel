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
        Schema::create('don_hang', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_nguoi_dung')->index('id_nguoi_dung');
            $table->integer('id_dia_chi_nguoi_dung')->nullable()->index('id_dia_chi_nguoi_dung');
            $table->timestamp('ngay_dat_hang')->useCurrent();
            $table->integer('tong_tien')->nullable();
            $table->boolean('trang_thai')->nullable()->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_hang');
    }
};
