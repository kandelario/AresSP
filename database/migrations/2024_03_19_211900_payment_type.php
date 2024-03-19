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
        Schema::create('payment_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);
        });
        DB::table('payment_type')->insert([
            [ 'type' => 'Por definir'],
            [ 'type' => 'Transferencia'],
            [ 'type' => 'Efectivo'],
            // [ 'type' => 'Otro'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_type');
    }
};
