<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circuit extends Model
{
    protected $table = 'circuit';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'titre', 'description', 'date_debut', 'date_fin', 'programme', 'ville_depart', 'ville_arrive', 'prix', 'logement', 'nb_personne', 'nb_disponible'];

    public function reservation_circuit()
    {
        return $this->hasMany(ResevationCircuit::class, 'circuit_id', 'id');
    }
}
