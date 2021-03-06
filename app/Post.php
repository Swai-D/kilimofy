<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);

    }

    public function likes()
    {
        return $this->hasMany(Like::class);

    }

    public function user()
    {
        return $this->belongTo(User::class);
    }


}
