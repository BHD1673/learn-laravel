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
        Schema::create('san_pham', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ten_san_pham')->nullable();
            $table->text('mo_ta')->nullable();
            $table->integer('id_danh_muc')->nullable()->index('id_danh_muc');
            $table->integer('gia_co_ban')->nullable();
            $table->timestamp('ngay_tao')->nullable()->useCurrent();
            $table->timestamp('ngay_cap_nhat')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham');
    }
};
