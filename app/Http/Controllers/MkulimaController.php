<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use OpenWeather;
use App\Place;
use App\Post;
use App\Forum;
use App\Group;
use App\User;
use App\Item;
use Auth;
class MkulimaController extends Controller
{
    public function mkulima_index_page(Request $request)
    {

       return $this-> user_index_page_details();


    }


    public function mashine_za_kilimo(Request $request)
    {
      $user_location = Auth::user()->user_location;
      return view('UserAccountBladeFiles.Mkulima.mashine-za-kilimo', compact('user_location'));
    }


    public function mabwana_shamba()
    {

      $user_location = Auth::user()->user_location;
      $bwana_shamba_list = User::where([['user_ocupation', '=', 'Bwana_Shamba'],['user_location', '=', $user_location]])->get();
      $total_bwana_shamba_list = User::where([['user_ocupation', '=', 'Bwana_Shamba'],['user_location', '=', $user_location]])->count();
      return view('UserAccountBladeFiles.Mkulima.bwana-shamba', compact('user_region', 'user_district', 'bwana_shamba_list', 'total_bwana_shamba_list', 'user_location'));
    }

    public function pembejeo_na_viwatilifu(Request $request)
    {
      $user_location = Auth::user()->user_location;
      //Get all the sellers accross user location
      $user_location_pembejeo_na_viwatilifu_list = User::where([['user_ocupation', '=', 'Muuzaji_Wa_pembejeo_Na_Viwatilifu'],['user_location', '=', $user_location]])->get('id');

      //find the seller in item model
      if (isset($user_location_pembejeo_na_viwatilifu_list)) {

        foreach ($user_location_pembejeo_na_viwatilifu_list as $user_location_pembejeo_na_viwatilifu_seller) {
          //Get Item Details
          $user_location_pembejeo_na_viwatilifu_sellers = Item::where('seller_id', '=', $user_location_pembejeo_na_viwatilifu_seller['id'])->get();
          //Get Item Count
          $user_location_pembejeo_na_viwatilifu_sellers_count = Item::where('seller_id', '=', $user_location_pembejeo_na_viwatilifu_seller['id'])->count();
        }

      }
      // dd($user_location_pembejeo_na_viwatilifu_sellers_count);

      $places =  Place::select('Region','District')->get();

      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu', compact('user_location', 'bidhaa', 'idadi_ya_bidhaa', 'user_location_pembejeo_na_viwatilifu_sellers','user_location_pembejeo_na_viwatilifu_sellers_count', 'places'));
    }


    public function pembejeo_na_viwatilifu_shopping_cart(Item $bidhaa_info_id)
    {
      // dd($bidhaa_info_id);
      $bidhaa_info = Item::where('id', '=', $bidhaa_info_id->id)->get();
      $user_item_list = Item::where('seller_id', '=', $bidhaa_info_id->seller_id)->get();
      $total_user_item_list = Item::where('seller_id', '=', $bidhaa_info_id->seller_id)->count();
      $places =  Place::select('Region','District')->get();
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-shopping-cart', compact('bidhaa_info', 'user_item_list', 'total_user_item_list', 'places'));
    }



    public function pembejeo_na_viwatilifu_buy_item(Item $item_id)
    {
      $item_bought = Item::where('id', '=', $item_id->id)->get();
      if (isset($item_bought)) {
        foreach ($item_bought as $item_price) {
          $item_total_price = $item_price['item_price'];
        }
      }
      $item_vat_amount = $item_total_price * 0.18;
      $item_net_price = $item_total_price - $item_vat_amount;
      // dd($item_net_price);
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-buy-item', compact('item_bought', 'item_vat_amount', 'item_net_price', 'item_total_price'));
    }

    public function pembejeo_na_viwatilifu_check_out_item(Item $item_id)
    {
      return view('UserAccountBladeFiles.Mkulima.pembejeo-na-viwatilifu-check-out-item');
    }

    public function usafiri()
    {
      $ip = '41.59.84.238';
      // $ip = $request->ip();
      $user_location = \Location::get($ip);
      $places =  Place::select('Region','District')->get();
      return view('UserAccountBladeFiles.Mkulima.usafirishaji-home-page', compact('user_location', 'places'));
    }


    public function mashine_za_kilimo_shopping_cart()
    {
      return view('UserAccountBladeFiles.Mkulima.mashine-za-kilimo-shopping-cart');
    }



    public function user_index_page_details()
    {
      //Get User Location
      $user_location = Auth::user()->user_location;

      // get regionName
       $user_location_array = explode(', ', $user_location);

       $user_region = $user_location_array[0];
       $user_district = $user_location_array[1];

       // dd($user_district);

      //Weather API call for current forecast
      $weather = new OpenWeather();
      $current = $weather->getCurrentWeatherByCityName($user_region);
       // dd($current);

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
      // dd($future_weather_forecast['forecast'][4]);

      //Temp in Celsus
      $tomorrow_fahrenheit = $future_weather_forecast['forecast'][4]['forecast']['temp'];
      $tomorrow_fahrenheit_min = $future_weather_forecast['forecast'][4]['forecast']['temp_min'];
      $tomorrow_fahrenheit_max = $future_weather_forecast['forecast'][4]['forecast']['temp_max'];

      //Get icon pathinfo for tomorrow
      $tomorrow_icon_path = $future_weather_forecast['forecast'][4]['condition']['icon'];
      //dd($icon_path);

      //Converting
      $tomorrow_celsius=round(((5/9)*($tomorrow_fahrenheit-32)),0);
      $tomorrow_celsius_min=round(((5/9)*($tomorrow_fahrenheit_min-32)),0);
      $tomorrow_celsius_max=round(((5/9)*($tomorrow_fahrenheit_max-32)),0);
      // dd($celsius);


      //Groups LIST
      $group_lists = Group::all();
      $posts = Post::orderBy('created_at', 'desc')->get();

      //places
      $user_location_details = Place::where([['Region', '=', $user_region], ['District', '=', $user_district]] )->get();
       // dd($user_location_details);

      //Get Topics
      $kilimo_topics_count_collection = Forum::where('Category', 'Kilimo')->get();
      // dd($kilimo_topics_count_collection);

      //Get Topics
      $ufugaji_topics_count_collection = Forum::where('Category', 'Ufugaji')->get();
      // dd($kilimo_topics_count_collection);

      //Get Topics
      $usafirishaji_topics_count_collection = Forum::where('Category', 'Usafirisaji')->get();
      // dd($kilimo_topics_count_collection);

      //Get $kilimo_topics_count out of an array
      foreach ($kilimo_topics_count_collection as $kilimo_topics_count_collection) {
        $kilimo_topics_count = $kilimo_topics_count_collection['Topics'];
      }

      //Get $ufugaji_topics_count out of an array
      // foreach ($ufugaji_topics_count_collection as $ufugaji_topics_count_collection) {
      //   $ufugaji_topics_count = $ufugaji_topics_count_collection['Topics'];
      // }

      $users = User::paginate(5);
      $users_count = User::count();

      return view('UserAccountBladeFiles.Mkulima.mkulima-home-page', compact('posts','user_location', 'celsius_min', 'celsius_max', 'celsius', 'tomorrow_celsius_min', 'tomorrow_celsius_max', 'tomorrow_celsius', 'icon_path', 'tomorrow_icon_path', 'group_lists', 'user_location_details', 'kilimo_topics_count', 'users', 'users_count'));

    }



}
