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
        Schema::table('tb_gio_hang', function (Blueprint $table) {
            $table->string('ten_nguoi_dung')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_gio_hang', function (Blueprint $table) {
            $table->dropColumn('ten_nguoi_dung');
        });
    }
};
