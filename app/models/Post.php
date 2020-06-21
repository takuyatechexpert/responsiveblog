<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'title', 'description',
    ];

    Public function genre()
    {
        return  $this->belongsTo('App\Models\Genre');
    }
}
