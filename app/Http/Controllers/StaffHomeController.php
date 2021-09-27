<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffHomeController extends Controller
{
  public function __construct()

   {
       $this->middleware('auth:staff');
   }

   public function index()
    {
        return view('AdminBladeFiles.staff-login-form');
    }
}
