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
        Schema::create('Clientes', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nombre', 100);
            $table->string('CorreoElectronico', 100)->unique('uq__clientes__531402f3dee2b0da');
            $table->string('Telefono', 20)->nullable();
            $table->string('Direccion')->nullable();
            $table->dateTime('FechaCreacion', 7)->nullable()->useCurrent();
            $table->dateTime('FechaActualizacion', 7)->nullable()->useCurrent();

            $table->primary(['Id'], 'pk__clientes__3214ec0772023139');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Clientes');
    }
};
