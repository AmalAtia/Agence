<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    protected $table = 'vol';
    protected $primaryKey = 'id';
    protected $fillable = ['num','type_vol','type','date_aller','date_retour','nb_personne','ville_depart','ville_arrive','prix','prixEnf'];
}
