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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->integer('entrada');
            $table->integer('salida');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->string('observaciones')->nullable();
        }); 

        ///se agrega llave forania con la tabla movimientos, el campo es itemID.
        Schema::table('movimientos', function (Blueprint $table) {
            $table->unsignedBigInteger('itemID');
            $table->foreign('itemID')->references('id')->on('inventarios')->onUpdate('cascade');
        });

        Schema::table('movimientos', function (Blueprint $table) {
            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventario_movimientos');
    }
};
