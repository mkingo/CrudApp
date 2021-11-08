<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email','phone','age','gender','address'
    ];
    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }
}
