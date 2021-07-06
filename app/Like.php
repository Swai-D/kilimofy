<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
     protected $guarded = [];

     public function post()
     {
         return $this->belongsTo(Post::class);

     }

     public function reply()
     {
         return $this->belongsTo(Reply::class);

     }

     public function comment()
     {
         return $this->belongsTo(Comment::class);

     }
}
