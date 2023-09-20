<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class electeurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'numero_national',
        'nom',
        'postnom',
        'prenom',
        'sexe',
        'nom_pere',
        'nom_mere',
        
    ];
}
