<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Model;
class Staff extends Model

{
    protected $guarded = ['id'];
    protected $hidden = [
     'Staff_Password', 'remember_token',
    ];
    public function getAuthPassword()
    {
     return $this->Staff_Password;
    }
}
