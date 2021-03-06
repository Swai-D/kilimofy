<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
     protected $guarded = [];

      public function comment()
      {
          return $this->belongsTo(Comment::class);

      }


      public function likes()
      {
          return $this->hasMany(Like::class);

      }
}
