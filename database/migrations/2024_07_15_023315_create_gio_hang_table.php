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
        Schema::create('gio_hang', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_nguoi_dung')->nullable()->index('id_nguoi_dung');
            $table->string('session_guest', 225)->nullable();
            $table->integer('id_san_pham_bien_the_1')->nullable()->index('gio_hang_ibfk_2');
            $table->integer('id_san_pham_bien_the_2')->nullable()->index('gio_hang_ibfk_3');
            $table->integer('id_san_pham_bien_the_3')->nullable()->index('gio_hang_ibfk_4');
            $table->integer('id_san_pham_bien_the_4')->nullable()->index('gio_hang_ibfk_5');
            $table->integer('id_san_pham_bien_the_5')->nullable()->index('gio_hang_ibfk_6');
            $table->integer('so_luong')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gio_hang');
    }
};
