<?php

namespace App\Repositories;

use App\Models\Personal;
use App\Repositories\BaseRepository;

class PersonalRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'n_emp',
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
        'recomendacion_doc',
        'certificado_medico',
        'antecedentes_no_penales',
        'cartilla',
        'enable',
        'otro_doc_nombre',
        'otro_doc',
        'observaciones'
        // 'epp_pantalon_n',
        // 'epp_pantalon_talla',
        // 'epp_camisola_n',
        // 'epp_camisola_talla',
        // 'epp_gorra_n',
        // 'epp_gorra_talla',
        // 'epp_fornitura_n',
        // 'epp_fornitura_talla',
        // 'epp_gas_n',
        // 'epp_pr24_n',
        // 'epp_credencial_n',
        // 'epp_chamarra_n',
        // 'epp_chamarra_talla',
        // 'epp_chaleco_n',
        // 'epp_chaleco_talla',
        // 'epp_coipa_n',
        // 'epp_guantes_n',
        // 'epp_guantes_talla',
        // 'epp_lampara_n',
        // 'epp_cubrebocas_n',
        // 'epp_tapones_n',
        // 'epp_lentes_n'
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
