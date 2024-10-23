<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RazonSocial extends Model
{
    public $table = 'razon_social';

    public $fillable = [
        'razon_nombre',
        'razon_rfc',
        'razon_direccion',
        'razon_telefono',
        'razon_registro_patronal',
        'razon_email'
    ];

    protected $casts = [
        'razon_nombre' => 'string',
        'razon_rfc' => 'string',
        'razon_direccion' => 'string',
        'razon_telefono' => 'string',
        'razon_registro_patronal' => 'string',
        'razon_email' => 'string'
    ];

    public static array $rules = [
        'razon_nombre' => 'nullable|string|max:255',
        'razon_rfc' => 'nullable|string|max:255',
        'razon_direccion' => 'nullable|string|max:255',
        'razon_telefono' => 'nullable|string|max:255',
        'razon_registro_patronal' => 'nullable|string|max:255',
        'razon_email' => 'nullable|string|max:255'
    ];

    
}
