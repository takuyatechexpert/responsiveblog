<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $fillable = [
        'title',
    ];

    Public function posts()
    {
        return  $this->hasMany('App\Models\Post');
    }
}
