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
        Schema::create('Empresas', function (Blueprint $table) {
            $table->id();
            $table->string("rutEmpresa");
            $table->string("nombreEmpresa");
            $table->string("direccionEmpresa");
            $table->integer("idComuna");
            $table->integer("idCiudad");
            $table->integer("idRegion");
            $table->integer("estado");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Empresas');
    }
};
