<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Omra extends Model
{
    protected $table = 'omra';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'titre', 'description', 'date_depart', 'date_arrive', 'prix', 'promo', 'date_deb', 'date_fin', 'nb_personne', 'nb_disponible'];

    public function reservation_omra()
    {
        return $this->hasMany(ResevationOmra::class, 'omra_id', 'id');
    }
}
