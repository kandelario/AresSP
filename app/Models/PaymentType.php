<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    public $table = 'payment_type';

    public $fillable = [
        'type',
        'enable'
    ];

    protected $casts = [
        'type' => 'string',
        'enable' => 'boolean'
    ];

    public static array $rules = [
        'type' => 'required|string|max:255',
        'created_at' => 'required',
        'updated_at' => 'required',
        'enable' => 'required|boolean'
    ];

    
}
