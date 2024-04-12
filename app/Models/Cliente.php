<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $table = 'clientes';

    public $fillable = [
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
        'csf',
        'enable',
        'paymentID'
    ];

    protected $casts = [
        'nombre' => 'string',
        'sueldoxdia' => 'float',
        'sueldoxmes' => 'float',
        'canino' => 'boolean',
        'costocanino' => 'float',
        'sueldoquincena' => 'float',
        'facturaxmes' => 'float',
        'iva' => 'float',
        'ivaretenido' => 'float',
        'totalfactura' => 'float',
        'fechaemision' => 'date',
        'nombrecontacto1' => 'string',
        'emailcontact1' => 'string',
        'nombrecontacto2' => 'string',
        'emailcontact2' => 'string',
        'rfc' => 'string',
        'vigencia' => 'date',
        'observaciones' => 'string',
        'constancia_sf' => 'string',
        'csf' => 'string',
        'enable' => 'boolean'
    ];

    public static array $rules = [
        'nombre' => 'required|string|max:255',
        'personal' => 'nullable',
        'sueldoxdia' => 'required|numeric',
        'sueldoxmes' => 'required|numeric',
        'canino' => 'required|boolean',
        'costocanino' => 'nullable|numeric',
        'sueldoquincena' => 'nullable|numeric',
        'facturaxmes' => 'nullable|numeric',
        'iva' => 'required|numeric',
        'ivaretenido' => 'nullable|numeric',
        'totalfactura' => 'required|numeric',
        'fechaemision' => 'nullable',
        'nombrecontacto1' => 'nullable|string|max:255',
        'emailcontact1' => 'nullable|string|max:255',
        'nombrecontacto2' => 'nullable|string|max:255',
        'emailcontact2' => 'nullable|string|max:255',
        'rfc' => 'nullable|string|max:255',
        'vigencia' => 'nullable',
        'observaciones' => 'nullable|string|max:65535',
        'constancia_sf' => 'nullable|string|max:255',
        'csf' => 'nullable|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required',
        'enable' => 'required|boolean',
        'paymentID' => 'required'
    ];

    public function paymentid(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\PaymentType::class, 'paymentID');
    }
}
