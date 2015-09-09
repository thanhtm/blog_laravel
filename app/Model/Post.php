<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
