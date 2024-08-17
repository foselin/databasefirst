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
        Schema::create('Facturas', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('ClienteId');
            $table->date('FechaFactura');
            $table->decimal('Total', 10);
            $table->dateTime('FechaCreacion', 7)->nullable()->useCurrent();
            $table->dateTime('FechaActualizacion', 7)->nullable()->useCurrent();

            $table->primary(['Id'], 'pk__facturas__3214ec07e2f7cd62');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Facturas');
    }
};
