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
        Schema::create('DetallesFactura', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('FacturaId');
            $table->integer('ProductoId');
            $table->integer('Cantidad');
            $table->decimal('Precio', 10);
            $table->dateTime('FechaCreacion', 7)->nullable()->useCurrent();
            $table->dateTime('FechaActualizacion', 7)->nullable()->useCurrent();

            $table->primary(['Id'], 'pk__detalles__3214ec07fd75637e');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('DetallesFactura');
    }
};
