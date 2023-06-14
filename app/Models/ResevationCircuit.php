<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResevationCircuit extends Model
{
    protected $table = 'reservation_circuit';
    protected $primaryKey = 'id';
    protected $fillable = ['nom','prenom','email','num_tel','circuit_id'];
   
   
   
    public function circuit()
    {
        return $this->belongsTo(Circuit::class);
    }
}