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
        Schema::table('san_pham_bien_the', function (Blueprint $table) {
            $table->foreign(['id_san_pham'], 'san_pham_bien_the_ibfk_1')->references(['id'])->on('san_pham')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id_bien_the'], 'san_pham_bien_the_ibfk_2')->references(['id'])->on('bien_the')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('san_pham_bien_the', function (Blueprint $table) {
            $table->dropForeign('san_pham_bien_the_ibfk_1');
            $table->dropForeign('san_pham_bien_the_ibfk_2');
        });
    }
};
