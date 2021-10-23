<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $guarded = [];

    public function discussions()
    {
      return $this->hasMany(Discussion::class);
    }
}
