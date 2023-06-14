<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resevation extends Model
{
    protected $table = 'reservation';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','depart','arrive','rooms','nb_adult','nb_enfant','total_price','status','mode_pay','hotel_id','nb_nuit','name','email','mobile','code_reservation'];
   
   
   
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id', 'id');
    }
}