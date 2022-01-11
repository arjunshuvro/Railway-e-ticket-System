<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['time','seats','fare', 'class', 'train_id'];

    public function train(){
        return $this->belongsTo(Train::class);
    }
    public function purchases(){
        return $this->hasMany(Purchase::class);
    }
}
