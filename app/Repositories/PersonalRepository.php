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
        'fecha_cumple',
        'fecha_inicio_serv',
        'solicitud',
        'check_list_ingreso',
        'carta_compromiso',
        'resguardo',
        'contrato',
        'retencion',
        'renuncia',
        'actas_administrativas',
        'honorarios',
        'identificacion_oficial',
        'acta_nacimiento',
        'curp',
        'curp_doc',
        'rfc',
        'rfc_doc',
        'nss',
        'nss_doc',
        'comprobante_domicilio',
        'comprobante_estudios',
        'recomendaciones',
        'recomendación_doc',
        'certificado_medico',
        'antecedentes_no_penales',
        'cartilla',
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
