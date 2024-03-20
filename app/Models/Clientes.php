<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $table = 'clientes';

    public $fillable = [
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
        'payment_type' => 'string',
        'nombrecontacto1' => 'string',
        'emailcontact1' => 'string',
        'nombrecontacto2' => 'string',
        'emailcontact2' => 'string',
        'rfc' => 'string',
        'vigencia' => 'date',
        'observaciones' => 'string',
        'logo' => 'string',
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
        'payment_type' => 'required|string|max:255',
        'nombrecontacto1' => 'nullable|string|max:255',
        'emailcontact1' => 'nullable|string|max:255',
        'nombrecontacto2' => 'nullable|string|max:255',
        'emailcontact2' => 'nullable|string|max:255',
        'rfc' => 'nullable|string|max:255',
        'vigencia' => 'nullable',
        'observaciones' => 'nullable|string|max:65535',
        'logo' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'enable' => 'required|boolean'
    ];

    public function personals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Personal::class, 'clientID');
    }
}
