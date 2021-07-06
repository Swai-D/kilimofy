<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;

class BwanaShambaController extends Controller
{
    public function Bwana_Shamba_Index_Page()
    {
      $user_id = Session::get('user_id');
      // $ip = '41.59.84.238';
      $ip = request()->ip();
      $user_location = \Location::get($ip);
      $user_region = $user_location->regionName;
      $user_country = $user_location->countryName;

      //Get User account
      $user_account_details = User::where('id', '=', $user_id)->get();
        return view('UserAccountBladeFiles.BwanaShamba.bwana-shamba-home-page', compact('user_location', 'user_region', 'user_country', 'user_account_details'));
      }
}
