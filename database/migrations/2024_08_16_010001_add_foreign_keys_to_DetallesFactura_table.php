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
        Schema::table('DetallesFactura', function (Blueprint $table) {
            $table->foreign(['FacturaId'], 'FK__DetallesF__Factu__46E78A0C')->references(['Id'])->on('Facturas')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['ProductoId'], 'FK__DetallesF__Produ__47DBAE45')->references(['Id'])->on('Productos')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('DetallesFactura', function (Blueprint $table) {
            $table->dropForeign('FK__DetallesF__Factu__46E78A0C');
            $table->dropForeign('FK__DetallesF__Produ__47DBAE45');
        });
    }
};
