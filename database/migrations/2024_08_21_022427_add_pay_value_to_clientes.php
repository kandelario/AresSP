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
            $table->float('sueldo_guardia', 8, 2)->nullable();//sueldo para el guardia.
            $table->float('sueldo_jefe_turno', 8, 2)->nullable();//sueldo para el jefe de turno.
            $table->float('sueldo_jefe_servicio', 8, 2)->nullable();//sueldo para el jefe de servicio.
            $table->float('sueldo_p_extra', 8, 2)->nullable();//sueldo para el personal extra.
        });
    }
};
