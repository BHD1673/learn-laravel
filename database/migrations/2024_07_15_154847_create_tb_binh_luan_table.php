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
        Schema::create('tb_binh_luan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('tai_khoan_id')->nullable()->index('tai_khoan_id');
            $table->integer('san_pham_id')->nullable()->index('san_pham_id');
            $table->text('noi_dung')->nullable();
            $table->timestamp('thoi_gian')->nullable()->useCurrent();
            $table->tinyInteger('trang_thai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_binh_luan');
    }
};
