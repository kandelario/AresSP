<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public $table = 'asistencias';

    public $fillable = [
        'hoy',
        'falto',
        'idPersonal',
        'observaciones',
        'idSiglas'
    ];

    protected $casts = [
        'hoy' => 'date',
        'falto' => 'boolean',
        'observaciones' => 'string'
    ];

    public static array $rules = [
        'hoy' => 'required',
        'idPersonal' => 'required',
        'idSiglas' => 'required'
    ];

    public function idpersonal(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Personal::class, 'idPersonal');
    }
}
