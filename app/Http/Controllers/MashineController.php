<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Mashine;
class MashineController extends Controller
{
    public function mtoa_huduma_za_mashine_za_kilimo_home_page(Request $request)
    {
      $ip = '41.59.84.238';
      // $ip = $request->ip();
      $user_location = Location::get($ip);
      $bidhaa = Mashine::all();
      $idadi_ya_bidhaa = Mashine::count();
      return view('UserAccountBladeFiles.MashineZaKilimo.muuzaji-wa-mashine-za-kilimo', compact('user_location', 'bidhaa', 'idadi_ya_bidhaa'));
    }
}
