<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable =[
        'place',
        'date',
        'peopleLimit',
        'ageRequired',
        'price',
        'typeEvent_id',
        'categorie_id',
    ];

    public function userInEvents() {
        return $this->hasMany('App\Models\User');
    }

    public function reviewInEvents() {
        return $this->hasMany('App\Models\Review');
    }

}
