<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about_user_page()
    {
        //Get User Location
        $user_location = Auth::user()->user_location;

        // get regionName
         $user_location_array = explode(', ', $user_location);

         $user_region = $user_location_array[0];
         $user_district = $user_location_array[1];

        return view('UserBladeFiles.about-user', compact('user_region', 'user_district'));
    }



    public function user_timeline_page()
    {
        return view('UserBladeFiles.user-timeline');
    }



    public function user_friends_page()
    {
        return view('UserBladeFiles.user-friends');
    }



    public function user_groups_page()
    {
        return view('UserBladeFiles.user-groups');
    }

    public function user_photos_page()
    {
        return view('UserBladeFiles.user-photos');
    }

    public function user_videos_page()
    {
        return view('UserBladeFiles.user-videos');
    }

    public function user_blog_page()
    {
        return view('UserBladeFiles.user-blog');
    }

    public function user_forum_page()
    {
        return view('UserBladeFiles.user-forum');
    }

    public function user_store_page()
    {
        return view('UserBladeFiles.user-store');
    }

    public function user_setting_page()
    {
        return view('UserBladeFiles.user-settings');
    }



    public function create()
    {
        //
    }


}
