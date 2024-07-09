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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->default(null)->nullable();
            $table->rememberToken();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('enable')->default(true);
        });

        DB::table('users')->insert([
            [ 'name' => 'Kande Pacheco', 'email' => 'cande.pacheco@gmail.com', 'password' => bcrypt('Stark4ever@$'), 'image' => 'user_image_1.jpg'],
            [ 'name' => 'Alain Orozco Castilla', 'email' => 'alain@agenciaares.com', 'password' => bcrypt('Ares2024'), 'image' => 'null'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
