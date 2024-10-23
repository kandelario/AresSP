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
        Schema::create('razon_social', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razon_nombre')->nullable();
            $table->string('razon_rfc')->nullable();
            $table->string('razon_direccion')->nullable();
            $table->string('razon_telefono')->nullable();
            $table->string('razon_registro_patronal')->nullable();
            $table->string('razon_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('razon_social');
    }
};
