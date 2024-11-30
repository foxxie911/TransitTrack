<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    public function buses(){
        return $this->hasMany(Bus::class);
    }

    public function locations(){
        return $this->belongsToMany(Location::class);
    }
}