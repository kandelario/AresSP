<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public $table = 'assignments';

    public $fillable = [
        'name',
        'fecha_inicio_serv',
        'enable',
        'cliente_id'
    ];

    protected $casts = [
        'name' => 'string',
        'fecha_inicio_serv' => 'date',
        'enable' => 'boolean'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'fecha_inicio_serv' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'enable' => 'required|boolean',
        'cliente_id' => 'required'
    ];

    public function cliente(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cliente_id');
    }
}
