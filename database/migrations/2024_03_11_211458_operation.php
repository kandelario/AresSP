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
            $table->unsignedBigInteger('cliente_id');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);

            
            $table->foreign('cliente_id')->references('id')->on('clientes')->onUpdate('cascade');
            // $table->foreignId('clientes_id')->index()->constrained()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation');
    }
};
