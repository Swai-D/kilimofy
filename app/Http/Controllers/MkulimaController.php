<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use OpenWeather;
use App\Post;
use App\Item;
class MkulimaController extends Controller
{
    public function mkulima_index_page(Request $request)
    {
      //Get User IP
      // $ip = $request->ip();

      $ip = '41.59.84.238'; //alternative way
      $user_location = Location::get($ip);
      // dd($user_location);
      $user_region = $user_location->regionName;
      $user_country = $user_location->countryName;

      //Weather API call for current forecast
      $weather = new OpenWeather();
      $current = $weather->getCurrentWeatherByCityName($user_region);
       //dd($current);

      //Temp in Celsus
      $fahrenheit = $current['forecast']['temp'];
      $fahrenheit_min = $current['forecast']['temp_min'];
      $fahrenheit_max = $current['forecast']['temp_max'];

      //Converting
      $celsius=round(((5/9)*($fahrenheit-32)),0);
      $celsius_min=round(((5/9)*($fahrenheit_min-32)),0);
      $celsius_max=round(((5/9)*($fahrenheit_max-32)),0);
      // dd($celsius);

      //Get icon pathinfo
      $icon_path = $current['condition']['icon'];
      //dd($icon_path);


      //Weather API call for tomorrow
      $future_weather_forecast = $weather->getForecastWeatherByCityName($user_region);
      //dd($future_weather_forecast);

      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('UserAccountBladeFiles.Mkulima.mkulima-home-page', compact('posts','user_location', 'celsius_min', 'celsius_max', 'celsius', 'icon_path'));
    }


    public function mashine_za_kilimo(Request $request)
    {
      $ip = '41.59.84.238';
      // $ip = $request->ip();
      $user_location = \Location::get($ip);
      return view('UserAccountBladeFiles.Mkulima.mashine-za-kilimo', compact('user_location'));
    }


    public function mabwana_shamba()
    {
      $ip = '41.59.84.238';
      // $ip = request()->ip();
      $user_location = \Location::get($ip);
      return view('UserAccountBladeFiles.Mkulima.bwana-shamba', compact('user_location'));
    }

    public function pembejeo_na_viwatilifu(Request $request)
    {
      $ip = '41.59.84.238';
      // $ip = $request->ip();
      $user_location = \Location::get($ip);
      $bidhaa = Item::all();
      $idadi_ya_bidhaa = Item::count();
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu', compact('user_location', 'bidhaa', 'idadi_ya_bidhaa'));
    }

    public function pembejeo_na_viwatilifu_shopping_cart()
    {
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-shopping-cart');
    }

    public function pembejeo_na_viwatilifu_buy_item()
    {
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-buy-item');
    }

}
