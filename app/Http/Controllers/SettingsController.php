<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class SettingsController extends Controller
{
    public function General_Settings(User $user_id)
    {
      return view('SettingsBladeFiles.GeneralSettings');
    }

    public function My_Profile(User $user_id)
    {
      return view('SettingsBladeFiles.MyProfileSettings');
    }

    public function Social_Account(User $user_id)
    {
      return view('SettingsBladeFiles.SocialAccount');
    }
}
