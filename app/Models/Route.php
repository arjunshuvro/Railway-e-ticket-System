<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    protected $fillable = ['from', 'to', 'toll'];

    public function trains(){
        return $this->hasMany(Train::class);
    }
}
