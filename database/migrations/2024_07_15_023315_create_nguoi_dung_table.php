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
        Schema::create('nguoi_dung', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('ho_ten', 50)->nullable();
            $table->string('email', 150)->nullable();
            $table->string('so_dien_thoai', 20)->nullable();
            $table->text('anh')->nullable();
            $table->string('mat_khau', 225)->nullable();
            $table->integer('role')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoi_dung');
    }
};
