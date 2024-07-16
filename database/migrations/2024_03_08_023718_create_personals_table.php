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
            $table->string('n_emp');
            $table->string('name');
            $table->string('domicilio');
            $table->string('telefonos')->nullable();
            $table->string('telefono_contacto')->nullable();
            $table->string('email')->nullable();
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
            $table->string('curp')->nullable();
            $table->boolean('curp_doc')->default(false);
            $table->string('rfc')->nullable();
            $table->boolean('rfc_doc')->default(false);
            $table->string('nss')->nullable();
            $table->boolean('nss_doc')->default(false);
            $table->boolean('comprobante_domicilio')->default(false);
            $table->boolean('comprobante_estudios')->default(false);
            $table->integer('recomendaciones')->default(0);
            $table->boolean('recomendacion_doc')->default(false);
            $table->boolean('certificado_medico')->default(false);
            $table->boolean('antecedentes_no_penales')->default(false);
            $table->boolean('cartilla')->default(false);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);

            $table->string('otro_doc_nombre')->nullable();
            $table->boolean('otro_doc')->default(false);

            // $table->integer('epp_pantalon_n')->default(0);
            // $table->string('epp_pantalon_talla')->nullable();

            // $table->integer('epp_camisola_n')->default(0);
            // $table->string('epp_camisola_talla')->nullable();

            // $table->integer('epp_gorra_n')->default(0);
            // $table->string('epp_gorra_talla')->nullable();

            // $table->integer('epp_fornitura_n')->default(0);
            // $table->string('epp_fornitura_talla')->nullable();

            // $table->integer('epp_gas_n')->default(0);

            // $table->integer('epp_pr24_n')->default(0);

            // $table->integer('epp_credencial_n')->default(0);

            // $table->integer('epp_chamarra_n')->default(0);
            // $table->string('epp_chamarra_talla')->nullable();

            // $table->integer('epp_chaleco_n')->default(0);
            // $table->string('epp_chaleco_talla')->nullable();

            // $table->integer('epp_coipa_n')->default(0);

            // $table->integer('epp_guantes_n')->default(0);
            // $table->string('epp_guantes_talla')->nullable();

            // $table->integer('epp_lampara_n')->default(0);
            // $table->integer('epp_cubrebocas_n')->default(0);
            // $table->integer('epp_tapones_n')->default(0);
            // $table->integer('epp_lentes_n')->default(0);

            $table->string('observaciones')->nullable();

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
