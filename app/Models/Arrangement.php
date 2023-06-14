<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrangement extends Model
{
    protected $table = 'arrangement';
    protected $primaryKey = 'id';
    protected $fillable = ['room_id','prix_dp','prix_log_simple','prix_log_pet_dej','prix_all_inclus','prix_all_soft_drink','prix_pension_comp'];


   
    public function chambre()
    {
        return $this->hasMany(Chambre::class, 'room_id', 'id');
    }

}
