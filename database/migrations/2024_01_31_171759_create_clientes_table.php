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
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->integer('personal')->nullable();
            $table->float('sueldoxdia', 8, 2);
            $table->float('sueldoxmes', 8, 2);
            $table->enum('canino', ['Si', 'No']);
            $table->float('costocanino', 8, 2)->nullable();
            $table->float('sueldoquincena', 8, 2)->nullable();
            $table->float('facturaxmes', 8, 2)->nullable();
            $table->float('iva', 8, 2);
            $table->float('ivaretenido', 8, 2)->nullable();
            $table->float('totalfactura', 8, 2);
            $table->date('fechaemision')->nullable();
            $table->enum('tipopago', ['Por definir', 'Transferencia', 'Efectivo']);
            $table->string('nombrecontacto1')->nullable();
            $table->string('emailcontact1')->nullable();
            $table->string('nombrecontacto2')->nullable();
            $table->string('emailcontact2')->nullable();
            $table->string('rfc')->nullable();
            $table->date('vigencia')->nullable();
            $table->text('observaciones')->nullable();
            $table->string('logo')->nullable();
            $table->timestamps();
            $table->boolean('enable')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
