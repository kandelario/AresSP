<?php

namespace App\Repositories;

use App\Models\SiglaAsistenciasPersonal;
use App\Repositories\BaseRepository;

class SiglaAsistenciasPersonalRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'knowledge',
        'active'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return SiglaAsistenciasPersonal::class;
    }
}
