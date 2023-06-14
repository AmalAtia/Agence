<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
    protected $table = 'supplement';
    protected $primaryKey = 'id';
    protected $fillable = ['nom','icon'];


   
    public function hotel()
    {
        return $this->hasMany(Hotel::class, 'supplement_id', 'id');
    }

}
