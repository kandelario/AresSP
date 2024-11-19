<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE Illuminate\Support\Facades\DB;
use App\Models\SiglaAsistenciasPersonal;

class SiglasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiglaAsistenciasPersonal::create([
            'name' => 'IS',
            'knowledge' => 'INCAPACIDAD DEL SEGURO',
            'active' => 1
        ]);
        SiglaAsistenciasPersonal::create([
            'name' => 'IA',
            'knowledge' => 'INCAPACIDAD ARES',
            'active' => 1
        ]);
        SiglaAsistenciasPersonal::create([
            'name' => 'P',
            'knowledge' => 'PRESENTE',
            'active' => 1
        ]);
        SiglaAsistenciasPersonal::create([
            'name' => 'D',
            'knowledge' => 'DESCANSO',
            'active' => 1
        ]);
        SiglaAsistenciasPersonal::create([
            'name' => 'F',
            'knowledge' => 'FALTA',
            'active' => 1
        ]);
        SiglaAsistenciasPersonal::create([
            'name' => 'TE',
            'knowledge' => 'TIEMPO EXTRA',
            'active' => 1
        ]);
        SiglaAsistenciasPersonal::create([
            'name' => '2TE',
            'knowledge' => 'DOS TIEMPOS EXTRAS',
            'active' => 1
        ]);
    }
}
