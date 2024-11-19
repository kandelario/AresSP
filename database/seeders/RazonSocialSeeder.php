<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RazonSocial;

class RazonSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RazonSocial::create([
            'razon_nombre' => 'Adriana Castilla Guzman',
            'razon_rfc' => 'CAGX600525DB8',
            'razon_direccion' => null,
            'razon_telefono' => null,
            'razon_registro_patronal' => 'B4747130101',
            'razon_email' => 'asistencias.index'
        ]);

        // RazonSocial::create([
        //     'razon_nombre' => 'Adriana Castilla Guzman',
        //     'razon_rfc' => 'CAGX600525DB8',
        //     'razon_direccion' => null,
        //     'razon_telefono' => null,
        //     'razon_registro_patronal' => 'B4747130101',
        //     'razon_email' => 'asistencias.index'
        // ]);
    }
}
