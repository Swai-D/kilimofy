<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class);

    }


    public function replies()
    {
        return $this->hasMany(Reply::class);

    }

    public function likes()
    {
        return $this->hasMany(Like::class);

    }
}
