<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    public $table = 'inventarios';

    public $fillable = [
        'nombre',
        'existencia',
        'imagen'
    ];

    protected $casts = [
        'nombre' => 'string',
        'imagen' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required|string|max:255',
        'existencia' => 'required',
        'imagen' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
