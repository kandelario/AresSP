<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    public $table = 'personals';

    public $fillable = [
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

    protected $casts = [
        'name' => 'string',
        'domicilio' => 'string',
        'telefonos' => 'string',
        'telefono_contacto' => 'string',
        'email' => 'string',
        'fecha_cumple' => 'date',
        'fecha_inicio_serv' => 'date',
        'solicitud' => 'boolean',
        'check_list_ingreso' => 'boolean',
        'carta_compromiso' => 'boolean',
        'resguardo' => 'boolean',
        'contrato' => 'boolean',
        'retencion' => 'boolean',
        'renuncia' => 'boolean',
        'actas_administrativas' => 'boolean',
        'honorarios' => 'boolean',
        'identificacion_oficial' => 'boolean',
        'acta_nacimiento' => 'boolean',
        'curp' => 'string',
        'curp_doc' => 'boolean',
        'rfc' => 'string',
        'rfc_doc' => 'boolean',
        'nss' => 'string',
        'nss_doc' => 'boolean',
        'comprobante_domicilio' => 'boolean',
        'comprobante_estudios' => 'boolean',
        'recomendaciones' => 'integer',
        'recomendación_doc' => 'boolean',
        'certificado_medico' => 'boolean',
        'antecedentes_no_penales' => 'boolean',
        'cartilla' => 'boolean',
        'enable' => 'boolean'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'domicilio' => 'required|string|max:255',
        'telefonos' => 'required|string|max:255',
        'telefono_contacto' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'fecha_cumple' => 'nullable',
        'fecha_inicio_serv' => 'nullable',
        'solicitud' => 'boolean',
        'check_list_ingreso' => 'boolean',
        'carta_compromiso' => 'boolean',
        'resguardo' => 'boolean',
        'contrato' => 'boolean',
        'retencion' => 'boolean',
        'renuncia' => 'boolean',
        'actas_administrativas' => 'boolean',
        'honorarios' => 'boolean',
        'identificacion_oficial' => 'boolean',
        'acta_nacimiento' => 'boolean',
        'curp' => 'string|max:255',
        'curp_doc' => 'boolean',
        'rfc' => 'string|max:255',
        'rfc_doc' => 'required|boolean',
        'nss' => 'string|max:255',
        'nss_doc' => 'required|boolean',
        'comprobante_domicilio' => 'required|boolean',
        'comprobante_estudios' => 'required|boolean',
        'recomendaciones' => 'required|numeric',
        'recomendacion_doc' => 'boolean',
        'certificado_medico' => 'boolean',
        'antecedentes_no_penales' => 'required|boolean',
        'cartilla' => 'boolean',
        // 'created_at' => 'required',
        // 'updated_at' => 'required',
        'enable' => 'boolean'
    ];

    
}
