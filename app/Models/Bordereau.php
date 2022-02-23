<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    use HasFactory;

    protected $fillable = [        
        'quantite',
        'prix',
        'total',
    ];

    protected $table = 'bordereaux';

    public $timestamps = true;
}
