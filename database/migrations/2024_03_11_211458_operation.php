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
        $this->down();

        Schema::create('operation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->date("fecha_inicio_serv");
            //$table->unsignedBigInteger('clientes_id');
            // $table->unsignedBigInteger('estatusID');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);

            
            // $table->foreign('estatusID')->references('eID')->on('personal_estatus')->onUpdate('cascade');
            // $table->foreignId('clientes_id')->index()->constrained()->cascadeOnUpdate();
        });

        Schema::table('operation', function (Blueprint $table) {
            $table->unsignedBigInteger('clientes_id');
            //$table->foreign('clientes_id')->references('id')->on('clientes');
            $table->foreignId('clientes_id')->index()->constrained()->cascadeOnUpdate();
            //$table->foreign('clientes_id')->references('id')->on('clientes')->onUpdate('cascade');
            // $table->foreign('clientID')->references('id')->on('clientes')->onUpdate('cascade');
            //$table->foreignId('clientes_id')->index()->constrained()->cascadeOnUpdate();
        });

        // Schema::table('operation', function (Blueprint $table) {
        //     // $table->foreign('estatusID')->references('eID')->on('personal_estatus')->onUpdate('cascade');
        //     $table->foreignId('personal_estatus_id')->index()->constrained()->cascadeOnUpdate();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation');
    }
};
