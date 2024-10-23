<?php

namespace App\Repositories;

use App\Models\RazonSocial;
use App\Repositories\BaseRepository;

class RazonSocialRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'razon_nombre',
        'razon_rfc',
        'razon_direccion',
        'razon_telefono',
        'razon_registro_patronal',
        'razon_email'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return RazonSocial::class;
    }
}
