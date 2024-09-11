<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable =[
        'content',
        'event_id',
        'user_id',
    ];

    public function events() {
        return $this->hasMany('App\Models\Event');
    }
}
