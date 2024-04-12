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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('existencia');
            $table->string('image')->nullable()->default(null);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);
        });

        DB::table('inventarios')->insert([
            [ 'nombre' => 'PR-24', 'existencia' => 40, 'image' => 'article_image_1.webp', 'enable' => 1],
            [ 'nombre' => 'Gas Pimienta con Estuche', 'existencia' => 160, 'image' => '1711501071_Gas_Pimienta_con_Estuche.webp' , 'enable' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
