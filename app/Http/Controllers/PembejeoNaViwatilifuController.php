<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hashids\Hashids;
use OpenWeather;
use Image;
use App\Post;
use App\Item;
use App\User;
use Session;



class PembejeoNaViwatilifuController extends Controller
{
    public function muuzaji_Wa_pembejeo_na_viwatilifu_index_page()
    {
      //Get User IP
      // $ip = \Request::ip();

      // $ip = '41.59.84.238'; //alternative way
      $ip = \Request::ip();
      $user_location = \Location::get($ip);
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
        $posts = Post::all();
        return view('UserAccountBladeFiles.MuuzajiWaPembejeoNaViwatilifu.muuzaji-wa-pembejeo-na-viwatilifu-home-page', compact('posts', 'user_location', 'celsius_min', 'celsius_max', 'celsius', 'icon_path'));
    }


    public function muuzaji_Wa_pembejeo_na_viwatilifu_account_page()
    {
      $user_id = Session::get('user_id');
      // $ip = '41.59.84.238';
      $ip = \Request::ip();
      $user_location = \Location::get($ip);
      $user_region = $user_location->regionName;
      $user_country = $user_location->countryName;

      //get what is inside my store
      $total_items_in_my_store = Item::where('seller_id', '=', $user_id)->count();
      $my_store = Item::where('seller_id', '=', $user_id)->get();
      return view('UserAccountBladeFiles.MuuzajiWaPembejeoNaViwatilifu.muuzaji-wa-pembejeo-na-viwatilifu-account',
            compact('user_location', 'user_region', 'user_country', 'my_store', 'total_items_in_my_store'));
    }

    public function post_item_store_method(User $user_id)
    {

      //validate data
      $data = request()->validate([
        'item_name' => ['required','string'],
        'item_image' => ['required'],
        'item_category' => ['required','string'],
        'item_price' => ['required','string'],
        'item_description' => ['required','string'],
        'seller_id' => ['required','string'],
        'seller_name' => ['required','string'],

      ]);

      //check if data is validated
      if (isset($data)) {
        $item = new Item();
        $item->item_name = request()->item_name;
        $item->item_category = request()->item_category;
        $item->item_price = request()->item_price;
        $item->item_description = request()->item_description;
        $item->seller_id = request()->seller_id;
        $item->seller_name = request()->seller_name;
        $item->seller_image_location = request()->seller_image_location;

        // save image
        if(request()->hasFile('item_image')){
        $item_image = request()->file('item_image');
        $filename = time().','.$item_image->getClientOriginalExtension();
        Image::make($item_image)->resize(600, 300)->save(public_path('/Uploads/ItemImages/'.$filename));
        $item->item_image = $filename;

        //save item in Database
        $item->save();
        // dd($item);

        }

        //get what is inside my store
        $my_store = Item::where('seller_id', '=', $user_id->id)->get();
        //dd($my_store);
      }
      return redirect()-> back()->with('message', 'Bidhaa yake Imepostiwa, Asante!', compact('my_store'));
    }


}
