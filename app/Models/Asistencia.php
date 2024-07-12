<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public $table = 'asistencias';

    public $fillable = [
        'hoy',
        'asistio',
        'idPersonal',
        'puesto'
    ];

    protected $casts = [
        'hoy' => 'date',
        'asistio' => 'boolean',
        'puesto' => 'string'
    ];

    public static array $rules = [
        'hoy' => 'required',
        'asistio' => 'boolean',
        // 'created_at' => 'required',
        // 'updated_at' => 'required',
        'idPersonal' => 'required',
        'puesto' => 'required|string'
    ];

    public function idpersonal(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Personal::class, 'idPersonal');
    }
}
