<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    public $table = 'movimientos';

    public $fillable = [
        'entrada',
        'salida',
        'itemID'
    ];

    protected $casts = [
        
    ];

    public static array $rules = [
        'entrada' => 'required',
        'salida' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required',
        'itemID' => 'required'
    ];

    public function itemid(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Inventario::class, 'itemID');
    }
}
