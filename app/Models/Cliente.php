<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = 'clientes';

    public $fillable = [
        'nombre',
        'razon_social',
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
        'paymentID',
        'sueldo_guardia',
        'sueldo_jefe_turno',
        'sueldo_jefe_servicio',
        'sueldo_p_extra'
    ];

    protected $casts = [
        'nombre' => 'string',
        'razon_social' => 'string',
        'guardia_sueldo_dia' => 'float',
        'guardia_sueldo_mes' => 'float',
        'jefe_turno_sueldo_dia' => 'float',
        'jefe_turno_sueldo_mes' => 'float',
        'jefe_serv_sueldo_dia' => 'float',
        'jefe_serv_sueldo_mes' => 'float',
        'monitor_sueldoxdia' => 'float',
        'monitor_sueldoxmes' => 'float',
        'costocanino' => 'float',
        'facturaxmes' => 'float',
        'iva' => 'float',
        'iva_retenido' => 'float',
        'total_factura' => 'float',
        'fecha_emision' => 'date',
        'nombre_contacto1' => 'string',
        'email_contact1' => 'string',
        'nombre_contacto2' => 'string',
        'email_contact2' => 'string',
        'rfc' => 'string',
        'vigencia' => 'date',
        'observaciones' => 'string',
        'constancia_sf' => 'string',
        'enable' => 'boolean',
        'sueldo_guardia' => 'float',
        'sueldo_jefe_turno' => 'float',
        'sueldo_jefe_servicio' => 'float',
        'sueldo_p_extra' => 'float'
    ];

    public static array $rules = [
        'nombre' => 'required|string|max:255',
        'razon_social' => 'string|max:255',
        'nGuardias' => 'nullable',
        'guardia_sueldo_dia' => 'numeric',
        'guardia_sueldo_mes' => 'numeric',
        'n_jefe_turno' => 'nullable',
        'jefe_turno_sueldo_dia' => 'numeric',
        'jefe_turno_sueldo_mes' => 'numeric',
        'n_jefe_servicio' => 'nullable',
        'jefe_serv_sueldo_dia' => 'numeric',
        'jefe_serv_sueldo_mes' => 'numeric',
        'n_monitorista' => 'nullable',
        'monitor_sueldoxdia' => 'numeric',
        'monitor_sueldoxmes' => 'numeric',
        'n_canino' => 'nullable',
        'costocanino' => 'nullable|numeric',
        'facturaxmes' => 'nullable|numeric',
        'iva' => 'numeric',
        'iva_retenido' => 'nullable|numeric',
        'total_factura' => 'numeric',
        'fecha_emision' => 'nullable',
        'nombre_contacto1' => 'nullable|string|max:255',
        'email_contact1' => 'nullable|string|max:255',
        'nombre_contacto2' => 'nullable|string|max:255',
        'email_contact2' => 'nullable|string|max:255',
        'rfc' => 'nullable|string|max:255',
        'vigencia' => 'nullable',
        'observaciones' => 'nullable|string|max:65535',
        'constancia_sf' => 'nullable|string|max:255',
        'enable' => 'boolean',
        'sueldo_guardia' => 'nullable',
        'sueldo_jefe_turno' => 'nullable',
        'sueldo_jefe_servicio' => 'nullable',
        'sueldo_p_extra' => 'nullable'
    ];

    public function paymentid(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\PaymentType::class, 'paymentID');
    }

    public function assignments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Assignment::class, 'cliente_id');
    }
}
