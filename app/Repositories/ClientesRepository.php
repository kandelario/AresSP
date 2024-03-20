<?php

namespace App\Repositories;

use App\Models\Clientes;
use App\Repositories\BaseRepository;

class ClientesRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'personal',
        'sueldoxdia',
        'sueldoxmes',
        'canino',
        'costocanino',
        'sueldoquincena',
        'facturaxmes',
        'iva',
        'ivaretenido',
        'totalfactura',
        'fechaemision',
        'payment_type',
        'nombrecontacto1',
        'emailcontact1',
        'nombrecontacto2',
        'emailcontact2',
        'rfc',
        'vigencia',
        'observaciones',
        'logo',
        'enable'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Clientes::class;
    }
}
