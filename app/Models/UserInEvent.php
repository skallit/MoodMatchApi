<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInEvent extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'event_id',
    ];
    
    public function events() {
        return $this->hasMany('App\Models\Event');
    }
}
