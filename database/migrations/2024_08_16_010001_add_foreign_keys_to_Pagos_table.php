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
        Schema::table('Pagos', function (Blueprint $table) {
            $table->foreign(['FacturaId'], 'FK__Pagos__FacturaId__4CA06362')->references(['Id'])->on('Facturas')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Pagos', function (Blueprint $table) {
            $table->dropForeign('FK__Pagos__FacturaId__4CA06362');
        });
    }
};
