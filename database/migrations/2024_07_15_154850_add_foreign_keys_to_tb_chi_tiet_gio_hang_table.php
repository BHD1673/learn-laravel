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
        Schema::table('tb_chi_tiet_gio_hang', function (Blueprint $table) {
            $table->foreign(['gio_hang_id'], 'tb_chi_tiet_gio_hang_ibfk_1')->references(['id'])->on('tb_gio_hang')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['san_pham_id'], 'tb_chi_tiet_gio_hang_ibfk_2')->references(['id'])->on('tb_san_pham')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_chi_tiet_gio_hang', function (Blueprint $table) {
            $table->dropForeign('tb_chi_tiet_gio_hang_ibfk_1');
            $table->dropForeign('tb_chi_tiet_gio_hang_ibfk_2');
        });
    }
};
