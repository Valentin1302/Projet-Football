<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $table = 'equipes';

    protected $fillable = [
        'nom',
        'ville',
        'logo',
        'annee_creation',
    ];
}
