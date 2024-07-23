<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('hoy');
            $table->boolean('falto')->default(0);//1 = si faltó el personal.
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            // $table->text('puesto')->nullable();
        });

        Schema::table('asistencias', function (Blueprint $table) {
            $table->unsignedBigInteger('idPersonal');
            $table->foreign('idPersonal')->references('id')->on('personals')->onUpdate('cascade');
        });

        // Schema::table('asistencias', function (Blueprint $table) {
        //     $table->unsignedBigInteger('idPuesto');
        //     $table->foreign('idPuesto')->references('id')->on('personals')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
