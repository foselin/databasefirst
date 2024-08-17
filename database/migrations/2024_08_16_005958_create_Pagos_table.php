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
        Schema::create('Pagos', function (Blueprint $table) {
            $table->increments('Id');
            $table->integer('FacturaId');
            $table->decimal('Monto', 10);
            $table->date('FechaPago');
            $table->string('MetodoPago', 50)->nullable();
            $table->dateTime('FechaCreacion', 7)->nullable()->useCurrent();
            $table->dateTime('FechaActualizacion', 7)->nullable()->useCurrent();

            $table->primary(['Id'], 'pk__pagos__3214ec0757f30033');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Pagos');
    }
};
