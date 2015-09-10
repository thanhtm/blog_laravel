<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function user()
    {
        retutn $this->belongsTo('App\Models\User');
    }
}
