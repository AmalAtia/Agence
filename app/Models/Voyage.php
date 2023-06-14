<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    protected $table = 'Voyage';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'titre', 'destination', 'pays', 'thems', 'prix', 'date_debut', 'date_fin', 'nb_personne', 'nb_disponible'];


    public function reservation_voyage()
    {
        return $this->hasMany(ResevationVoyage::class, 'voyage_id', 'id');
    }
}
