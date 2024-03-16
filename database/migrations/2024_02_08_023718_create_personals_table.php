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
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('domicilio');
            $table->string('telefonos');
            $table->string('telefono_contacto');
            $table->string('email');
            $table->enum("estatus", ["Ingreso", "Reingreso", "Baja", "Baja sin reingreso"]);
            $table->date("fecha_inicio_serv");
            $table->timestamps();
            $table->boolean('enable')->default(true);
        });

        Schema::table('personals', function (Blueprint $table) {
            $table->foreignId('clientID')->constrained(
                table: 'clientes', indexName: 'id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
