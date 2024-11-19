<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiglaAsistenciasPersonal extends Model
{
    public $table = 'siglas_asistencia_personal';

    public $fillable = [
        'name',
        'knowledge',
        'active'
    ];

    protected $casts = [
        'name' => 'string',
        'knowledge' => 'string',
        'active' => 'boolean'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'knowledge' => 'nullable|string|max:255',
        // 'active' => 'required|boolean',
        // 'created_at' => 'required',
        // 'updated_at' => 'required'
    ];

    
}
