<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class StaffLoginController extends DefaultLoginController
{

    protected $redirectTo = '/kilimofy/Staff/login';

    public function __construct()
    {
      $this->middleware('guest:staff')->except('logout');
    }

    public function showLoginForm()
    {
      return view('AdminBladeFiles.staff-login-form');
    }

    public function guard()
    {
      return Auth::guard('staff');
    }

}
