<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Post')->withTimestamps();
    }

    public function thesauruses()
    {
        return $this->belongsToMany('App\Thesaurus')->withTimestamps();
    }
}
