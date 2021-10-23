<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Hashids\Hashids;
use OpenWeather;
use App\Group;
use App\Place;
use App\Forum;
use App\Post;
use App\Item;
use App\User;
use Session;
use Image;
use Auth;



class PembejeoNaViwatilifuController extends Controller
{


    public function muuzaji_Wa_pembejeo_na_viwatilifu_index_page(Request $request)
    {
      return $this-> user_index_page_details();
    }


    public function muuzaji_Wa_pembejeo_na_viwatilifu_account_page(User $user_id)
    {

      $user_id = User::where('id', '=', $user_id->id)->get();

      //Take id out of an array
      foreach ($user_id as $user_id) {
        $user_id = $user_id->id;
      }



      $ip = '41.59.84.238';
      // $ip = $request->ip();
      $user_location = Location::get($ip);
      // $user_region = $user_location->regionName;
      // $user_country = $user_location->countryName;
      $user_region = 'Dar-es-salaam';
      $user_country = 'Tanzania';

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
      //dd($future_weather_forecast);


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
      $usafirishaji_topics_count_collection = Forum::where('Category', 'Usafirisaji')->get();
      // dd($kilimo_topics_count_collection);

      //Get $kilimo_topics_count out of an array
      foreach ($kilimo_topics_count_collection as $kilimo_topics_count_collection) {
        $kilimo_topics_count = $kilimo_topics_count_collection['Topics'];
      }

      return view('UserAccountBladeFiles.MuuzajiWaPembejeoNaViwatilifu.muuzaji-wa-pembejeo-na-viwatilifu-home-page', compact('posts', 'user_location', 'celsius_min', 'celsius_max', 'celsius', 'icon_path', 'group_lists', 'user_location_details', 'kilimo_topics_count'));



    }


}
