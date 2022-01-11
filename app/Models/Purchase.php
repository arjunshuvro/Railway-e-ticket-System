<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable=['date','purchased_id','ticket_id'];
    protected $dates = ['created_at','updated_at','date'];

    public function user(){
        return $this->belongsTo(User::class,'purchased_id','id');
    }
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
