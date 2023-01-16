<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'individuals',
        'description',
        'areas',
        'img' ,
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
