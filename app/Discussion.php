<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
  protected $guarded = [];

  public function forum()
  {
    return $this->belongsTo(Forum::class);
  }

  public function paticipants()
  {
    return $this->hasMany(Paticipant::class);
  }
}
