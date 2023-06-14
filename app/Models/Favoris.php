<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;
    protected $table = 'favoris';
    protected $fillable = (['id', 'user_id', 'hotel_id', 'circuit_id','omra_id','voyage_id' ]);

    public function hotel()
    {
        return $this->belongsto(Hotel::class, 'hotel_id', 'id');
    }
    public function circuit()
    {
        return $this->belongsto(Circuit::class, 'circuit_id', 'id');
    }
    public function omra()
    {
        return $this->belongsto(Omra::class, 'omra_id', 'id');
    }

    public function voyage()
    {
        return $this->belongsto(Omra::class, 'voyage_id', 'id');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
}
