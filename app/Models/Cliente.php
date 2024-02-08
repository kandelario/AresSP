<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'tipopago',
        'nombrecontacto1',
        'emailcontact1',
        'nombrecontacto2',
        'emailcontact2',
        'rfc',
        'vigencia',
        'observaciones',
    ];
}
