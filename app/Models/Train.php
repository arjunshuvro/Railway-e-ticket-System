<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'indentification_no','route_id','driver_id'];
    public function route(){
        return $this->belongsTo(Route::class);
    }
    public function driver(){
        return $this->belongsTo(Driver::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
