<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class StaffLoginController extends DefaultLoginController
{
  public function showLoginForm()
  {
    return view('StaffBladeFiles.staff-login-form');
  }

}
