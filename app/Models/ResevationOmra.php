<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResevationOmra extends Model
{
    protected $table = 'reservation_omra';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'prenom', 'email', 'num_tel', 'omra_id'];



    public function omra()
    {
        return $this->belongsTo(Omra::class);
    }
}
