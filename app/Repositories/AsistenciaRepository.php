<?php

namespace App\Repositories;

use App\Models\Asistencia;
use App\Repositories\BaseRepository;

class AsistenciaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'hoy',
        'falto',
        'observaciones',
        'idPersonal'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Asistencia::class;
    }
}
