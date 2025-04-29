<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    public $table = 'inventarios';

    public $fillable = [
        'nombre',
        'existencia',
        'imagen',
        'codigo'
    ];

    protected $casts = [
        'nombre' => 'string',
        'imagen' => 'string',
        'codigo' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required|string|max:255',
        'existencia' => 'required',
        // 'imagen' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'codigo' => 'nullable'
    ];    
}
