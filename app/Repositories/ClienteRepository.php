<?php

namespace App\Repositories;

use App\Models\Cliente;
use App\Repositories\BaseRepository;

class ClienteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'id',
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
        'nombrecontacto1',
        'emailcontact1',
        'nombrecontacto2',
        'emailcontact2',
        'rfc',
        'vigencia',
        'observaciones',
        'constancia_sf',
        'enable',
        'paymentID'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Cliente::class;
    }
}
