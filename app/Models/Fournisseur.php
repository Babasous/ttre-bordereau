<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_pays',
        'pays_fournisseur',
        'nom_fournisseur',
        'adresse_fournisseur',
    ];

    protected $table = 'fournisseurs';

    public $timestamps = true;
}
