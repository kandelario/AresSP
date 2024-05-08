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
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('domicilio');
            $table->string('telefonos');
            $table->string('telefono_contacto');
            $table->string('email');
            $table->date("fecha_cumple")->nullable();
            $table->date("fecha_inicio_serv")->nullable();
            $table->boolean('solicitud')->default(false);
            $table->boolean('check_list_ingreso')->default(false);
            $table->boolean('carta_compromiso')->default(false);
            $table->boolean('resguardo')->default(false);
            $table->boolean('contrato')->default(false);
            $table->boolean('retencion')->default(false);
            $table->boolean('renuncia')->default(false);
            $table->boolean('actas_administrativas')->default(false);
            $table->boolean('honorarios')->default(false);
            $table->boolean('identificacion_oficial')->default(false);
            $table->boolean('acta_nacimiento')->default(false);
            $table->string('curp');
            $table->boolean('curp_doc')->default(false);
            $table->string('rfc');
            $table->boolean('rfc_doc')->default(false);
            $table->string('nss');
            $table->boolean('nss_doc')->default(false);
            $table->boolean('comprobante_domicilio')->default(false);
            $table->boolean('comprobante_estudios')->default(false);
            $table->integer('recomendaciones')->default(0);
            $table->boolean('recomendación_doc')->default(false);
            $table->boolean('certificado_medico')->default(false);
            $table->boolean('antecedentes_no_penales')->default(false);
            $table->boolean('cartilla')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);
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
