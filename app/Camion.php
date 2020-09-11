<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    protected $fillable = [
        'matricule', 'numero', 'lng', 'lat','vitesse', 'etat', 'camera'
    ];
}
