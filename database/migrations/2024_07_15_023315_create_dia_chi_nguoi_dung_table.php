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
        Schema::create('dia_chi_nguoi_dung', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_nguoi_dung')->index('id_nguoi_dung');
            $table->string('ten_nguoi_nhan', 100)->nullable();
            $table->string('so_dien_thoai', 20)->nullable();
            $table->string('dia_chi')->nullable();
            $table->boolean('la_dia_chi_chinh')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dia_chi_nguoi_dung');
    }
};
