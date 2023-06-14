<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    protected $table = 'chambre';
    protected $primaryKey = 'id';
    protected $fillable = ['image','type','nb_de_lit','nb_adult','nb_enfant','prix_par_personne','hotel_id','qte','promo','date_deb','date_fin'];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class,'hotel_id','id');
    }
    public function arrangement()
    {
        return $this->belongsTo(Arrangement::class,'room_id','id');
    }

}
