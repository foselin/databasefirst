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
        Schema::create('Productos', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Nombre', 100);
            $table->decimal('Precio', 10);
            $table->string('Descripcion')->nullable();
            $table->dateTime('FechaCreacion', 7)->nullable()->useCurrent();
            $table->dateTime('FechaActualizacion', 7)->nullable()->useCurrent();

            $table->primary(['Id'], 'pk__producto__3214ec0769849f6c');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Productos');
    }
};
