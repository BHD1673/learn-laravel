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
        Schema::create('chi_tiet_don_hang', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_don_hang')->index('id_don_hang');
            $table->integer('id_san_pham_bien_the_1')->nullable()->index('id_san_pham_bien_the_1');
            $table->integer('id_san_pham_bien_the_2')->nullable()->index('id_san_pham_bien_the_2');
            $table->integer('id_san_pham_bien_the_3')->nullable()->index('id_san_pham_bien_the_3');
            $table->integer('id_san_pham_bien_the_4')->nullable()->index('id_san_pham_bien_the_4');
            $table->integer('id_san_pham_bien_the_5')->nullable()->index('id_san_pham_bien_the_5');
            $table->integer('so_luong')->nullable();
            $table->integer('thanh_tien')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_don_hang');
    }
};
