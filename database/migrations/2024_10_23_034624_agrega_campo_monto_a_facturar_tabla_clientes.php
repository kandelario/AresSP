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
        Schema::table('clientes', function (Blueprint $table) {
            $table->float('monto_facturar', 8, 2)->nullable();
            $table->integer('personal_total')->nullable();
            $table->string('fechas_facturacion')->nullable();
        });
    }

};
