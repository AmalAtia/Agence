<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResevationVoyage extends Model
{
    protected $table = 'reservation_voyage';
    protected $primaryKey = 'id';
    protected $fillable = ['nom','prenom','email','num_tel','voyage_id'];
   
   
   
    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }
}