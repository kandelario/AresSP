<?php

namespace App\Repositories;

use App\Models\Assignment;
use App\Repositories\BaseRepository;

class AssignmentRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'fecha_inicio_serv',
        'enable',
        'cliente_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Assignment::class;
    }
}
