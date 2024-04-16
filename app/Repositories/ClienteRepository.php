<?php

namespace App\Repositories;

use App\Models\Cliente;
use App\Repositories\BaseRepository;

class ClienteRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'nGuardias',
        'guardia_sueldo_dia',
        'guardia_sueldo_mes',
        'n_jefe_turno',
        'jefe_turno_sueldo_dia',
        'jefe_turno_sueldo_mes',
        'n_jefe_servicio',
        'jefe_serv_sueldo_dia',
        'jefe_serv_sueldo_mes',
        'n_monitorista',
        'monitor_sueldoxdia',
        'monitor_sueldoxmes',
        'n_canino',
        'costocanino',
        'facturaxmes',
        'iva',
        'iva_retenido',
        'total_factura',
        'fecha_emision',
        'nombre_contacto1',
        'email_contact1',
        'nombre_contacto2',
        'email_contact2',
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
