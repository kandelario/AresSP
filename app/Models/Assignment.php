<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public $table = 'assignments';

    public $fillable = [
        // 'name',
        'fecha_inicio_serv',
        'enable',
        'cliente_id',
        'puesto',
        'personal_id',
        'observaciones'
    ];

    protected $casts = [
        // 'name' => 'string',
        'fecha_inicio_serv' => 'date',
        'enable' => 'boolean'
    ];

    public static array $rules = [
        // 'name' => 'required|string|max:255',
        'fecha_inicio_serv' => 'required',
        'cliente_id' => 'required',
        'puesto' => 'required|string',
        'personal_id' => 'required',
    ];

    public function cliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id');
    }
}
