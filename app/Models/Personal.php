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
        'fecha_inicio_serv',
        'enable'
    ];

    protected $casts = [
        'name' => 'string',
        'domicilio' => 'string',
        'telefonos' => 'string',
        'telefono_contacto' => 'string',
        'email' => 'string',
        'fecha_inicio_serv' => 'date',
        'enable' => 'boolean'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'domicilio' => 'required|string|max:255',
        'telefonos' => 'required|string|max:255',
        'telefono_contacto' => 'required|string|max:255',
        'email' => 'required|email|string|max:255',
        'fecha_inicio_serv' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'enable' => 'required|boolean'
    ];

    
}
