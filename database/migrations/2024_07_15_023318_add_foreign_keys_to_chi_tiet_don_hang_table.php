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
        Schema::table('chi_tiet_don_hang', function (Blueprint $table) {
            $table->foreign(['id_don_hang'], 'chi_tiet_don_hang_ibfk_1')->references(['id'])->on('don_hang')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_1'], 'chi_tiet_don_hang_ibfk_2')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_2'], 'chi_tiet_don_hang_ibfk_3')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_3'], 'chi_tiet_don_hang_ibfk_4')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_4'], 'chi_tiet_don_hang_ibfk_5')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_5'], 'chi_tiet_don_hang_ibfk_6')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chi_tiet_don_hang', function (Blueprint $table) {
            $table->dropForeign('chi_tiet_don_hang_ibfk_1');
            $table->dropForeign('chi_tiet_don_hang_ibfk_2');
            $table->dropForeign('chi_tiet_don_hang_ibfk_3');
            $table->dropForeign('chi_tiet_don_hang_ibfk_4');
            $table->dropForeign('chi_tiet_don_hang_ibfk_5');
            $table->dropForeign('chi_tiet_don_hang_ibfk_6');
        });
    }
};
