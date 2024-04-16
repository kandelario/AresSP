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
        Schema::create('clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->autoIncrement();
            $table->string('nombre');
            //$table->integer('personal')->nullable();//número de personas requeridas
            $table->integer('nGuardias')->nullable();//número de personas requeridas Guardias
            $table->float('guardia_sueldo_dia', 8, 2);//sueldo por día de un guardia
            $table->float('guardia_sueldo_mes', 8, 2);//sueldo por mes de guardia

            $table->integer('n_jefe_turno')->nullable();//número de personas requeridas Jefe de turno
            $table->float('jefe_turno_sueldo_dia', 8, 2);//sueldo por día de jefe en turno
            $table->float('jefe_turno_sueldo_mes', 8, 2);//sueldo por mes de jefe en turno

            $table->integer('n_jefe_servicio')->nullable();//número de personas requeridas Jefe de servicio
            $table->float('jefe_serv_sueldo_dia', 8, 2);//sueldo por día de jefe de servicio
            $table->float('jefe_serv_sueldo_mes', 8, 2);//sueldo por mes de jefe de servicio

            $table->integer('n_monitorista')->nullable();//número de personas requeridas Monitorista
            $table->float('monitor_sueldoxdia', 8, 2);//sueldo por día de monitorista
            $table->float('monitor_sueldoxmes', 8, 2);//sueldo por mes de monitorista

            $table->integer('n_canino')->nullable()->default(0);//número de personas requeridas Monitorista
            $table->float('costocanino', 8, 2)->nullable();//costo por unidad canina
            //$table->boolean('canino')->default(1);//requiere o no un perro

            
            //$table->float('sueldoqsuincena', 8, 2)->nullable();//sueldo quincenal del personal
            $table->float('facturaxmes', 8, 2)->nullable();//monto a facturar por mes
            $table->float('iva', 8, 2);//monto de iva
            $table->float('iva_retenido', 8, 2)->nullable();//monto de iva retenido
            $table->float('total_factura', 8, 2);//monto total a facturar
            $table->date('fecha_emision')->nullable();//fecha de emisión de factura

            $table->string('nombre_contacto1')->nullable();//nombre de contacto 1
            $table->string('email_contact1')->nullable();//email de contacto 1

            $table->string('nombre_contacto2')->nullable();//nombre de contacto 2
            $table->string('email_contact2')->nullable();//email de contacto 2

            $table->string('rfc')->nullable();//rfc en texto
            $table->date('vigencia')->nullable();//fecha de vigencia
            $table->text('observaciones')->nullable();//campo destinado a observaciones.
            $table->string('constancia_sf')->nullable();//pdf constancia de situación fiscal, nombre del archivo almacenado en la plataforma
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);//refleja true si esta activo, o false si no
        });

        ///se agrega llave forania con la tabla payment_type, el campo es paymentID.
        Schema::table('clientes', function (Blueprint $table) {
            $table->unsignedBigInteger('paymentID');
            $table->foreign('paymentID')->references('id')->on('payment_type')->onUpdate('cascade');
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
