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
        Schema::create('san_pham_bien_the', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_san_pham')->nullable()->index('id_san_pham');
            $table->integer('id_bien_the')->nullable()->index('id_bien_the');
            $table->string('gia_tri');
            $table->string('image')->nullable();
            $table->integer('so_luong')->nullable()->default(0);
            $table->integer('gia_bien_the')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('san_pham_bien_the');
    }
};
