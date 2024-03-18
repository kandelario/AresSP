<?php

namespace App\Repositories;

use App\Models\Inventario;
use App\Repositories\BaseRepository;

class InventarioRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'existencia',
        'imagen'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Inventario::class;
    }
}
