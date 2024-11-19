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
        Schema::table('asistencias', function (Blueprint $table) {
            $table->unsignedBigInteger('idSiglas');
            $table->foreign('idSiglas')->references('id')->on('siglas_asistencia_personal')->onUpdate('cascade');
        });
    }
};
