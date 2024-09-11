<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEvent extends Model
{
    use HasFactory;

    protected $fillable =[
        'type',
    ];

    public function events() {
        return $this->hasMany('App\Models\Event');
    }
}
