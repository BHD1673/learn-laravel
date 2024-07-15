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
        Schema::table('gio_hang', function (Blueprint $table) {
            $table->foreign(['id_nguoi_dung'], 'gio_hang_ibfk_1')->references(['id'])->on('nguoi_dung')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_1'], 'gio_hang_ibfk_2')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_2'], 'gio_hang_ibfk_3')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_3'], 'gio_hang_ibfk_4')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_4'], 'gio_hang_ibfk_5')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_san_pham_bien_the_5'], 'gio_hang_ibfk_6')->references(['id'])->on('san_pham_bien_the')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gio_hang', function (Blueprint $table) {
            $table->dropForeign('gio_hang_ibfk_1');
            $table->dropForeign('gio_hang_ibfk_2');
            $table->dropForeign('gio_hang_ibfk_3');
            $table->dropForeign('gio_hang_ibfk_4');
            $table->dropForeign('gio_hang_ibfk_5');
            $table->dropForeign('gio_hang_ibfk_6');
        });
    }
};
