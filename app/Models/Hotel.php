<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = 'hotels';
    protected $primaryKey = 'id';
    protected $fillable = ['image', 'hotelname', 'nb_etoile', 'short_description', 'adresse', 'option', 'prix', 'promo', 'date_deb', 'date_fin','supplement_id','maps'];



    public function chambre()
    {
        return $this->hasMany(Chambre::class, 'hotel_id', 'id');
    }


// ----- mchit Dans le modèle Hotel 3mlt une relation belongsToMany vers le modèle User pour représenter les utilisateurs qui ont ajouté l'hôtel en favori  -----
    public function favoritedBy()
    {
        return $this->belongsToMany(User::class, 'favorites', 'hotel_id', 'user_id');
    }

    public function supplement()
    {
        return $this->belongsTo(Supplement::class,'supplement_id','id');
    }
}
