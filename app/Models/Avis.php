<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','description','stars' ,'hotel_id'];



    public Function user() 
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }

    public Function hotel() 
    {
        return $this->belongsTo(Produit::class, 'hotel_id','id');
    }
}
