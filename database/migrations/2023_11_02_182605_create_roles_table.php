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

    Schema::create('roles', function (Blueprint $table) {
        $table->bigIncrements('idrol'); // Cambio aquí
        $table->string('rol');
        $table->timestamp('fechacreacion')->useCurrent();
        $table->timestamp('fechamodificacion')->useCurrent();
        $table->unsignedBigInteger('usuariocreacion');
        $table->unsignedBigInteger('usuariomodificacion');
        $table->timestamps();
    });
}

    
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
