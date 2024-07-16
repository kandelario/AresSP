<?php

namespace App\Repositories;

use App\Models\Movimientos;
use App\Repositories\BaseRepository;

class MovimientosRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'entrada',
        'salida',
        'itemID'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Movimientos::class;
    }
}
