<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bordereau extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_bordereau',
        'quantite',
        'prix',
        'total',
    ];

    protected $table = 'bordereaux';

    public $timestamps = true;
}
