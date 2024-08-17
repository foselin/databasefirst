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
        Schema::table('Facturas', function (Blueprint $table) {
            $table->foreign(['ClienteId'], 'FK__Facturas__Client__4222D4EF')->references(['Id'])->on('Clientes')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Facturas', function (Blueprint $table) {
            $table->dropForeign('FK__Facturas__Client__4222D4EF');
        });
    }
};
