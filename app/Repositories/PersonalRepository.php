<?php

namespace App\Repositories;

use App\Models\Personal;
use App\Repositories\BaseRepository;

class PersonalRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'domicilio',
        'telefonos',
        'telefono_contacto',
        'email',
        'fecha_inicio_serv',
        'enable'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Personal::class;
    }
}
