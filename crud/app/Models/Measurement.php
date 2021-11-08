<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;
    protected $fillable = ['weight', 'height','blood_pressure','sugar'];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
}
